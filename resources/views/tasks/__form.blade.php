    <div class="mb-2">
        <input type="text" class="form-control @error('list') is-invalid @enderror" name="list" value="{{ old('list',$task->list) }}" placeholder="The name of the task"> {{-- old session agar pas submit terus salah ketikannya ngga ilang  --}}
        @error('list')
        <span class="invalid-feedback">
                {{ $message }}
            </span>
            @enderror
            <p class="mt-2">
                <b>Mark : </b>
                <label><input type="radio" name="mark" value="True">True</label>
                <label><input type="radio" name="mark" value="False">False</label>
            </p>
        </div>
  <button type="submit" class="btn btn-primary mt-2">{{ $submit }}</button>
