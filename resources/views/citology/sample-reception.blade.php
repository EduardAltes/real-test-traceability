<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-blue-900 leading-tight">
            {{ __("Formulari de Sol·licitud d'Estudi") }}
        </h2>
    <div class="py-8">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 bg-white p-6 rounded-lg shadow">
            <form method="POST" action="{{ route('sample-citology-reception.store') }}">
                @csrf

                <!-- Identificació (Text QR) -->
                <div class="mb-4">
                    <label for="qr" class="block text-gray-700">Identificació (QR)</label>
                    <input type="text" id="qr" name="qr" class="w-full p-2 border rounded" placeholder="Escaneja o introdueix el QR" required />
                </div>

                <!-- Gènere (Desplegable) -->
                <div class="mb-4">
                    <label for="gender" class="block text-gray-700">Gènere</label>
                    <select id="gender" name="gender" class="w-full p-2 border rounded" required>
                        <option value="">Selecciona...</option>
                        <option value="male">Home</option>
                        <option value="female">Dona</option>
                    </select>
                </div>

                <!-- Edat (Número 0-110) -->
                <div class="mb-4">
                    <label for="age" class="block text-gray-700">Edat</label>
                    <input type="number" id="age" name="age" class="w-full p-2 border rounded" min="0" max="110" required />
                </div>

                <!-- Motiu sol·licitud (Text) -->
                <div class="mb-4">
                    <label for="request" class="block text-gray-700">Motiu de la sol·licitud</label>
                    <input type="text" id="request" name="request" class="w-full p-2 border rounded" placeholder="Introdueix el motiu" required />
                </div>

                <!-- Persona que sol·licita estudi (Text) -->
                <div class="mb-4">
                    <label for="applicant" class="block text-gray-700">Persona que sol·licita estudi</label>
                    <input type="text" id="applicant" name="applicant" class="w-full p-2 border rounded" placeholder="Nom complet" required />
                </div>

                 <!-- Tipus (1) -->
                 <div class="mb-4">
                    <label for="lab_id" class="block text-gray-700">Tipus (1)</label>
                    <select id="lab_id" name="lab_id" class="w-full p-2 border rounded" required>
                        <option value="">Selecciona...</option>
                        <option value="1">Tipus A</option>
                        <option value="2">Tipus B</option>
                    </select>
                </div>

                <!-- Tipus (2) -->
                <div class="mb-4">
                    <label for="citology_sample_type_id" class="block text-gray-700">Tipus (2)</label>
                    <select id="citology_sample_type_id" name="citology_sample_type_id" class="w-full p-2 border rounded" required>
                        <option value="">Selecciona...</option>
                        <option value="1">Tipus X</option>
                        <option value="2">Tipus Y</option>
                    </select>
                </div>

                <!-- Casella de verificació de recepció -->
                <div class="mb-4">
                    <label class="block text-gray-700">
                        <input type="checkbox" id="reception_verified" name="reception_verified" class="mr-2"> Verificació de recepció
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
    </x-slot>
</x-app-layout>

