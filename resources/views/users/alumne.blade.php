<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Alumno</title>
</head>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <title>Alumno</title>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto px-4">
        <!--Mensaje de bienvenida al alumno -->
        <h1 class="text-4xl font-bold text-center text-blue-600 py-4">Bienvenido, {{ session('usuario')->name }}.</h1>
        <!-- Enlace para ir al home -->
        <div class="flex justify-center">
            <a href="{{ route('home') }}"
                class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Home</a>
        </div>
        <!-- Información del alumno -->
        <div class="mt-6">
            <div class="bg-white shadow-md rounded p-6">
                <h1 class="block text-gray-700 font-bold mb-2 text-xl text-center py-4 bg-gray-200 rounded-t">
                    Información del Alumno</h1>
                <p><strong>Nombre:</strong> {{ session('usuario')->name }}</p>
                <p><strong>Email:</strong> {{ session('usuario')->email }}</p>
                <p><strong>Rol:</strong> {{ session('usuario')->role }}</p>
            </div>
        </div>
    </div>
</body>

</html>

</html>