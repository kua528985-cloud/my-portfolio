<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller

{
    public function portfolio()
{
    $projects = Project::latest()->get();

    return view('projects', compact('projects'));
}

public function home()
{
    $projects = Project::latest()->get();

    return view('home', compact('projects'));
}


    public function index()
    {
        $projects = Project::latest()->get();

        return view('dashboardpage.showprojects', compact('projects'));
    }

    public function create()
    {
        return view('dashboardpage.addproject');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'github_url' => 'nullable|url',
            'live_url' => 'nullable|url',
            'technologies' => 'nullable|string|max:255',
        ]);

        Project::create($data);

        return redirect('/dashboard/projects')->with('success', 'Project added!');
    }

    public function edit(string $id)
    {
        $project = Project::findOrFail($id);

        return view('dashboardpage.editproject', compact('project'));
    }

    public function update(Request $request, string $id)
    {
        $project = Project::findOrFail($id);

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'github_url' => 'nullable|url',
            'live_url' => 'nullable|url',
            'technologies' => 'nullable|string|max:255',
        ]);

        $project->update($data);

        return redirect('/dashboard/projects')->with('success', 'Project updated!');
    }

    public function destroy(string $id)
    {
        Project::findOrFail($id)->delete();

        return redirect('/dashboard/projects')->with('success', 'Project deleted!');
    }
}