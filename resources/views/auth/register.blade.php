<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">
                        Create new account
                    </div>
                <div class="card-body">
                    <form action="{{ route('register.store') }}" method="post">
                        @csrf
                        <div class="mb-4">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror">
                                <span class="alert alert-danger invalid-feedback">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </span>
                        </div>
                        <div class="mb-4">
                            <label for="name" class="form-label">Name</label>
                            <input type="name" name="name" id="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror">
                                <span class="alert alert-danger invalid-feedback">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </span>
                        </div>
                        <div class="mb-4">
                            <label for="username" class="form-label">Username</label>
                            <input type="username" name="username" id="username" value="{{ old('username') }}" class="form-control @error('username') is-invalid @enderror">
                                <span class="alert alert-danger invalid-feedback">
                                    @error('username')
                                        {{ $message }}
                                    @enderror
                                </span>
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" value="{{ old('password') }}" class="form-control @error('password') is-invalid @enderror">
                            <span class="alert alert-danger invalid-feedback">
                                @error('password')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Register
                        </button>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
