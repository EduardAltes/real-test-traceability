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
        
        <form>
            @php $isDisabled = $sample->phase === 2 ? 'disabled' : ''; @endphp
            <input type="hidden" name="sample" value="{{ $sample->id }}">

            <!-- Descripció macroscòpica -->
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
                <select id="procediment" name="procediment" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" {{ $isDisabled }}>
                    <option value="">Selecciona una opció</option>
                </select>
            </fieldset>

            <div class="flex items-center mb-4">
                <input type="checkbox" id="check-procediment" name="check_procediment" class="mr-2" {{ $sample->check_procediment ? 'checked' : '' }} {{ $isDisabled }}>
                <label for="check-procediment" class="text-gray-700">Casella verificació Procediment</label>
            </div>
            
            <!-- Tincions sol·licitud -->
            <fieldset class="mb-4">
                <legend class="block text-gray-700 font-medium">Tincions Sol·licitud:</legend>
                <select id="tincions" name="tincions[]" multiple class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" {{ $isDisabled }}>
                    <option value="">Selecciona una opció</option>
                    <option value="">Selecciona dos opcions</option>
                    <option value="">Selecciona tres opcions</option>
                </select>
            </fieldset>
            
            <!-- Caselles de verificació generals -->
            @php
                $checkboxes = [
                    'muntatge' => 'Muntatge',
                    'lliurament' => 'Lliurament',
                    'diagnostic' => 'Diagnòstic',
                    'arxiu' => 'Arxiu'
                ];
            @endphp

            @foreach($checkboxes as $key => $label)
                <div class="flex items-center mb-4">
                    <input type="checkbox" id="check-{{ $key }}" name="check_{{ $key }}" class="mr-2" {{ $sample->{'check_'.$key} ? 'checked' : '' }} {{ $isDisabled }}>
                    <label for="check-{{ $key }}" class="text-gray-700">{{ $label }} casella de verificació</label>
                </div>
            @endforeach
            
            <!-- Incidències o observacions -->
            <fieldset class="mb-4">
                <legend class="block text-gray-700 font-medium">Incidències o observacions:</legend>
                <textarea id="incidencies" name="incidencies" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" {{ $isDisabled }}>{{ old('incidencies', $sample->incidencies ?? '') }}</textarea>
            </fieldset>
            
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded {{ $isDisabled ? 'cursor-not-allowed opacity-50' : '' }}" {{ $isDisabled }}>Enviar</button>
        </form>
    </div>
</body>
</html>