<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Create</title>
</head>

<body class="bg-gray-100">
<h1 class="text-3xl font-bold text-center text-gray-800 mt-4">Dar de alta a un profesor</h1>
<form method="post" action="{{ route('admin.store') }}" class="max-w-md mx-auto my-10">
    @csrf
    <div class="mb-4">
        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nombre</label>
        <input type="text" name="name" class="form-input w-full" />
        <!-- Mostrar un mensaje de error si el nombre es incorrecto -->
        @error('name')
        <small class="text-red-500">{{ $message }}</small>
        @enderror
    </div>
    <div class="mb-4">
        <label for="surname" class="block text-gray-700 text-sm font-bold mb-2">Apellido</label>
        <input type="text" name="surname" class="form-input w-full" />
        <!-- Mostrar un mensaje de error si el apellido es incorrecto -->
        @error('surname')
        <small class="text-red-500">{{ $message }}</small>
        @enderror
    </div>
    <div class="mb-4">
        <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Contraseña</label>
        <input type="password" name="password" class="form-input w-full" />
        <!-- Mostrar un mensaje de error si el password es incorrecto -->
        @error('password')
        <small class="text-red-500">{{ $message }}</small>
        @enderror
    </div>
    <div class="mb-4">
        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
        <input type="email" name="email" class="form-input w-full" />
        <!-- Mostrar un mensaje de error si el email es incorrecto -->
        @error('email')
        <small class="text-red-500">{{ $message }}</small>
        @enderror

    </div>
    <div class="mb-4">
        <label for="role" class="block text-gray-700 text-sm font-bold mb-2">Rol</label>
        <select name="role" class="form-select w-full">
            <!-- SOLO SE PUEDE DAR DE ALTA A UN PROFESOR -->
            @foreach($userTypes as $key => $value)
                @if($key == 'profesor')
                    <option value="{{ $key }}">{{ $value }}</option>
                @endif
            @endforeach
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
<p class="text-center mb-5">¿Quieres regresar a la pagina principal? <a href="{{ route('admin.index') }}" class="text-blue-500">Regresar</a></p>
</body>

</html>
