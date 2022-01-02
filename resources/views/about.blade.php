{{-- @extends('layouts.app', ['title'=>'About Page'])
@section('content')
<h1>About</h1>
Lorem ipsum dolor sit <strong>amet</strong> consectetur adipisicing elit. Dolorum ipsa repellendus voluptatum dolore sunt libero magnam? Consequatur id dolorum numquam, deleniti fugit fuga est sequi maxime nam eligendi eveniet harum.
@endsection
   --}}

<x-app-layout title="About Page">
    @slot('styles')
    <style>
        body{
            background-color: indigo;
        }
    </style>
    @endslot
<h1>About</h1>
</x-app-layout>
