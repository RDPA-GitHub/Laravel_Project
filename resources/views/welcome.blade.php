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
    <h1 style="text-align: center; color: red; font-family: 'monospace';">INICIO</h1>
</x-layouts.app>     
 {{--  @endcomponent --}}