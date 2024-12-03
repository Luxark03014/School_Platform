@extends('layouts.app')
@section('title', 'Create Project')
@section('content')
<div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-md">
    <h1 class="text-3xl font-bold mb-6 text-blue-600">Create a New Project</h1>

    @if ($errors->any())
        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('projects.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
            <input type="text" class="w-full border border-gray-300 rounded-md p-3 focus:ring-2 focus:ring-blue-500 focus:outline-none" id="name" name="name" value="{{ old('name') }}" required>
        </div>
        <div class="mb-4">
            <label for="description" class="block text-gray-700 font-bold mb-2">Description</label>
            <textarea class="w-full border border-gray-300 rounded-md p-3 focus:ring-2 focus:ring-blue-500 focus:outline-none" id="description" name="description" rows="4">{{ old('description') }}</textarea>
        </div>
        <div class="mb-4">
            <label for="deadline" class="block text-gray-700 font-bold mb-2">Deadline</label>
            <input type="date" class="w-full border border-gray-300 rounded-md p-3 focus:ring-2 focus:ring-blue-500 focus:outline-none" id="deadline" name="deadline" value="{{ old('deadline') }}" required>
        </div>
        <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-150 ease-in-out">Create Project</button>
    </form>
</div>
@endsection