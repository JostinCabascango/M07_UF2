<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Alumno</title>
</head>

<body class="bg-gray-100">
    <!--Mensaje de bienvenida al usuario -->
    <h1 class="text-4xl font-bold text-center text-blue-600 py-4">Bienvenido alumno. Tu correo és {{ $email }}.</h1>
    <!-- Enlace para ir al home -->
    <div class="flex justify-center">
        <a href="{{ route('home') }}"
            class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Home</a>
    </div>
</body>

</html>