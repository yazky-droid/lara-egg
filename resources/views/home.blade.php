{{-- ini kita pake cara biasa masih di extends --}}
{{-- @extends('layouts.app', ['title'=>'Home Page'])
@section('content') --}}

{{-- cara pertama bisa gini --}}
{{-- @component('components.alert')
    @slot('title')

    Ini judul <strong>bang</strong>
    @endslot

    ini adalah cildren bang

    @slot('footer')
    Ini footernya
    @endslot
    @endcomponent --}}
    {{-- cara anonimus components gini --}}

    {{-- <x-alert>
        <x-slot name='title'>
    Ini judul <strong>bang</strong> tetap semangat ngodingnya asik juga ternyata yak wkwkwk

        </x-slot>
 --}}
        {{-- Ini emang $slot yang ada di file components.app yak --}}

        {{-- bisa kaya yang dikomen ini bisa juga pake @slot biasa --}}
        {{-- <x-slot name='footer'>
    Ini footer <strong>bang</strong> yah sayang banget ini udah jadi perjalanan terakhir dari sini yah footer alert.

        </x-slot> --}}
        {{-- @slot('footer')
        ini footer bang
        @endslot
    </x-alert>
@endsection --}}

<x-app-layout>

    <h1>Home</h1>
</x-app-layout>
