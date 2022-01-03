<x-app-layout>
<div class="container">
    <div class="row">
        <div class="col-md-5">
            <h1>All User</h1>
            @foreach ($users as $user)
            <li><a href="/users/{{ $user->username }}">{{ $user->name }}</a></li>
            @endforeach
        </div>
    </div>
</div>

</x-app-layout>
