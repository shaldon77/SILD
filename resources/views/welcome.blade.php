<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gestor de Documentos</title>

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-br from-gray-50 to-white text-gray-800 font-sans">

<div class="max-w-7xl mx-auto p-6 grid grid-cols-1 md:grid-cols-2 gap-6">
  <div class="bg-white rounded-2xl shadow-2xl p-6 hover:shadow-blue-200 transition duration-300 border border-blue-100">
    <div class="flex justify-between items-center mb-4">
      <h2 class="text-xl font-bold text-blue-700 flex items-center gap-2">
        <!-- Ícono de documento -->
        <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 4H7a2 2 0 01-2-2V6a2 2 0 012-2h7l5 5v11a2 2 0 01-2 2z"/>
        </svg>
        Documento #7542
      </h2>
      <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm font-semibold shadow-sm">✅ Confirmado</span>
    </div>

    <ul class="text-gray-700 space-y-1 mb-4">
      <li><strong>Categoría:</strong> Oficial de Cumplimiento</li>
      <li><strong>Clasificación:</strong> Listas</li>
      <li><strong>Nombre:</strong> 143-DGSF-DSE-2025</li>
      <li><strong>Fecha Alta:</strong> 31/07/2025</li>
    </ul>

    <div class="flex justify-between items-center">
      <a href="#" class="text-blue-600 hover:underline flex items-center gap-1">
        <!-- Ícono de ver -->
        <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
          <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
        </svg>
        Ver Documento
      </a>

      <button class="bg-gradient-to-r from-green-400 to-green-600 hover:from-green-500 hover:to-green-700 text-white px-4 py-2 rounded-lg shadow-lg flex items-center gap-2 transition">
        <!-- Ícono de confirmar -->
        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
        </svg>
        Confirmar
      </button>
    </div>
  </div>
</div>


    <script>
        feather.replace();
    </script>
</body>
</html>
