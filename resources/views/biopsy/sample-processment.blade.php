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
                <input type="text" id="descripcio-macro" name="descripcio_macro" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" value="{{ isset($sample) ? $sample->descripcio_macro : '' }}">
            </div>
            
            <div class="flex items-center mb-4">
                <input type="checkbox" id="check-descripcio-macro" name="check_descripcio_macro" class="mr-2" {{ isset($sample) && $sample->check_descripcio_macro ? 'checked' : '' }}>
                <label for="check-descripcio-macro" class="text-gray-700">Casella verificació Descripció Macroscòpica</label>
            </div>

            <!-- Nº de blocs -->
            <div class="mb-4">
                <label for="num-blocs" class="block text-gray-700 font-medium">Nº de blocs:</label>
                <input type="number" id="num-blocs" name="num_blocs" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" value="{{ isset($sample) ? $sample->num_blocs : '' }}">
            </div>

            <!-- Nº de talls inclosos per cada bloc -->
            <div class="mb-4">
                <label for="num-talls" class="block text-gray-700 font-medium">Nº de talls inclosos per cada bloc:</label>
                <input type="number" id="num-talls" name="num_talls" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" value="{{ isset($sample) ? $sample->num_talls : '' }}">
            </div>

            <!-- Tincions -->
            <div class="mb-4">
                <label for="tincions" class="block text-gray-700 font-medium">Tincions:</label>
                <select id="tincions" name="tincions[]" multiple class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    <option value="tincio1" {{ isset($sample) && in_array('tincio1', $sample->tincions) ? 'selected' : '' }}>Tinció 1</option>
                    <option value="tincio2" {{ isset($sample) && in_array('tincio2', $sample->tincions) ? 'selected' : '' }}>Tinció 2</option>
                    <option value="tincio3" {{ isset($sample) && in_array('tincio3', $sample->tincions) ? 'selected' : '' }}>Tinció 3</option>
                </select>
            </div>

            <!-- Informació addicional sobre tincions -->
            <div class="mb-4">
                <label for="info-tincions" class="block text-gray-700 font-medium">Informació addicional sobre tincions:</label>
                <input type="text" id="info-tincions" name="info_tincions" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" value="{{ isset($sample) ? $sample->info_tincions : '' }}">
            </div>

            <div class="flex items-center mb-4">
                <input type="checkbox" id="check-tallat-macro" name="check_tallat_macro" class="mr-2" {{ isset($sample) && $sample->check_tallat_macro ? 'checked' : '' }}>
                <label for="check-tallat-macro" class="text-gray-700">Casella verificació del tallat macroscòpic</label>
            </div>

            <!-- Botón Enviar -->
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Enviar</button>
        </form>
    </div>
</body>
</html>
