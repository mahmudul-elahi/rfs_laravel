<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->get();

        return view('frontend.projects.index', compact('projects'));
    }


    public function show(Project $project)
    {
        return view('frontend.projects.show', compact('project'));
    }
}
