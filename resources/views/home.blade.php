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
<div class="container">
    <div class="row">
        <div class="col-md-6">
            {{-- ini dibawah untuk nambahin alertnya manggil session()->flash('success') yang ada di register controller --}}
            @if(session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session()->get('success') }}   {{-- ini yang buat get nya mah --}}
             </div>
            @endif
            <div class="card">
                <div class="card-header">
                    Welcome to my site
                </div>
                <div class="card-body">
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione quo quasi praesentium! Totam distinctio deleniti sed! Quae repellat accusamus incidunt praesentium esse itaque, doloremque dolores neque nesciunt, repudiandae in facilis.</p>
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At architecto tempora quibusdam excepturi iste nulla similique consequatur libero numquam tenetur porro atque laborum iure voluptatum voluptate quo explicabo impedit saepe, sint dolorum? Pariatur, eos similique modi nulla rem impedit, id, eius nihil itaque magnam sint dolore corporis officia asperiores hic maiores perspiciatis animi repellat quidem! Aperiam iste quam deserunt harum quas porro laudantium a veniam, expedita fugiat deleniti magni aut pariatur. Pariatur sequi tempora voluptate veniam perferendis in quos, ratione minima cumque itaque sint deleniti mollitia delectus harum, repellat est id. Tempora iste sint dolorem vel quod numquam culpa, perferendis sequi cumque esse ea architecto cum accusamus illum delectus quaerat ad blanditiis illo error pariatur ratione? Atque numquam magni dolorem?</p>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
