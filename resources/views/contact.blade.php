{{-- @extends('layouts.app', ['title'=>'Contact Page'])
@section('content')
<h1>Contact</h1>
Lorem ipsum dolor sit <strong>amet</strong> consectetur adipisicing elit. Dolorum ipsa repellendus voluptatum dolore sunt libero magnam? Consequatur id dolorum numquam, deleniti fugit fuga est sequi maxime nam eligendi eveniet harum.
@endsection --}}
{{-- menggunakan component --}}
<x-app-layout title="Contact Page">
    <h1>Contact Page</h1>
    

    <form action="/contact" method="post">
    @csrf

    <button type="submit">Send</button>
</form>
</x-app-layout>
