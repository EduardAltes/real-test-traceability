<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-blue-900 leading-tight mb-4">
            {{ __("Mostres de citologia finalitzada") }}
        </h2>
    <div class="py-8">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 bg-white p-6 rounded-lg shadow">
            <table class="min-w-full border border-gray-300">
                <thead class="bg-gray-200 divide-y">
                    <tr>
                        <th class="border px-4 py-2 text-left">ID</th>
                        <th class="border px-4 py-2 text-left">QR</th>
                        <th class="border px-4 py-2 text-left">Gènere</th>
                        <th class="border px-4 py-2 text-left">Edat</th>
                        <th class="border px-4 py-2 text-left">Sol·licitud</th>
                        <th class="border px-4 py-2 text-left">Solicitant</th>
                        <th class="border px-4 py-2 text-left">Verificat</th>
                        <th class="border px-4 py-2 text-left">Accions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($samples as $sample)
                        <tr class="text-center {{ $loop->even ? 'bg-gray-50' : '' }}">
                            <td class="border px-4 py-2">{{ $sample->id }}</td>
                            <td class="border px-4 py-2">{{ $sample->qr }}</td>
                            <td class="border px-4 py-2">{{ $sample->gender }}</td>
                            <td class="border px-4 py-2">{{ $sample->age }}</td>
                            <td class="border px-4 py-2">{{ $sample->request }}</td>
                            <td class="border px-4 py-2">{{ $sample->applicant }}</td>
                            <td class="border px-4 py-2">
                                <span class="px-2 py-1 text-sm font-semibold rounded 
                                    {{ $sample->reception_verified ? 'bg-green-200 text-green-700' : 'bg-red-200 text-red-700' }}">
                                    {{ $sample->reception_verified ? 'Sí' : 'No' }}
                                </span>
                            </td>
                            <td class="border px-4 py-2">
                                @if($sample->phase == 1)
                                    <a href="{{ route('sample-citology-processment.edit', $sample->id) }}" 
                                       class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded">
                                        Continuar
                                    </a>
                                @elseif($sample->phase == 2)
                                    <span class="text-gray-500">Veure</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="mt-4">
                {{ $samples->links() }} 
            </div>
        </div>
    </div>
    </x-slot>
</x-app-layout>
