<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Profesor</title>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto px-4">
        <!--Mensaje de bienvenida al profesor -->
        <h1 class="text-4xl font-bold text-center text-blue-600 py-4">Bienvenido, {{ session('usuario')->name }}.</h1>
        <!-- Enlace para ir al home -->
        <div class="flex justify-center">
            <a href="{{ route('home') }}"
                class="inline-block px-6 py-4 bg-blue-600 text-white rounded hover:bg-blue-700">Home</a>
        </div>
        <!-- Lista de estudiantes -->
        <div class="mt-6">
            <div class="bg-white shadow-md rounded p-6">
                <h1 class="block text-gray-700 font-bold mb-2 text-xl text-center py-4 bg-gray-200 rounded-t">
                    Lista de alumnos</h1>
                <!--Si hay Alumnos , mostrar el listado de alumnos -->
                @if (count($students) > 0)
                <div class="mt-6">
                    <div class="bg-white shadow-md rounded overflow-x-auto">
                        <h2 class="block text-gray-700 font-bold mb-2 text-xl text-center py-4 bg-gray-200 rounded-t">
                            Alumnos
                        </h2>
                        <table class="w-full">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="px-6 py-4">ID</th>
                                    <th class="px-6 py-4">Nombre</th>
                                    <th class="px-6 py-4">Apellido</th>
                                    <th class="px-6 py-4">Email</th>
                                    <th class="px-6 py-4">Rol</th>
                                    <th class="px-6 py-4">Activo</th>
                                    <th class="px-6 py-4">Acciones</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($students as $student)
                                <tr class="bg-white hover:bg-gray-100 transition-colors duration-200">
                                    <td class="border px-6 py-4">{{ $student->id }}</td>
                                    <td class="border px-6 py-4">{{ $student->name }}</td>
                                    <td class="border px-6 py-4">{{ $student->surname }}</td>
                                    <td class="border px-6 py-4">{{ $student->email }}</td>
                                    <td class="border px-6 py-4">{{ $student->role }}</td>
                                    <td class="border px-6 py-4">{{ $student->active }}</td>
                                    <td class="border px-6 py-4">
                                        <!-- Enlace para ir a la vista de editar un registro-->
                                        <a href="#"
                                            class="bg-yellow-300 px-5 py-3 mr-2 rounded-md text-white font-bold">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <!-- Enlace para eliminar un registro-->
                                        <a href="#" class="bg-red-300 px-5 py-3 rounded-md text-white font-bold">
                                            <i class="fa-solid fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                @endif
                <!--Si no hay alumnos -->
                @if (count($students) == 0)
                <div
                    class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative flex items-center justify-center">
                    <!-- Mostrar un mensaje -->
                    <p>No hay alumnos en la bd</p>
                </div>
                @endif
            </div>
        </div>
    </div>
</body>

</html>