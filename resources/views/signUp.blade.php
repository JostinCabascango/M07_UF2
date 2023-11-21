<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>{{$title}}</title>
</head>
<body>
<h1>{{$title}}</h1>
<form action="{{url('/marc/signup')}}" method="post"></form>
@csrf
<!--campos del formulario para registrarse -->
<label for="username">Nombre de Usuario</label>
<input type="text" id="username" name="username" required>

<label for="password">Contraseña</label>
<input type="password" id="password" name="password" required>

<button type="submit">Registrarse</button>
</form>
<!-- Enlace para ir a SignIn -->
<p>¿Tienes una cuenta? <a href="{{ url('/jostin/signin') }}">Login</a></p>

</body>

</html>


