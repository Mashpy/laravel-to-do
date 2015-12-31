@extends('layouts.master')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@stop

@section('content')
    <h2>Projects</h2>
    @if(!$projects->count())
    you have no projects
    @else
    <ul>
        @foreach($projects as $project)
        <li><a href="{{ route('projects.show', $project->slug) }}">{{ $project->name }}</a></li>
        @endforeach
    </ul>
    
    @endif

    
@stop