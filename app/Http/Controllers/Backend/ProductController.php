<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the product.
     */
    public function index()
    {
        $products = Product::latest()->paginate(10);

        return view('backend.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new product.
     */
    public function create()
    {
        return view('backend.products.create');
    }

    /**
     * Store a newly created product in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $data = $request->validated();


        $slug = Str::slug($request->heading);
        $originalSlug = $slug;
        $counter = 1;
        while (Product::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }
        $data['slug'] = $slug;

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $path = $request->file('image')->store('products', 'public');
            $data['image'] = $path;
        }

        $product = Product::create($data);

        if ($request->filled('meta_keyword')) {
            $tags = collect(explode(',', $request->meta_keyword))
                ->map(fn($t) => trim($t))
                ->filter()
                ->toArray();

            if (method_exists($product, 'syncTags')) {
                $product->syncTags($tags);
            }
        }

        return redirect()->route('products.index')
            ->with('success', 'Product created successfully!');
    }

    /**
     * Display the specified product.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified product.
     */
    public function edit(Product $product)
    {
        return view('backend.products.edit', compact('product'));
    }

    /**
     * Update the specified product in storage.
     */

    public function update(UpdateProductRequest $request, Product $product)
    {
        $data = $request->validated();

        if ($product->heading !== $request->heading) {

            $slug = Str::slug($request->heading);
            $originalSlug = $slug;
            $counter = 1;

            while (
                Product::where('slug', $slug)
                ->where('id', '!=', $product->id)
                ->exists()
            ) {
                $slug = $originalSlug . '-' . $counter;
                $counter++;
            }

            $data['slug'] = $slug;
        }

        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            if ($product->image && Storage::disk('public')->exists($product->image)) {
                Storage::disk('public')->delete($product->image);
            }

            $path = $request->file('image')->store('products', 'public');
            $data['image'] = $path;
        }

        $product->update($data);

        if ($request->filled('meta_keyword')) {

            $tags = collect(explode(',', $request->meta_keyword))
                ->map(fn($t) => trim($t))
                ->filter()
                ->toArray();

            if (method_exists($product, 'syncTags')) {
                $product->syncTags($tags);
            }
        } else {
            if (method_exists($product, 'syncTags')) {
                $product->syncTags([]);
            }
        }

        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully!');
    }

    /**
     * Remove the specified product from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return back()->with('success', 'Product deleted successfully!');
    }
}
