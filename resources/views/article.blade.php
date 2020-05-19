@extends("app")

@section("title"){{
    "Isolation Station"
}}@endsection

@section("content")

    <h1>{{ $article->fullName()}}</h1>

    <div class="list-group">
            <p class="list-group-item">Gratitude: {{ $article->gratitude }} </p>
            <p class="list-group-item">Achievement: {{ $article->achievement }} </p>
            <p class="list-group-item">Resolution {{ $article->resolution }} </p>
    </div>

    <h2>Comments</h2>

    @foreach ($article->comments as $comment)
        <p>{{ $comment->comment }} - {{ $comment->fullName() }}</p>
    @endforeach

    @include('comments/form')

@endsection