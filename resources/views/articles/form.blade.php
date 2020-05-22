@extends("app")

@section("title"){{
    "Create new journal entry"
}}@endsection

@section("content")
    
    <div class="pt-3 mb-5">

        <h1 class="text-center display-4"><a href="/">Isolation Station</a></h1>

        <p class="text-center mb-4 strapline">The self-isolation journalling app</p>
    </div>

    
    <div class="d-flex justify-content-center mb-5">

        <form class="form card" method="post" style="background:#ED3456; width: 40rem;">
            @csrf
            
            <h2 class="card-header text-white text-center">Create new journal entry</h2>
            
            <fieldset class="card-body text-white text-center">

                <div class="d-flex justify-content-between">

                    <div class="form-group" style="width:18rem;">

                        <label for="first_name">First name</label>
                        <input id="first_name" name="first_name" class="form-control @error('first_name') is-invalid @enderror" value="{{ old('first_name', $article->first_name) }}"/>
                        @error('first_name')
                            <p class="invalid-feedback">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>

                    <div class="form-group" style="width:18rem;">

                        <label for="last_name">Last name</label>
                        <input id="last_name" name="last_name" class="form-control @error('last_name') is-invalid @enderror" value="{{ old('last_name', $article->last_name) }}"/>
                        @error('last_name')
                            <p class="invalid-feedback">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>

                </div>

                <div class="form-group">

                    <label for="gratitude">What are you grateful for today?</label>
                    <input id="gratitude" name="gratitude" class="form-control @error('gratitude') is-invalid @enderror" value="{{ old('gratitude', $article->gratitude) }}"/>
                    @error('gratitude')
                        <p class="invalid-feedback">
                            {{ $message }}
                        </p>
                    @enderror

                </div>

                <div class="form-group">

                    <label for="achievement">What have you achieved today?</label>
                    <input id="achievement" name="achievement" class="form-control @error('achievement') is-invalid @enderror" value="{{ old('achievement', $article->achievement) }}"/>
                    @error('achievement')
                        <p class="invalid-feedback">
                            {{ $message }}
                        </p>
                    @enderror

                </div>

                <div class="form-group">

                    <label for="resolution">Any resolutions for tomorrow or beyond?</label>
                    <input id="resolution" name="resolution" class="form-control @error('resolution') is-invalid @enderror" value="{{ old('resolution', $article->town) }}"/>
                    @error('resolution')
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

    </div>
    
 @endsection