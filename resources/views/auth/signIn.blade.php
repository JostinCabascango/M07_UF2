<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>{{$title}}</title>
</head>

<body class="bg-gray-100">
    <h1 class="text-3xl font-bold text-center text-gray-800 mt-4">{{$title}}</h1>
    <form action="{{ route('login.store') }}" method="post" class="max-w-md mx-auto my-10">
        @csrf
        <div class="mb-4">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
            <input type="email" class="form-input w-full" id="email" name="email" placeholder="Introduce tu email">
            @error('email')
            <!-- Mostrar un mensaje de error si el email es incorrecto -->
                <small class="text-red-500">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-4">
            <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
            <input type="password" class="form-input w-full" id="password" name="password"
                placeholder="Introduce tu password">
            @error('password')
            <!-- Mostrar un mensaje de error si el password es incorrecto -->
                <small class="text-red-500">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-4">
            <input type="checkbox" name="active" value="1" class="form-checkbox" />
            <label for="active" class="ml-2 text-gray-700">Remember me</label>
        </div>
        <div class="mb-4">
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Submit</button>
        </div>
    </form>
    <!-- Enlace para ir a SignUp -->
    <p class="text-center mb-5">¿No tienes una cuenta? <a href="{{ route('signup.create') }}" class="text-blue-500">Crea una
            cuenta</a></p>
    <!-- Comprobar si hay errores -->
    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative flex items-center justify-center">
            <!-- Mostrar el primer error -->
            <p>{{ $errors->first('error') }}</p>
        </div>
    @endif
</body>

</html>
