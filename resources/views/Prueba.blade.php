{{-- @extends('layouts.app')
@section('color', '#C9BEB4')
@section('title', 'Prueba')
@section('content')
@endsection --}}

<x-layouts.app title="Prueba" color="#C9BEB4">
  <h1 style="color: #211D19; text-align: center; font-family: arial; margin-top: 35px;">
      PRUEBA PHP
  </h1>

  {{-- @dump($posts) --}}
  @foreach ($posts as $data)
      <ul>
        <li>{{$data->title}}</li>
      </ul>
     {{--  <h1>
        @dump($data)
      </h1> --}}
  @endforeach

</x-layouts.app>
