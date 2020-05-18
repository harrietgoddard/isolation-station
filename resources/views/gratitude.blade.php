@extends("app")

@section("title"){{
    "Gratitude"
}}@endsection

@section("content")

    <h1>Gratitude</h1>

    <div class="list-group">
        @foreach ($articles as $article) 
            <p class="list-group-item"> {{ $article->gratitude }} - {{ $article->fullName() }} </p>
        @endforeach    
    </div>

@endsection