{{-- Kenapa nama file nya pake underscore dulu karena agar jadi pembeda antara file utama dengan file include. yang ini untuk include aja.  --}}

<div class="card">
    <div class="card-header"><h5>Task</h5></div>
        <div class="card-body">
            {{-- ini dibawah pake $error nampilinnya nanti kita coba pake yang $message yak --}}
            {{-- @foreach ($errors->all() as $error )
                <div class="alert alert-danger">
                    {{ $error }}   {{-- ini disini buat nampilin errornya --}}
                {{-- </div>
                @endforeach --}}
            <form action="/tasks" method="post" >
                @csrf
                    <p>
                        {{-- nah dibawah ini pake @error()
                            {{ $message }}
                            @enderror, jadi maksudnya nampilin error message
                            terus bootstrapnya pake class is-invalid sama kelas invalid-feedback cara pakenya dibawah
                            kaya kalo @error('list') kasih is-invalid di classnya--}}
                        <input type="text" name="list" class="form-control @error('list') is-invalid @enderror me-2" placeholder="The name of the task">
                        <span class="invalid-feedback">
                            @error('list')
                            {{ $message }}
                            @enderror
                        </span>
                    </p>
                    <p>
                        <b>Mark : </b>
                        <label><input type="radio" name="mark" value="True">True</label>
                        <label><input type="radio" name="mark" value="False">False</label>
                    </p>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
</div>
