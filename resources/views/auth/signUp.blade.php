<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>{{$title}}</title>
</head>

<body>
    <h1 class="text-3xl font-bold text-center text-gray-800 mt-4">{{$title}}</h1>
    <form method="post" action="{{ route('register') }}" class="max-w-md mx-auto my-10">
        @csrf
        <div class="mb-4">
            <label for="user_id" class="block text-gray-700 text-sm font-bold mb-2">Numero</label>
            <input type="number" name="user_id" class="form-input w-full" />
        </div>
        <div class="mb-4">
            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nom</label>
            <input type="text" name="name" class="form-input w-full" />
        </div>
        <div class="mb-4">
            <label for="surname" class="block text-gray-700 text-sm font-bold mb-2">Cognoms</label>
            <input type="text" name="surname" class="form-input w-full" />
        </div>
        <div class="mb-4">
            <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Contraseña</label>
            <input type="password" name="password" class="form-input w-full" />
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
            <input type="email" name="email" class="form-input w-full" />
        </div>
        <div class="mb-4">
            <label for="rol" class="block text-gray-700 text-sm font-bold mb-2">Rol</label>
            <select name="rol" class="form-select w-full">
                <option value="alumnat">alumnat</option>
                <option value="professorat">professorat</option>
            </select>
        </div>
        <div class="mb-4">
            <label for="active" class="block text-gray-700 text-sm font-bold mb-2">Actiu</label>
            <input type="checkbox" name="active" value="1" class="form-checkbox" />
        </div>
        <div class="mb-4">
            <input type="submit" value="Enviar" class="bg-blue-500 text-white py-2 px-4 rounded" />
        </div>
    </form>
    <p class="text-center">¿tienes una cuenta? <a href="{{ route('login') }}" class="text-blue-500">Inicia sesion</a></p>
</body>

</html>
