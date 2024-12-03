<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'School Platform')</title>
    @vite(['resources/css/app.css'])
</head>

<body class="bg-blue-50 font-sans text-gray-900 flex flex-col min-h-screen">

    <nav class="bg-blue-600 text-white shadow-lg">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold">School Platform</h1>
            <ul class="flex space-x-6">
                <li><a href="/" class="hover:text-blue-200 transitison duration-150 ease-in-out">Inicio</a></li>
                <li><a href="{{ route('projects.index') }}"
                        class="hover:text-blue-200 transition duration-150 ease-in-out">Proyectos</a></li>

                @if (Auth::check())
                    <!-- Mostrar el formulario de Cerrar Sesión si el usuario está autenticado -->
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="hover:text-blue-200 transition duration-150 ease-in-out">
                            Cerrar Sesión
                        </button>
                    </form>
                @else
                  
                    <a href="{{ route('login') }}" class="hover:text-blue-200 transition duration-150 ease-in-out">
                        Iniciar Sesión
                    </a>
                @endif

            </ul>
        </div>
    </nav>


    <main class="container mx-auto px-4 py-8 flex-grow">
        @yield('content')
    </main>


    <footer class="bg-blue-600 text-white py-6 mt-auto">
        <div class="container mx-auto text-center">
            <p>© 2024 School Platform. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>

</html>
