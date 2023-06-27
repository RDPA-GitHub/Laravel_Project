<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel - Inicio</title>
</head>
<body style="background: #B4BDC9;">
    <h1 style="text-align: center; color: red; font-family: 'monospace';">INICIO</h1>
    <ul>
        <li><a href="{{route('home')}}">Home</a></li>
        <li><a href="{{route('contacto')}}">Contacto</a></li>
        <li><a href="{{route('blog')}}">Blog</a></li>
        <li><a href="<?= route('Prueba') ?>">Prueba - PHP</a></li>
        <li><a href="{{route('about')}}">Acerca de mi</a></li>
    </ul>

</body>
</html>