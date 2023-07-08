{{-- @extends('layouts.app')
@section('color', '#C9BEB4')
@section('title', 'Prueba')
@section('content')
@endsection --}}

<h1 class="text-center text-secondary mt-3">
    PRUEBA PHP
</h1>

<x-layouts.app title="Prueba" color="#C9BEB4">
    <a href="{{ route('posts.create') }}" style="text-decoration: none" class="text-secondary fw-bold ms-3">Create New
        Post</a>

    {{-- @dump($posts) --}}
    
    @auth
    @foreach ($posts as $data)
    <ul class="mb-0">
        {{-- <li>{{ $data->title }}</li> --}}
        <li><a href="{{ route('posts.show', $data) }}" class="text-success fw-bold" style="text-decoration: none">
            {{ $data->title }}
        </a></li>
    </ul>
    {{--  <h1>
        @dump($data)
    </h1> --}}
    @endforeach
    <br>

    @foreach ($posts2 as $data => $title)
        <ul class="mb-0">
            <li> {{ $data + 1 }} - {{ $title->title }}</li>
        </ul>
        {{--  <h1>
        @dump($data)
      </h1> --}}
    @endforeach
    @endauth
    
</x-layouts.app>
