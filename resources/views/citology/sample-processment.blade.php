<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Diagnòstic</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 py-8">
    <div class="max-w-5xl mx-auto bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold mb-6 text-blue-900">Diagnòstic i Procediments</h2>
        <form>
            <!-- Descripció macroscòpica -->
            <div class="mb-4">
                <label for="descripcio-macro" class="block text-gray-700 font-medium">Descripció macroscòpica:</label>
                <input type="text" id="descripcio-macro" name="descripcio_macro" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" value="{{ isset($sample) ? $sample->descripcio_macro : '' }}" {{ $etapa === 2 ? 'readonly' : '' }}>
            </div>
            
            <div class="flex items-center mb-4">
                <input type="checkbox" id="check-descripcio-macro" name="check_descripcio_macro" class="mr-2" {{ isset($sample) && $sample->check_descripcio_macro ? 'checked' : '' }} {{ $etapa === 2 ? 'disabled' : '' }}>
                <label for="check-descripcio-macro" class="text-gray-700">Casella verificació Descripció Macroscòpica</label>
            </div>
            
            <!-- Procediment -->
            <div class="mb-4">
                <label for="procediment" class="block text-gray-700 font-medium">Procediment:</label>
                <select id="procediment" name="procediment" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" {{ $etapa === 2 ? 'disabled' : '' }}>
                    <option value="">Selecciona una opció</option>
                    <option value="procediment1" {{ isset($sample) && $sample->procediment === 'procediment1' ? 'selected' : '' }}>Procediment 1</option>
                    <option value="procediment2" {{ isset($sample) && $sample->procediment === 'procediment2' ? 'selected' : '' }}>Procediment 2</option>
                    <option value="procediment3" {{ isset($sample) && $sample->procediment === 'procediment3' ? 'selected' : '' }}>Procediment 3</option>
                </select>
            </div>

            <div class="flex items-center mb-4">
                <input type="checkbox" id="check-procediment" name="check_procediment" class="mr-2" {{ isset($sample) && $sample->check_procediment ? 'checked' : '' }} {{ $etapa === 2 ? 'disabled' : '' }}>
                <label for="check-procediment" class="text-gray-700">Casella verificació Procediment</label>
            </div>
            
            <!-- Tincions sol·licitud -->
            <div class="mb-4">
                <label for="tincions" class="block text-gray-700 font-medium">Tincions Sol·licitud:</label>
                <select id="tincions" name="tincions[]" multiple class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" {{ $etapa === 2 ? 'disabled' : '' }}>
                    <option value="tincio1" {{ isset($sample) && in_array('tincio1', $sample->tincions) ? 'selected' : '' }}>Tinció 1</option>
                    <option value="tincio2" {{ isset($sample) && in_array('tincio2', $sample->tincions) ? 'selected' : '' }}>Tinció 2</option>
                    <option value="tincio3" {{ isset($sample) && in_array('tincio3', $sample->tincions) ? 'selected' : '' }}>Tinció 3</option>
                </select>
            </div>

            <div class="flex items-center mb-4">
                <input type="checkbox" id="check-tincions" name="check_tincions" class="mr-2" {{ isset($sample) && $sample->check_tincions ? 'checked' : '' }} {{ $etapa === 2 ? 'disabled' : '' }}>
                <label for="check-tincions" class="text-gray-700">Casella verificació Tincions</label>
            </div>
            
            <!-- Muntatge -->
            <div class="flex items-center mb-4">
                <input type="checkbox" id="check-muntatge" name="check_muntatge" class="mr-2" {{ isset($sample) && $sample->check_muntatge ? 'checked' : '' }} {{ $etapa === 2 ? 'disabled' : '' }}>
                <label for="check-muntatge" class="text-gray-700">Muntatge casella de verificació</label>
            </div>

            <!-- Lliurament -->
            <div class="flex items-center mb-4">
                <input type="checkbox" id="check-lliurament" name="check_lliurament" class="mr-2" {{ isset($sample) && $sample->check_lliurament ? 'checked' : '' }} {{ $etapa === 2 ? 'disabled' : '' }}>
                <label for="check-lliurament" class="text-gray-700">Lliurament casella de verificació</label>
            </div>

            <!-- Diagnòstic -->
            <div class="flex items-center mb-4">
                <input type="checkbox" id="check-diagnostic" name="check_diagnostic" class="mr-2" {{ isset($sample) && $sample->check_diagnostic ? 'checked' : '' }} {{ $etapa === 2 ? 'disabled' : '' }}>
                <label for="check-diagnostic" class="text-gray-700">Diagnòstic casella de verificació</label>
            </div>

            <!-- Arxiu -->
            <div class="flex items-center mb-4">
                <input type="checkbox" id="check-arxiu" name="check_arxiu" class="mr-2" {{ isset($sample) && $sample->check_arxiu ? 'checked' : '' }} {{ $etapa === 2 ? 'disabled' : '' }}>
                <label for="check-arxiu" class="text-gray-700">Arxiu casella de verificació</label>
            </div>

            <!-- Incidències o observacions -->
            <div class="mb-4">
                <label for="incidencies" class="block text-gray-700 font-medium">Incidències o observacions:</label>
                <textarea id="incidencies" name="incidencies" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" {{ $etapa === 2 ? 'readonly' : '' }}>{{ isset($sample) ? htmlspecialchars($sample->incidencies) : '' }}</textarea>
            </div>

            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded" {{ $etapa === 2 ? 'disabled' : '' }}>Enviar</button>
        </form>
    </div>
</body>
</html>
