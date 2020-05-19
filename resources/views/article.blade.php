@extends("app")

@section("title"){{
    "Isolation Station"
}}@endsection

@section("content")

    <h1>{{ $article->fullName()}}</h1>
    <p>{{ $article->created_at }}</p>

    <div class="list-group">
            <p class="list-group-item">Gratitude: {{ $article->gratitude }} </p>
            <p class="list-group-item">Achievement: {{ $article->achievement }} </p>
            <p class="list-group-item">Resolution: {{ $article->resolution }} </p>
    </div>

            @if($article->comments->isNotEmpty())
                <div class="card mb-5" style="width: 40rem;">
                    <div class="card-header">
                        Comments
                    </div>
                    <ul class="list-group list-group-flush">
                        @foreach ($article->comments as $comment) 
                            <li class="list-group-item">
                            <p class="mb-0">{{ $comment->comment }}</p>
                            <p><small>{{ $comment->fullName() }}, {{ $comment->created_at}}</small></p>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif

    @include('comments/form')

@endsection