<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Task;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TasksController extends Controller
{
    public function index(Project $project){
       return view('tasks.index', compact('project'));
    }
    
    public function create(Project $project){
        return view('tasks.create', compact('project'));
    }
    
    public function store(Project $project){
        
    }
    
    public function show(Project $project, Task $task){
        return view('tasks.show', compact('project', 'task'));
    }
    
    public function edit(Project $project, Task $task){
        return view('tasks.edit', compact('project', 'task'));
    }
    
    public function update(Project $project, Task $task){
        
    }
    
    public function destroy(Project $project, Task $task){
        
    }
    
}
