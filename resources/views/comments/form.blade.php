    
<form class="form card mb-5" method="post" style="background:#ED3456; width: 40rem;">
    @csrf
    
    <h3 class="card-header text-white text-center">Add comment</h3>

    <fieldset class="card-body text-white text-center">

        <div class="d-flex justify-content-between">

            <div class="form-group" style="width:18rem;">

                <label for="first_name">First name</label>
                <input id="first_name" name="first_name" class="form-control @error('first_name') is-invalid @enderror" value="{{ old('first_name') }}"/>
                @error('first_name')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                @enderror

            </div>

            <div class="form-group" style="width:18rem;">

                <label for="last_name">Last name</label>
                <input id="last_name" name="last_name" class="form-control @error('last_name') is-invalid @enderror" value="{{ old('last_name') }}"/>
                @error('last_name')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                @enderror

            </div>

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

    <div class="card-footer text-center">
        <button class="btn btn-success">Create</button>
    </div>

</form>
