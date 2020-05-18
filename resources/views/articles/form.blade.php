@extends("app")

@section("content")
    <form class="form card" method="post">
        @csrf
        <h2 class="card-header">Create new journal entry</h2>
        <fieldset class="card-body">
            <div class="form-group">
                <label for="first_name">First name</label>
                <input id="first_name" name="first_name" class="form-control @error('first_name') is-invalid @enderror" value="{{ old('first_name', $article->first_name) }}"/>
                @error('first_name')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="form-group">
                <label for="last_name">Last name</label>
                <input id="last_name" name="last_name" class="form-control @error('last_name') is-invalid @enderror" value="{{ old('last_name', $article->last_name) }}"/>
                @error('last_name')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="form-group">
                <label for="gratitude">Gratitude</label>
                <input id="gratitude" name="gratitude" class="form-control @error('gratitude') is-invalid @enderror" value="{{ old('gratitude', $article->gratitude) }}"/>
                @error('gratitude')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="form-group">
                <label for="achievement">Achievement</label>
                <input id="achievement" name="achievement" class="form-control @error('achievement') is-invalid @enderror" value="{{ old('achievement', $article->achievement) }}"/>
                @error('achievement')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="form-group">
                <label for="resolution">Resolution</label>
                <input id="resolution" name="resolution" class="form-control @error('resolution') is-invalid @enderror" value="{{ old('resolution', $article->town) }}"/>
                @error('resolution')
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
 @endsection