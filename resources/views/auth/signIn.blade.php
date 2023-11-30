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
<form action="{{url('login')}}" method="post" class="">
        @csrf
        <div class="">
            <label class="" for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Introduce tu email">
        </div>
        <div class="">
            <label class="" for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password"
                placeholder="Introduce tu password">
        </div>
        <div class="">
            <input type="checkbox" name="active" value="1" class="form-check-input" />
            <label class="form-check-label">Remember me</label>
        </div>
        <div class="">
            <button type="submit" class="">Submit</button>
        </div>
    </form>
    <!-- Enlace para ir a SignUp -->
    <p>¿No tienes una cuenta? <a href="{{ url('/marc/signup') }}">Crea una cuenta</a></p>

</body>

</html>
