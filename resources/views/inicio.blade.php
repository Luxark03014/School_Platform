@extends('layouts.app')

@section('title', 'Bienvenido a School Platform')

@section('content')
<div class="bg-gradient-to-b from-blue-100 to-white min-h-screen">
    <div class="container mx-auto px-4 py-12">
        <header class="text-center mb-12">
            <h1 class="text-4xl font-bold text-blue-600 mb-4">Bienvenido a School Platform</h1>
            <p class="text-xl text-gray-600">Potenciando a los estudiantes para gestionar y mostrar sus proyectos</p>
        </header>

        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="space-y-6">
                <h2 class="text-3xl font-semibold text-gray-800">¿Qué es School Platform?</h2>
                <p class="text-gray-600 leading-relaxed">
                    School Platform es una potente aplicación CRUD (Crear, Leer, Actualizar, Eliminar) diseñada específicamente para que los estudiantes gestionen sus proyectos académicos. Ofrece una interfaz intuitiva para organizar, rastrear y mostrar tu trabajo a lo largo de tu recorrido educativo.
                </p>
                <a href="{{ route('projects.create') }}" class="inline-block bg-blue-500 text-white py-2 px-6 rounded-lg hover:bg-blue-600 transition duration-300 ease-in-out">Comienza tu primer proyecto</a>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-semibold text-gray-800 mb-4">Características principales</h3>
                <ul class="space-y-4">
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <span class="text-gray-600">Crea y gestiona múltiples proyectos</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <span class="text-gray-600">Establece plazos y rastrea el progreso</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <span class="text-gray-600">Colabora con compañeros y profesores</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <span class="text-gray-600">Muestra tu portafolio de trabajos</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="mt-16">
            <h2 class="text-3xl font-semibold text-gray-800 mb-6 text-center">¿Cómo funciona?</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <div class="bg-blue-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Crear</h3>
                    <p class="text-gray-600">Comienza creando un nuevo proyecto y añadiendo todos los detalles necesarios.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <div class="bg-blue-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Gestionar</h3>
                    <p class="text-gray-600">Actualiza tus proyectos a medida que avanzas, manteniendo todo organizado.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <div class="bg-blue-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Completar</h3>
                    <p class="text-gray-600">Marca los proyectos como completados y muestra tus logros.</p>
                </div>
            </div>
        </div>

        <div class="mt-16 text-center">
            <h2 class="text-3xl font-semibold text-gray-800 mb-6">¿Listo para empezar?</h2>
            <a href="{{ route('register') }}" class="inline-block bg-blue-500 text-white py-3 px-8 rounded-lg hover:bg-blue-600 transition duration-300 ease-in-out text-lg font-semibold">Regístrate ahora</a>
            <p class="mt-4 text-gray-600">¿Ya tienes una cuenta? <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Inicia sesión aquí</a></p>
        </div>
    </div>
</div>
@endsection
