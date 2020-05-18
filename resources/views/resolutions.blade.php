@extends("app")

@section("title"){{
    "Resolutions"
}}@endsection

@section("content")

    <h1>Resolutions</h1>

    <div class="list-group">
        @foreach ($articles as $article) 
            <p class="list-group-item"> {{ $article->resolution }} - {{ $article->fullName() }} </p>
        @endforeach    
    </div>

@endsection