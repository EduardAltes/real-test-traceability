<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-blue-900 leading-tight">
            {{ __("Formulari de Sol·licitud d'Estudi") }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 bg-white p-6 rounded-lg shadow">
            <form method="POST" action="{{ route('sample-reception.store') }}">
                @csrf

                <!-- Identificació (Text QR) -->
                <div class="mb-4">
                    <label for="identificacio" class="block text-gray-700">Identificació (QR)</label>
                    <input type="text" id="identificacio" name="identificacio" class="w-full p-2 border rounded" placeholder="Escaneja o introdueix el QR" required />
                </div>

                <!-- Gènere (Desplegable) -->
                <div class="mb-4">
                    <label for="genere" class="block text-gray-700">Gènere</label>
                    <select id="genere" name="genere" class="w-full p-2 border rounded" required>
                        <option value="">Selecciona...</option>
                        <option value="home">Home</option>
                        <option value="dona">Dona</option>
                    </select>
                </div>

                <!-- Edat (Número 0-110) -->
                <div class="mb-4">
                    <label for="edat" class="block text-gray-700">Edat</label>
                    <input type="number" id="edat" name="edat" class="w-full p-2 border rounded" min="0" max="110" required />
                </div>

                <!-- Motiu sol·licitud (Text) -->
                <div class="mb-4">
                    <label for="motiu" class="block text-gray-700">Motiu de la sol·licitud</label>
                    <input type="text" id="motiu" name="motiu" class="w-full p-2 border rounded" placeholder="Introdueix el motiu" required />
                </div>

                <!-- Procedència (Desplegable) -->
                <div class="mb-4">
                    <label for="procedencia" class="block text-gray-700">Procedència</label>
                    <select id="procedencia" name="procedencia" class="w-full p-2 border rounded">
                        <option value="">Selecciona...</option>
                        <option value="alab10">ALab10</option>
                        <option value="ataller10">ATaller10</option>
                        <option value="altres">Altres</option>
                    </select>
                </div>

                <!-- Persona que sol·licita estudi (Text) -->
                <div class="mb-4">
                    <label for="sollicitant" class="block text-gray-700">Persona que sol·licita estudi</label>
                    <input type="text" id="sollicitant" name="sollicitant" class="w-full p-2 border rounded" placeholder="Nom complet" required />
                </div>

                <!-- Data entrada -->
                <div class="mb-4">
                    <label for="data_entrada" class="block text-gray-700">Data d'entrada</label>
                    <input type="date" id="data_entrada" name="data_entrada" class="w-full p-2 border rounded" required />
                </div>

                <!-- Hora entrada -->
                <div class="mb-4">
                    <label for="hora_entrada" class="block text-gray-700">Hora d'entrada</label>
                    <input type="time" id="hora_entrada" name="hora_entrada" class="w-full p-2 border rounded" required />
                </div>

                <!-- Tipus (Desplegable) -->
                <div class="mb-4">
                    <label for="tipus" class="block text-gray-700">Tipus</label>
                    <select id="tipus" name="tipus" class="w-full p-2 border rounded" required>
                        <option value="">Selecciona...</option>
                        <option value="tipus_a">Tipus A</option>
                        <option value="tipus_b">Tipus B</option>
                    </select>
                </div>

                <!-- Òrgan/Localització (Desplegable) -->
                <div class="mb-4">
                    <label for="organ_localitzacio" class="block text-gray-700">Òrgan/Localització</label>
                    <select id="organ_localitzacio" name="organ_localitzacio" class="w-full p-2 border rounded" required>
                        <option value="">Selecciona...</option>
                        <option value="organ_1">Òrgan 1</option>
                        <option value="localitzacio_1">Localització 1</option>
                    </select>
                </div>

                <!-- Casella de verificació de recepció -->
                <div class="mb-4">
                    <label class="block text-gray-700">
                        <input type="checkbox" id="recepcio" name="recepcio" class="mr-2"> Verificació de recepció
                    </label>
                </div>

                <!-- Botó d'enviament -->
                <div class="mt-6">
                    <button type="submit" class="bg-blue-500 px-4 py-2 rounded hover:bg-blue-700">
                        Envia
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
