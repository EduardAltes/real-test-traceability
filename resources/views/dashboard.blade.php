<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-blue-900 leading-tight">
            {{ __('Escriptori') }}
        </h2>
    
    <div class="py-12"> 
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <ul class="flex border-b justify-start text-lg">
                <li class="mr-1">
                    <a class="tab-link bg-white border-blue-500 inline-block border rounded-t py-2 px-4 font-semibold active transition-all duration-50" data-tab="citologia" href="#">Citologia</a>
                </li>
                <li class="mr-1">
                    <a class="tab-link bg-white inline-block border rounded-t py-2 px-4 font-semibold transition-all duration-50" data-tab="biopsia" href="#">Biopsia</a>
                </li>
            </ul>
            <div class="tab-content bg-white p-4 rounded-b border-blue-500" id="citologia">
                <div class="flex justify-around gap-x-4">
                    <div class="box-select bg-blue-300 border p-4 rounded-lg cursor-pointer">
                        <a href="{{route('sample-reception.create')}}">Recepció i registre de la mostra</a>
                    </div>
                    <div class="box-select bg-blue-300 border p-4 rounded-lg cursor-pointer">
                    <a href="{{route('sample-processment.create')}}">Processament citologia</a>
                    </div>
                    <div class="box-select bg-blue-300 p-4 border rounded-lg cursor-pointer">
                        Diagnòstic i arxiu
                    </div>
                </div>
            </div>

            <div class="tab-content bg-white p-4 rounded-b border-blue-500 hidden" id="biopsia">
                <div class="flex justify-around gap-x-4">
                    <div class="box-select bg-blue-300 border p-4 rounded-lg cursor-pointer">
                        <a href="">Recepció i registre de la mostra</a>
                    </div>
                    <div class="box-select bg-blue-300 border p-4 rounded-lg cursor-pointer" onclick="openModal()">
                        Processament biopsia
                    </div>
                    <div class="box-select bg-blue-300 border p-4 rounded-lg cursor-pointer">
                        Diagnòstic i arxiu
                    </div>
                </div>
            </div>
        </div>
    </div>
    </x-slot>
</x-app-layout>

    <!-- Modal -->
    <div id="myModal" class="modal hidden fixed top-0 left-0 right-0 bottom-0 flex justify-center items-center bg-gray-600 bg-opacity-50">
        <div class="modal-content bg-white p-6 rounded-lg">
            <div class="flex justify-around gap-x-4">
                <div class="box-select bg-red-500 p-4 rounded-lg cursor-pointer">
                    Estació de tallat de la mostra
                </div>
                <div class="box-select bg-purple-500 p-4 rounded-lg cursor-pointer">
                    Inclusió en parafina, tallat i tinció
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
    const tabLinks = document.querySelectorAll('.tab-link');
    const tabContents = document.querySelectorAll('.tab-content');

    tabLinks.forEach(link => {
        link.addEventListener('click', function (event) {
            event.preventDefault();
            const tab = link.getAttribute('data-tab');

            // Ocultar todos los contenidos
            tabContents.forEach(content => {
                content.classList.add('hidden');
            });

            // Mostrar el contenido seleccionado
            document.getElementById(tab).classList.remove('hidden');

            // Quitar clases activas de los links
            tabLinks.forEach(tab => {
                tab.classList.remove('border-blue-500', 'active');
            });

            // Activar el link clicado
            link.classList.add('border-blue-500', 'active');
        });
    });
});

        function openModal() {
            document.getElementById('myModal').classList.remove('hidden');
        }

        // Función para cerrar el modal
        document.getElementById('myModal').addEventListener('click', function(event) {
            if (event.target === this) {
                this.classList.add('hidden');
            }
        });
    </script>

    <style>
        .tab-link.active {
            font-size: 1.2rem;
            border-bottom: 2px solid blue;
        }

        .box-select:hover {
            opacity: 0.8;
        }

        .modal {
            display: none;
        }

        .modal.active {
            display: flex;
        }
    </style>