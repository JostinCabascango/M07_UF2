<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Administrador</title>
</head>

<body class="bg-gray-100">
    <!--Mensaje de bienvenida al usuario -->
    <h1 class="text-4xl font-bold text-center text-blue-600 py-4">Bienvenido administrador. Tu correo és {{ $email }}.
    </h1>
    <!-- Enlace para ir al home -->
    <div class="flex justify-center">
        <a href="{{ route('home') }}"
            class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Home</a>
    </div>
    <!-- Lista de profesores-->
    <h2 class="text-3xl font-semibold text-center text-gray-800 my-8">Lista de Profesores</h2>
    <table class="w-full max-w-4xl mx-auto border-collapse border border-gray-300">
        <tr class="bg-blue-600 text-white">
            <th class="p-2 border border-gray-300">Id</th>
            <th class="p-2 border border-gray-300">Nombre</th>
            <th class="p-2 border border-gray-300">Email</th>
            <th class="p-2 border border-gray-300">Curso</th>
        </tr>
        @foreach ($profesores as $profesor)
        <tr class="bg-white hover:bg-gray-200">
            <td class="p-2 border border-gray-300">{{ $profesor['id'] }}</td>
            <td class="p-2 border border-gray-300">{{ $profesor['name']}}</td>
            <td class="p-2 border border-gray-300">{{ $profesor['email'] }}</td>
            <td class="p-2 border border-gray-300">{{ $profesor['course'] }}</td>
        </tr>
        @endforeach
    </table>
</body>

</html>