<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// ps4 autoloading 
use App\Project; 

class ProjectsController extends Controller
{
    public function index()
    {
    	$projects = Project::all();
    	// return $project;

		return view('projects.index', compact('projects'));
    }

    public function create()
    {
    	return view('projects/create');
    }

    public function store()
    {
    	// return request()->all();

        // Project::create([
        //     'title'         => request('title'),
        //     'description'   => request('description')
        // ]);

        //validate request parameters 
        // request()->validate([
        //     'title'        => 'required',
        //     'description'  => 'required'
        // ]);
        // Project::create(request(['title','description']));

        //storing validated into variable and then pass to create
        $attributes =  request()->validate([
            'title'        => 'required',
            'description'  => 'required'
        ]);
        Project::create($attributes);

    	// $project = new Project();
    	// $project->title = request('title');
    	// $project->description = request('description');
    	// $project->save();

    	return redirect('/projects');
    }
    public function show($id)
    {
        # code...
    }
    // edit project using more cleaning way
    // public function edit(Project $project)
    // {
    //     return view('projects.edit', compact('project')) ;
    // }

    public function edit($id)
    {
        // Show 404 error if page is not found
        $project = Project::findorFail($id); 

        // $project = Project::find($id);

        return view('projects.edit', compact('project')) ;
    }
    public function update($id)
    {
        request()->validate([
            'title'        => 'required',
            'description'  => 'required'
        ]);
        $project = Project::findorFail($id);
        $project->title = request('title');
        $project->description = request('description');
        $project->save();
        return redirect('/projects');
    }
    public function destroy($id)
    {
        $project = Project::findorFail($id)->delete();
        return redirect('/projects');
    }
}
