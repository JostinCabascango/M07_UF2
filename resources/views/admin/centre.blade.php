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
    <div class="container mx-auto px-4">
        <!--Mensaje de bienvenida al administrador -->
        <h1 class="text-4xl font-bold text-center text-blue-600 py-4">Bienvenido administrador.</h1>
        <!-- Enlace para ir al home -->
        <div class="flex justify-center">
            <a href="{{ route('home') }}"
                class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Home</a>
        </div>
        <!-- Listado de usuarios -->
        <div class="mt-6">
            <div class="bg-white shadow-md rounded overflow-x-auto">
                <h1 class="block text-gray-700 font-bold mb-2 text-xl text-center py-4 bg-gray-200 rounded-t">Usuarios
                </h1>
                <table class="w-full">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="px-4 py-2">ID</th>
                            <th class="px-4 py-2">Nombre</th>
                            <th class="px-4 py-2">Apellido</th>
                            <th class="px-4 py-2">Email</th>
                            <th class="px-4 py-2">Rol</th>
                            <th class="px-4 py-2">Activo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($usuarios as $usuario)
                        <tr class="bg-white hover:bg-gray-100 transition-colors duration-200">
                            <td class="border px-4 py-2">{{ $usuario->id }}</td>
                            <td class="border px-4 py-2">{{ $usuario->name }}</td>
                            <td class="border px-4 py-2">{{ $usuario->surname }}</td>
                            <td class="border px-4 py-2">{{ $usuario->email }}</td>
                            <td class="border px-4 py-2">{{ $usuario->role }}</td>
                            <td class="border px-4 py-2">{{ $usuario->active }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>