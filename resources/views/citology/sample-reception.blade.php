<x-app-layout>
    <x-slot name="header">
    <nav>
        <div class="max-w-7xl mx-auto flex items-center">
            <!-- Dropdown de Citologia -->
            <div class="relative group">
                <button class=" px-4 py-2 rounded-md">Citologia</button>
                <ul class="dropdown-content absolute hidden bg-white shadow-md rounded-md">
                    <li><a href="#" class="block px-4 py-2 text-gray-800">Option 1</a></li>
                    <li><a href="#" class="block px-4 py-2 text-gray-800">Option 2</a></li>
                    <li><a href="#" class="block px-4 py-2 text-gray-800">Option 3</a></li>
                </ul>
            </div>

            <!-- Dropdown de Biopsia -->
            <div class="relative group">
                <button class=" px-4 py-2 rounded-md">Biopsia</button>
                <ul class="dropdown-content absolute hidden bg-white shadow-md rounded-md">
                    <li><a href="#" class="block px-4 py-2 text-gray-800">Option 1</a></li>
                    <li class="relative group"><a href="#" class="block px-4 py-2 text-gray-800">Option 2</a>
                        <!-- Subdropdown -->
                        <ul class="dropdown-subcontent absolute left-full top-0 hidden bg-white shadow-md rounded-md">
                            <li><a href="#" class="block px-4 py-2 text-gray-800">Suboption 1</a></li>
                            <li><a href="#" class="block px-4 py-2 text-gray-800">Suboption 2</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="block px-4 py-2 text-gray-800">Option 3</a></li>
                </ul>
            </div>
            </div>
    </nav>
        <h2 class="font-bold text-2xl text-blue-900 leading-tight">
            {{ __('Sample reception') }}
        </h2>
    </x-slot>

    <style>
        /* Dropdown básico */
        .dropdown-content {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            min-width: 160px;
            z-index: 10;
            transition: opacity 0.3s ease;
        }

        .dropdown-subcontent {
            display: none;
            position: absolute;
            left: 100%;
            top: 0;
            min-width: 160px;
            z-index: 20;
            transition: opacity 0.3s ease;
        }

        /* Mostrar dropdown y subdropdown al hacer hover */
        .group:hover .dropdown-content {
            display: block;
            opacity: 1;
        }

        .group:hover .dropdown-subcontent {
            display: block;
            opacity: 1;
        }

        /* Mejorar visibilidad del subdropdown */
        .group:hover .dropdown-subcontent {
            display: block;
            opacity: 1;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Estilos adicionales para los enlaces dentro del dropdown */
        .dropdown-content li a, .dropdown-subcontent li a {
            padding: 10px;
            text-decoration: none;
            color: #333;
            transition: background-color 0.3s ease;
        }

        .dropdown-content li a:hover, .dropdown-subcontent li a:hover {
            background-color: #f1f1f1;
        }

        /* Cambio de color de fondo en el botón */
        .hover\:bg-gray-700:hover {
            background-color: #4b5563;
        }
    </style>
</x-app-layout>
