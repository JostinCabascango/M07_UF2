<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
</head>

<body>
    <h1>{{$title}}</h1>
    <form action="{{url('/jostin/signin')}}" method="post"></form>
    @csrf
    <!-- Aquí puedes agregar los campos del formulario para el inicio de sesión -->
    <label for="username">Nombre de Usuario:</label>
    <input type="text" id="username" name="username" required>

    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password" required>

    <button type="submit">Iniciar Sesión</button>
    </form>
    <!-- Enlace para ir a SignUp -->
    <p>¿No tienes una cuenta? <a href="{{ url('/marc/signup') }}">Regístrate</a></p>

</body>

</html>
