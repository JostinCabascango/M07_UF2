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
    <!--Mensaje de bienvenida al administrador -->
    <h1 class="text-4xl font-bold text-center text-blue-600 py-4">Bienvenido Profesor.</h1>
    <!-- Enlace para ir al home -->
    <div class="flex justify-center space-x-4 mb-6">
        <a href="{{ route('home') }}"
           class="inline-block px-6 py-4 bg-blue-600 text-white rounded hover:bg-blue-700">Home</a>
        <!-- Enlace para ir a la vista de crear un profesor -->
        <a href="{{ route('admin.create') }}"
           class="inline-block px-6 py-4 bg-green-600 text-white rounded hover:bg-green-700">Crear estudiante</a>
    </div>
    <!-- Listado de usuarios -->
    <!--Si hay Profesores , mostrar el listado de profesores -->
    @if (count($students) > 0)
        <div class="bg-white shadow-md rounded overflow-x-auto">
            <h1 class="block text-gray-700 font-bold mb-2 text-xl text-center py-4 bg-gray-200 rounded-t">Estudiantes
            </h1>
            <table class="w-full text-center">
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
                                        <td class="border px-6 py-4 flex justify-center space-x-4">
                                            <!-- Enlace para ir a la vista de editar un registro-->
                                            <a href="{{ route('admin.edit', $student->id) }}"
                                               class="bg-yellow-300 px-3 py-2 rounded-md text-white font-bold flex items-center">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                            <!-- Enlace para eliminar un registro-->
                                            <form action="{{ route('admin.destroy', $student->id) }}" method="post"
                                                  class="flex items-center">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                        class="bg-red-300 px-3 py-2 rounded-md text-white font-bold flex items-center">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                            </form>
                                            <!--Enlace para ver la información del profesor-->
                                            <a href="{{ route('admin.show', $student->id) }}"
                                               class="bg-blue-300 px-3 py-2 rounded-md text-white font-bold flex items-center">
                                                <i class="fa-solid fa-eye"></i>
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
