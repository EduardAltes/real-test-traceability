<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold mb-6 text-blue-900">Diagnòstic i Procediments</h2>
        
        <form method="POST" action="{{ route('change-stage') }}">
            @csrf
            <input type="hidden" name="citology_sample_id" value="{{ $citologySample->id ?? '' }}">
            @php $isDisabled = isset($citologySample) && $citologySample->phase === 2 ? 'readonly' : ''; @endphp
            
            <fieldset class="mb-4">
                <legend class="block text-gray-700 font-medium">Descripció macroscòpica:</legend>
                <input type="text" id="description" name="description" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" value="{{ $sample->description ?? '' }}" {{ $isDisabled }}>
            </fieldset>
            
            <div class="flex items-center mb-4">
                <input type="checkbox" value="1" id="description_verified	" name="description_verified" class="mr-2" {{ isset($sample) && $sample->description_verified ? 'checked' : '' }} {{ $isDisabled }}>
                <label for="check-descripcio-macro" class="text-gray-700">Casella verificació Descripció Macroscòpica</label>
            </div>

            <!-- Procediment -->
            <fieldset class="mb-4">
                <legend class="block text-gray-700 font-medium">Procediment:</legend>
                <select id="procediment" name="citology_procedure_id" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" {{ $isDisabled }}>
                    @foreach ($procedures as $procedure)
                        <option value="{{ $procedure->id }}" {{ isset($sample) && $sample->citology_procedure_id == $procedure->id ? 'selected' : '' }}>
                            {{ $procedure->name }}
                        </option>
                    @endforeach
                </select>
            </fieldset>

            <div class="flex items-center mb-4">
                <input type="checkbox" value="1"  id="procedure_verified" name="procedure_verified" class="mr-2" {{ isset($sample) && $sample->procedure_verified ? 'checked' : '' }} {{ $isDisabled }}>
                <label for="procedure_verified" class="text-gray-700">Casella verificació Procediment</label>
            </div>
            
            <!-- Tincions sol·licitud -->
            <fieldset class="mb-4">
                <legend class="block text-gray-700 font-medium">Tincions Sol·licitud:</legend>
                <select id="tincions" name="tinction_id" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" {{ $isDisabled }}>
                    @foreach ($tinctions as $tinction)
                        <option value="{{ $tinction->id }}" {{ isset($sample) && $sample->tinction_id == $tinction->id ? 'selected' : '' }}>
                            {{ $tinction->name }}
                        </option>
                    @endforeach
                </select>
            </fieldset>
            
            <div class="flex items-center mb-4">
                <input type="checkbox" value="1"  id="check-muntatge" name="isMounted" class="mr-2" 
                    {{ isset($sample) && $sample->isMounted ? 'checked' : '' }} {{ $isDisabled }}>
                <label for="check-muntatge" class="text-gray-700">Muntatge casella de verificació</label>
            </div>
            
            <div class="flex items-center mb-4">
                <input type="checkbox" value="1"  id="check-lliurament" name="isDelivered" class="mr-2" 
                    {{ isset($sample) && $sample->isDelivered ? 'checked' : '' }} {{ $isDisabled }}>
                <label for="check-lliurament" class="text-gray-700">Lliurament casella de verificació</label>
            </div>
            
            @if(isset($citologySample) && $citologySample->phase !== 1)
                <div class="flex items-center mb-4">
                    <input type="checkbox" value="1"  id="check-diagnostic" name="isDiagnosed" class="mr-2">
                    <label for="check-diagnostic" class="text-gray-700">Diagnòstic casella de verificació</label>
                </div>
                
                <div class="flex items-center mb-4">
                    <input type="checkbox" value="1"  id="check-arxiu" name="isArchived" class="mr-2">
                    <label for="check-arxiu" class="text-gray-700">Arxiu casella de verificació</label>
                </div>
            @endif
            
            <!-- Incidències o observacions -->
            <fieldset class="mb-4">
                <legend class="block text-gray-700 font-medium">Incidències o observacions:</legend>
                <textarea id="observations" name="observations" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" {{ $isDisabled }}>{{ old('observations', $citologySample->observations ?? '') }}</textarea>
            </fieldset>
            
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Enviar</button>
        </form>
    </div>
    </x-slot>
</x-app-layout>

