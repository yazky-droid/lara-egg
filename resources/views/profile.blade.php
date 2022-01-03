{{-- @extends('layouts.app', ['title'=>'Profile Page'])
@section('content')
<h1>Profile</h1>
Lorem ipsum dolor sit <strong>amet</strong> consectetur adipisicing elit. Dolorum ipsa repellendus voluptatum dolore sunt libero magnam? Consequatur id dolorum numquam, deleniti fugit fuga est sequi maxime nam eligendi eveniet harum.
@endsection --}}

<x-app-layout title="Profile Page">
    <h1>{{ $user->name }}</h1>
</x-app-layout>
