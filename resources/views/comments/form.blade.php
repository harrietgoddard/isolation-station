    <form class="form card" method="post">
        @csrf
        <h2 class="card-header">Comment</h2>
        <fieldset class="card-body">
            <div class="form-group">
                <label for="first_name">First name</label>
                <input id="first_name" name="first_name" class="form-control @error('first_name') is-invalid @enderror" value="{{ old('first_name') }}"/>
                @error('first_name')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="form-group">
                <label for="last_name">Last name</label>
                <input id="last_name" name="last_name" class="form-control @error('last_name') is-invalid @enderror" value="{{ old('last_name') }}"/>
                @error('last_name')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="form-group">
                <label for="comment">Comment</label>
                <input id="comment" name="comment" class="form-control @error('comment') is-invalid @enderror" value="{{ old('comment') }}"/>
                @error('comment')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                @enderror
            </div>
        </fieldset>
        <div class="card-footer text-right">
            <button class="btn btn-success">Create</button>
        </div>
    </form>