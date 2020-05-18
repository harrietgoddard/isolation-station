@extends("app")

@section("title"){{
    "Isolation Station"
}}@endsection

@section("content")

    <h1>Isolation Station</h1>

    <div class="list-group">
        @foreach ($articles as $article) 
            <p class="list-group-item"> {{ $article->fullName() }} </p>
            <p class="list-group-item"> {{ $article->gratitude }} </p>
            <p class="list-group-item"> {{ $article->achievement }} </p>
            <p class="list-group-item"> {{ $article->resolution }} </p>
        @endforeach    
    </div>

@endsection