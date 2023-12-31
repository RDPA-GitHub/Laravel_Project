<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <title>Laravel - @yield('title')</title> --}}
    <title>Laravel - {{ $title ?? 'Undefined' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</head>

{{-- <body style="background: @yield('color')"> --}}

<body style="background: {{ $color ?? '#B4BDC9' }}">

    {{-- @yield('content') --}}
    
    @if (session('status'))
        <div class="alert alert-success w-25 text-center mx-auto fw-bold text-success mt-3" role="alert">
            {{ session('status') }}
        </div>
    @endif

    @auth
        <h6 class="position-absolute top-0 end-0 text-secondary mt-2 me-2">
          {{ auth()->User()->name }}
          <br>
          <form action="{{route('logout')}}" method="POST">
            @csrf
            <button class="btn btn-danger fw-bold mt-2 py-1">Logout</button>
          </form>
        </h6>
    @endauth

    <x-layouts.navigation />
    {{ $slot }}

    {{--  @include('partials.navigation') --}}

</body>

</html>
