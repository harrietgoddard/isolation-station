@extends("app")

@section("title"){{
    "Isolation Station"
}}@endsection

@section("content")

    <h1 class="mb-5" style="color:white;">Journal entries</h1>

    <div class="list-group">
        @foreach ($articles as $article) 
            <div class="card mb-2" style="width: 40rem;">
                <div class="card-header">
                    {{ $article->fullName() }}, {{ $article->created_at}}
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Gratitude: {{ $article->gratitude }}</li>
                    <li class="list-group-item">Achievement: {{ $article->achievement }}</li>
                    <li class="list-group-item">Resolution: {{ $article->resolution }}</li>
                </ul>
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
        @endforeach    
    </div>

@endsection