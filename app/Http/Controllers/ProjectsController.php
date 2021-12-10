<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        return view('projects.index', compact('projects'));
    }

    public function show(Project $project)
    {
       // $project = Project::findOrFail(request('project')); Not needed due to dependency injection

        return view('projects.show', ['project' => $project]);
    }

    public function store()
    {
        //Validate
        $attributes = request()->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        //Persist
        Project::create($attributes); // Could refactor inline

        //Redirect
        return redirect('/projects');
    }
}
