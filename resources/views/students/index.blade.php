<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Alumno</title>
</head>


<body class="bg-gray-100">
    <div class="container mx-auto px-4">
        @foreach ($files as $file)
        <div class="file bg-white p-4 rounded shadow mb-4">
            @if (str_starts_with($file->type, 'image'))
            <img src="{{ asset('storage/' . $file->path) }}" alt="{{ $file->name }}" class="max-w-full h-auto mb-4">
            @endif
            <p class="text-lg mb-2"><i class="fas fa-file-alt mr-2"></i>{{ $file->name }}</p>
            <a href="{{ route('file.update', $file->id) }}" class="text-blue-500 hover:underline"><i
                    class="fas fa-edit mr-2"></i>Cambiar nombre</a>
            <form action="{{ route('student.destroy', $file->id) }}" method="POST" class="mt-2">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-red-500 hover:underline"><i
                        class="fas fa-trash-alt mr-2"></i>Eliminar</button>
            </form>
        </div>
        @endforeach
    </div>
</body>

</html>
