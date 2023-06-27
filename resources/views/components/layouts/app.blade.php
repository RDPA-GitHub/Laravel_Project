<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <title>Laravel - @yield('title')</title> --}}
     <title>Laravel - {{$title ?? 'Undefined'}}</title>
</head>
{{-- <body style="background: @yield('color')"> --}}
<body style="background: {{$color ?? '#B4BDC9'}}">

  {{-- @yield('content') --}}
  {{$slot}}

  {{--  @include('partials.navigation') --}}
  <x-layouts.navigation />

</body>
</html>