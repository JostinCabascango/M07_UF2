<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Update</title>
</head>
<body>
<h1 class="text-3xl font-bold text-center text-gray-800 mt-4">Formulario para editar el profesor {{$student->name}}</h1>
<form method="post" action="{{ route('admin.update',$student->id) }}" class="max-w-md mx-auto my-10">
    @csrf
    @method('PUT')
    <div class="mb-4">
        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nombre</label>
        <input type="text" name="name" class="form-input w-full" value="{{ $student->name }}" />
        <!-- Mostrar un mensaje de error si el nombre es incorrecto -->
        @error('name')
        <small class="text-red-500">{{ $message }}</small>
        @enderror
    </div>
    <div class="mb-4">
        <label for="surname" class="block text-gray-700 text-sm font-bold mb-2">Apellido</label>
        <input type="text" name="surname" class="form-input w-full" value="{{ $student->surname }}" />
        <!-- Mostrar un mensaje de error si el apellido es incorrecto -->
        @error('surname')
        <small class="text-red-500">{{ $message }}</small>
        @enderror
    </div>
    <div class="mb-4">
        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
        <input type="email" name="email" class="form-input w-full" value="{{ $student->email }}"/>
        <!-- Mostrar un mensaje de error si el email es incorrecto -->
        @error('email')
        <small class="text-red-500">{{ $message }}</small>
        @enderror

    </div>
    <div class="mb-4">
        <label for="role" class="block text-gray-700 text-sm font-bold mb-2">Rol</label>
        <select name="role" class="form-select w-full">
            <option value="estudiante">Alumno</option>
            <option value="profesor">Profesor</option>
            <option value="centro">Admin</option>
        </select>
        <!-- Mostrar un mensaje de error si el rol es incorrecto -->
        @error('role')
        <small class="text-red-500">{{ $message }}</small>
        @enderror
    </div>
    <div class="mb-4">
        <label for="active" class="block text-gray-700 text-sm font-bold mb-2">Activo</label>
        <input type="hidden" name="active" value="0" />
        <input type="checkbox" name="active" value="1" class="form-checkbox" />
        <!-- Mostrar un mensaje de error si el active es incorrecto -->
        @error('active')
        <small class="text-red-500">{{ $message }}</small>
        @enderror
    </div>
    <div class="mb-4">
        <input type="submit" value="Enviar" class="bg-blue-500 text-white py-2 px-4 rounded" />
    </div>
</form>
</body>
</html>
