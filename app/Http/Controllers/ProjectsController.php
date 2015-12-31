<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProjectsController extends Controller
{
    public function index(){
        $project = Project::all();
        return view('projects.index', compact('projects'));
    }
    
    public function create(){
        return view('projects.create');
    }
    
    public function store(){
        
    }
    
    public function show(Project $project){
        return view('projects.show', compact('project'));
    }
    
    public function edit(Project $project){
        return view('projects.show', compact('project'));
    }
    
    public function update(Project $project){
        
    }
    
    public function destroy(Project $project){
        
    }
    
}
