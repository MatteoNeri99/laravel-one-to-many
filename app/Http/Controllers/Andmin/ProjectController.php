<?php

namespace App\Http\Controllers\Andmin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects=Project::all();
        return view('admin\project\index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $project=new Project();
        return view ('admin\project\create', compact('project'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            'title' => 'required|max:255|min:4',
            'date'  =>  'required|date',
            'description'  => 'required|max:255|min:4',
            'image'  => 'nullable'
            ]);

        $newProject= new Project();
        $newProject->title = $data['title'];
        $newProject->date = $data['date'];
        $newProject->description= $data['description'];
        $newProject->image = $data['image'];
        $newProject->save();


        return redirect()->route('admin.projects.show' , $newProject);

    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
        return view ('admin\project\show' , compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view ('admin.project.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data=$request->validate([
            'title' => 'required|max:255|min:4',
            'date'  =>  'required|date',
            'description'  => 'required|max:255|min:4',
            'image'  => 'nullable',
            ]);

        $project->update($data);

        return redirect()->route('admin.projects.update' , $project);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('admin.projects.index');
    }
}
