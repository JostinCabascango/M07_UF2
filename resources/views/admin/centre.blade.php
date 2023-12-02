<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!--Mensaje de bienvenida al usuario -->
    <h1>Bienvenido administrador. Tu correo és {{ $email }}.</h1>
    <!-- Enlace para ir al home -->
    <a href="{{ route('home') }}">Home</a>
    <!-- Lista de profesores-->
    <h2>Lista de Profesores</h2>
<table>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Curso</th>
    </tr>
    @foreach ($profesores as $profesor)
    <tr>
        <td>{{ $profesor->id }}</td>
        <td>{{ $profesor->name }}</td>
        <td>{{ $profesor->email }}</td>
        <td>{{ $profesor->course }}</td>
    </tr>
</table>
</body>
</html>
