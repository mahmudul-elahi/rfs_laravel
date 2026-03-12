<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    /**
     * Display a listing of the project.
     */
    public function index()
    {
        $projects = Project::latest()->paginate(10);

        return view('backend.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new project.
     */
    public function create()
    {
        return view('backend.projects.create');
    }

    /**
     * Store a newly created project in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        $data = $request->validated();

        $slug = Str::slug($request->heading);
        $originalSlug = $slug;
        $counter = 1;

        while (Project::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        $data['slug'] = $slug;

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file = $request->file('image');
            $path = $file->store('projects', 'public');
            $data['image'] = $path;
        }

        $project = Project::create($data);

        if ($request->filled('meta_keyword')) {
            $tags = collect(explode(',', $request->meta_keyword))
                ->map(fn($t) => trim($t))
                ->filter()
                ->toArray();

            $project->syncTags($tags);
        }

        return redirect()->route('projects.index')
            ->with('success', 'Project created successfully!');
    }


    /**
     * Display the specified project.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified project.
     */
    public function edit(Project $project)
    {
        return view('backend.projects.edit', compact('project'));
    }

    /**
     * Update the specified project in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        $data = $request->validated();

        if ($project->heading !== $request->heading) {

            $slug = Str::slug($request->heading);
            $originalSlug = $slug;
            $counter = 1;

            while (
                Project::where('slug', $slug)
                ->where('id', '!=', $project->id)
                ->exists()
            ) {
                $slug = $originalSlug . '-' . $counter;
                $counter++;
            }

            $data['slug'] = $slug;
        }

        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            if ($project->image) {
                Storage::disk('public')->delete(str_replace('storage/', '', $project->image));
            }

            $path = $request->file('image')->store('projects', 'public');
            $data['image'] = $path;
        }

        $project->update($data);

        if ($request->filled('meta_keyword')) {
            $tags = collect(explode(',', $request->meta_keyword))
                ->map(fn($t) => trim($t))
                ->filter()
                ->toArray();

            $project->syncTags($tags);
        } else {
            $project->syncTags([]);
        }

        return redirect()->route('projects.index')
            ->with('success', 'Project updated successfully!');
    }

    /**
     * Remove the specified project from storage.
     */
    public function destroy(Project $project)
    {
        if ($project->image) {
            Storage::disk('public')->delete(str_replace('storage/', '', $project->image));
        }

        $project->syncTags([]);

        $project->delete();

        return back()->with('success', 'Project Deleted Successfully.');
    }
}
