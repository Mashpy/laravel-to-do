<?php

namespace App\Http\Controllers;

use Input;
use Redirect;
use Illuminate\Http\Request;
use App\Project;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProjectsController extends Controller
{
    public function index(){
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }
    
    public function create(){
        return view('projects.create');
    }
    
public function store()
{
	$input = Request::all();
	Project::create( $input );
 
	return Redirect::route('projects.index')->with('message', 'Project created');
}
    
    public function show(Project $project){
        return view('projects.show', compact('project'));
    }
    
    public function edit(Project $project){
        return view('projects.show', compact('project'));
    }
    
public function update(Project $project)
{
	$input = array_except(Input::all(), '_method');
	$project->update($input);
 
	return Redirect::route('projects.show', $project->slug)->with('message', 'Project updated.');
}
    
public function destroy(Project $project)
{
	$project->delete();
 
	return Redirect::route('projects.index')->with('message', 'Project deleted.');
}
    
}
