<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // Mostrar la lista de proyectos
    public function index()
    {
        // Obtener todos los proyectos con el usuario relacionado
        $projects = Project::with('user')->get();
        return view('projects.index', compact('projects')); // Pasar a la vista
    }
    // Mostrar el formulario de creación
    public function create()
    {
        // Mostrar el formulario de creación
        return view('projects.create');
    }
    // Guardar un nuevo proyecto
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'deadline' => 'required|date',
        ]);
       
        $defaultUser = \App\Models\User::first();
        if (!$defaultUser) {
            return redirect()->route('projects.index')->with('error', 'No 
default user found. Please create a user first.');
        }
        Project::create([
            'name' => $request->name,
            'description' => $request->description,
            'deadline' => $request->deadline,
            'user_id' => auth()->id() ?? "No se ha podido identificar el usuario",
        ]);
        return redirect()->route('projects.index')->with('success', 'Project 
created successfully!');
    }
    // Mostrar un proyecto específico
    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }
    // Mostrar el formulario de edición
    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }
    // Actualizar un proyecto
    public function update(Request $request, Project $project)
    {
        // Validar los datos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'deadline' => 'required|date',
        ]);
        $project->update($request->only([
            'name',
            'description',
            'deadline'
        ]));
        return redirect()->route('projects.index')->with(
            'success',
            'Project updated successfully!'
        );
    }
    // Eliminar un proyecto
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index')->with(
            'success',
            'Project deleted successfully!'
        );
    }
}
