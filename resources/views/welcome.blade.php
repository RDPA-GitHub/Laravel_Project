{{-- @extends('layouts.app')
@section('color', '#B4BDC9')
@section('title', 'HOME')
@section('content')
@endsection
 --}}

 {{-- @component('components.layout') --}}
<x-layouts.app title="HOME" :sum="2+2">
    {{-- <x-slot name="title">
        HOME
    </x-slot> --}}
    <h1 class="text-center text-danger mt-3">INICIO</h1>
</x-layouts.app>     
 {{--  @endcomponent --}}