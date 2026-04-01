<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePageRequest;
use App\Http\Requests\UpdatePageRequest;
use App\Models\Page;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::latest()->paginate(10);

        return view('backend.pages.index', compact('pages'));
    }

    public function create()
    {
        return view('backend.pages.create');
    }

    public function store(StorePageRequest $request)
    {
        $data = $request->validated();
        $data['slug'] = $this->generateUniqueSlug($request->title);

        Page::create($data);

        return redirect()
            ->route('pages.index')
            ->with('success', 'Page created successfully!');
    }

    public function edit(Page $page)
    {
        return view('backend.pages.edit', compact('page'));
    }

    public function update(UpdatePageRequest $request, Page $page)
    {
        $data = $request->validated();

        if ($page->title !== $request->title) {
            $data['slug'] = $this->generateUniqueSlug($request->title, $page->id);
        }

        $page->update($data);

        return redirect()
            ->route('pages.index')
            ->with('success', 'Page updated successfully!');
    }

    public function destroy(Page $page)
    {
        $page->delete();

        return back()->with('success', 'Page deleted successfully!');
    }

    private function generateUniqueSlug(string $title, ?int $ignoreId = null): string
    {
        $slug = Str::slug($title, '-', null);
        $slug = $slug !== '' ? $slug : 'page';
        $originalSlug = $slug;
        $counter = 1;

        while (
            Page::where('slug', $slug)
                ->when($ignoreId, fn($query) => $query->where('id', '!=', $ignoreId))
                ->exists()
        ) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        return $slug;
    }
}
