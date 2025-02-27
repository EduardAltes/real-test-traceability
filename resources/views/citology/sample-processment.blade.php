<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulari Diagnòstic</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 py-8">
    <div class="max-w-5xl mx-auto bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold mb-6 text-blue-900">Diagnòstic i Procediments</h2>
        
        <form method="POST" action="{{ route('crear-processment-citology') }}">
            <input type="hidden" name="sampleId" value="{{ $sample->id }}">
            @php $isDisabled = $sample->phase === 2 ? 'disabled' : ''; @endphp
            <fieldset class="mb-4">
                <legend class="block text-gray-700 font-medium">Descripció macroscòpica:</legend>
                <input type="text" id="descripcio-macro" name="descripcio_macro" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" value="{{ $sample->descripcio_macro ?? '' }}" {{ $isDisabled }}>
            </fieldset>
            
            <div class="flex items-center mb-4">
                <input type="checkbox" id="check-descripcio-macro" name="check_descripcio_macro" class="mr-2" {{ $sample->check_descripcio_macro ? 'checked' : '' }} {{ $isDisabled }}>
                <label for="check-descripcio-macro" class="text-gray-700">Casella verificació Descripció Macroscòpica</label>
            </div>

            <!-- Procediment -->
            <fieldset class="mb-4">
                <legend class="block text-gray-700 font-medium">Procediment:</legend>
                <select id="procediment" name="citology_procedure_id" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" {{ $isDisabled }}>
                    @foreach ($procedures as $procedure)
                        <option value="{{ $procedure->id }}">{{ $procedure->name }}</option>
                    @endforeach
                </select>
            </fieldset>

            <div class="flex items-center mb-4">
                <input type="checkbox" id="check-procediment" name="check_procediment" class="mr-2" {{ $sample->check_procediment ? 'checked' : '' }} {{ $isDisabled }}>
                <label for="check-procediment" class="text-gray-700">Casella verificació Procediment</label>
            </div>
            
            <!-- Tincions sol·licitud -->
            <fieldset class="mb-4">
                <legend class="block text-gray-700 font-medium">Tincions Sol·licitud:</legend>
                <select id="tincions" name="tinction_id" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" {{ $isDisabled }}>
                    @foreach ($tinctions as $tinction)
                        <option value="{{ $tinction->id }}">{{ $tinction->name }}</option>
                    @endforeach
                </select>
            </fieldset>

            <div class="flex items-center mb-4">
                <input type="checkbox" id="check-muntatge" name="check_muntatge" class="mr-2" 
                    {{ $sample->check_muntatge ? 'checked' : '' }} {{ $isDisabled }}>
                <label for="check-muntatge" class="text-gray-700">Muntatge casella de verificació</label>
            </div>

            <div class="flex items-center mb-4">
                <input type="checkbox" id="check-lliurament" name="check_lliurament" class="mr-2" 
                    {{ $sample->check_lliurament ? 'checked' : '' }} {{ $isDisabled }}>
                <label for="check-lliurament" class="text-gray-700">Lliurament casella de verificació</label>
            </div>

            @if($sample->phase !== 1)
                <div class="flex items-center mb-4">
                    <input type="checkbox" id="check-diagnostic" name="check_diagnostic" class="mr-2" 
                        {{ $sample->check_diagnostic ? 'checked' : '' }} {{ $isDisabled }}>
                    <label for="check-diagnostic" class="text-gray-700">Diagnòstic casella de verificació</label>
                </div>

                <div class="flex items-center mb-4">
                    <input type="checkbox" id="check-arxiu" name="check_arxiu" class="mr-2" 
                        {{ $sample->check_arxiu ? 'checked' : '' }} {{ $isDisabled }}>
                    <label for="check-arxiu" class="text-gray-700">Arxiu casella de verificació</label>
                </div>
            @endif

            
            <!-- Incidències o observacions -->
            <fieldset class="mb-4">
                <legend class="block text-gray-700 font-medium">Incidències o observacions:</legend>
                <textarea id="incidencies" name="incidencies" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" {{ $isDisabled }}>{{ old('incidencies', $sample->incidencies ?? '') }}</textarea>
            </fieldset>
            
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Enviar</button>
        </form>
    </div>
</body>
</html>