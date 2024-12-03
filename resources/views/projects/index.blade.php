@extends('layouts.app')
@section('title', 'Projects List')
@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-3xl font-bold mb-6 text-blue-600">Projects List</h1>
    @if (session('success'))
    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
        {{ session('success') }}
    </div>
    @endif
    <a href="{{ route('projects.create') }}" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 transition duration-150 ease-in-out mb-4 inline-block">Create New Project</a>
    <div class="overflow-x-auto bg-white shadow-md rounded-lg">
        <table class="min-w-full leading-normal">
            <thead>
                <tr>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Name</th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Description</th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Deadline</th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">User</th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($projects as $project)
                <tr>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $project->name }}</td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ Str::limit($project->description, 50) }}</td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $project->deadline }}</td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $project->user->name }}</td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <a href="{{ route('projects.show', $project) }}" class="text-blue-600 hover:text-blue-900 mr-2">View</a>
                        @if(auth()->user()->role === 'admin')
                        <a href="{{ route('projects.edit', $project) }}" class="text-yellow-600 hover:text-yellow-900 mr-2">Edit</a>
                       
 

                        <form action="{{ route('projects.destroy', $project) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('Are you sure you want to delete this project?')">Delete</button>
                        </form>
                        @endif
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-center">No projects found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection