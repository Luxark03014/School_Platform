@extends('layouts.app')
@section('title', 'Project Details')
@section('content')
<div class="bg-white shadow-md rounded-lg p-6 max-w-2xl mx-auto">
    <h1 class="text-3xl font-bold mb-4 text-blue-600">{{ $project->name }}</h1>
    <div class="space-y-4">
        <p><span class="font-semibold text-gray-700">Description:</span> {{ $project->description }}</p>
        <p><span class="font-semibold text-gray-700">Deadline:</span> {{ $project->deadline }}</p>
        <p><span class="font-semibold text-gray-700">User:</span> {{ $project->user->name }}</p>
    </div>
    <a href="{{ route('projects.index') }}" class="mt-6 inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 transition duration-150 ease-in-out">Back to Projects</a>
</div>
@endsection