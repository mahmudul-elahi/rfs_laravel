<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAccessibilityRequest;
use App\Http\Requests\UpdateAccessibilityRequest;
use App\Models\Accessibility;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AccessibilityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $accessibilities = Accessibility::latest()->paginate(10);

        return view('backend.accessibilities.index', compact('accessibilities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.accessibilities.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAccessibilityRequest $request)
    {
        $data = $request->validated();

        $slug = Str::slug($request->heading, '-', null);
        $originalSlug = $slug;
        $counter = 1;

        while (Accessibility::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        $data['slug'] = $slug;

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $path = $request->file('image')->store('accessibilities', 'public');
            $data['image'] = 'storage/' . $path;
        }

        $accessibility = Accessibility::create($data);

        if ($request->filled('meta_keyword') && method_exists($accessibility, 'syncTags')) {
            $tags = collect(explode(',', $request->meta_keyword))
                ->map(fn($tag) => trim($tag))
                ->filter()
                ->toArray();

            $accessibility->syncTags($tags);
        }

        return redirect()
            ->route('accessibilities.index')
            ->with('success', 'Accessibility item created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Accessibility $accessibility)
    {
        return view('backend.accessibilities.edit', compact('accessibility'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAccessibilityRequest $request, Accessibility $accessibility)
    {
        $data = $request->validated();

        if ($accessibility->heading !== $request->heading) {
            $slug = Str::slug($request->heading, '-', null);
            $originalSlug = $slug;
            $counter = 1;

            while (
                Accessibility::where('slug', $slug)
                    ->where('id', '!=', $accessibility->id)
                    ->exists()
            ) {
                $slug = $originalSlug . '-' . $counter;
                $counter++;
            }

            $data['slug'] = $slug;
        }

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            if ($accessibility->image) {
                $oldImagePath = str_starts_with($accessibility->image, 'storage/')
                    ? substr($accessibility->image, 8)
                    : $accessibility->image;

                Storage::disk('public')->delete($oldImagePath);
            }

            $path = $request->file('image')->store('accessibilities', 'public');
            $data['image'] = 'storage/' . $path;
        }

        $accessibility->update($data);

        if (method_exists($accessibility, 'syncTags')) {
            $tags = collect(explode(',', (string) $request->input('meta_keyword')))
                ->map(fn($tag) => trim($tag))
                ->filter()
                ->toArray();

            $accessibility->syncTags($tags);
        }

        return redirect()
            ->route('accessibilities.index')
            ->with('success', 'Accessibility item updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Accessibility $accessibility)
    {
        $accessibility->delete();

        return back()->with('success', 'Accessibility item deleted successfully.');
    }
}
