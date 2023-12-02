<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>{{$title}}</title>
</head>

<body>
    <h1 class="text-3xl font-bold text-center text-gray-800 mt-4">{{$title}}</h1>
    <form action="{{ route('login.store') }}" method="post" class="max-w-md mx-auto my-10">
        @csrf
        <div class="mb-4">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
            <input type="email" class="form-input w-full" id="email" name="email" placeholder="Introduce tu email">
        </div>
        <div class="mb-4">
            <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
            <input type="password" class="form-input w-full" id="password" name="password"
                placeholder="Introduce tu password">
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
    <p class="text-center">¿No tienes una cuenta? <a href="{{ route('signup.create') }}" class="text-blue-500">Crea una cuenta</a></p>
</body>

</html>
