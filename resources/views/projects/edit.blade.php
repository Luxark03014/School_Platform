@extends('layouts.app')
@section('title', 'Edit Project')
@section('content')
<div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-md">
    <h1 class="text-3xl font-bold mb-6 text-blue-600">Edit Project</h1>
    <form action="{{ route('projects.update', $project->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-bold mb-2">Project Name:</label>
            <input type="text" name="name" id="name" value="{{ $project->name }}" 
                   class="w-full border border-gray-300 rounded-md p-3 focus:ring-2 focus:ring-blue-500 focus:outline-none" 
                   required>
        </div>
        <div class="mb-4">
            <label for="description" class="block text-gray-700 font-bold mb-2">Description:</label>
            <textarea name="description" id="description" rows="4" 
                      class="w-full border border-gray-300 rounded-md p-3 focus:ring-2 focus:ring-blue-500 focus:outline-none" 
                      required>{{ $project->description }}</textarea>
        </div>
        <div class="mb-4">
            <label for="deadline" class="block text-gray-700 font-bold mb-2">Deadline:</label>
            <input type="date" name="deadline" id="deadline" value="{{ $project->deadline }}" 
                   class="w-full border border-gray-300 rounded-md p-3 focus:ring-2 focus:ring-blue-500 focus:outline-none" 
                   required>
        </div>
        <button type="submit" 
                class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-150 ease-in-out">
            Update Project
        </button>
    </form>
</div>
@endsection