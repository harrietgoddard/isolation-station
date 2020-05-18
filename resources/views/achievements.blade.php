@extends("app")

@section("title"){{
    "Achievements"
}}@endsection

@section("content")

    <h1>Achievements</h1>

    <div class="list-group">
        @foreach ($articles as $article) 
            <p class="list-group-item"> {{ $article->achievement }} - {{ $article->fullName() }} </p>
        @endforeach    
    </div>

@endsection