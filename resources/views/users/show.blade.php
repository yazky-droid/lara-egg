<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h1>
                    {{ $user->name }}
                    <small class="text-secondary">{{ $user->username }}</small>
                </h1>
            </div>
        </div>
    </div>

    </x-app-layout>
