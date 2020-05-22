@extends("app")

@section("title"){{
    "Isolation Station"
}}@endsection

@section("content")

    <div class="pt-3 mb-5">
        <h1 class="text-center display-4" style="color:darkslategray;font-weight:500;"><a href="/">Isolation Station</a></h1>
        <h5 class="text-center mb-4" style="color:dimgray;">The self-isolation journalling app</h5>
        <div class="d-flex justify-content-center mt-0 mb-5">
            <a class="nav-link" href="create" style="font-size:1.2rem;color:darkslategray;border:1px solid dimgray;border-radius:5px;">Create new journal entry</a>
        </div>
    </div>
    
    <h1 class="text-center mb-5" style="color:darkslategray;">Journal entries</h1>

    <div class="d-flex justify-content-center">
    <div class="list-group">
        @foreach ($articles as $article) 
            <div class="card mb-5" style="width: 40rem; color: black;">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div>
                    {{ $article->fullName() }}, {{ $article->created_at}}
                    </div>
                    <a class="pl-5" href="{{ route('articles.show',$article->id) }}" style="font-size:1rem;">View/comment</a>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item" style="background:#ED3456;">Gratitude... {{ $article->gratitude }}</li>
                    <li class="list-group-item" style="background:#2E0854;">Achievement... {{ $article->achievement }}</li>
                    <li class="list-group-item" style="background:#7AE7C7;color:black;">Resolution... {{ $article->resolution }}</li>
                </ul>
            </div>
            @if($article->comments->isNotEmpty())
                <div class="card mb-5" style="width: 40rem; color:black; margin-top: -30px;">
                    <div class="card-header text-left" style="font-size:1rem;">
                        Comments
                    </div>
                    <ul class="list-group list-group-flush">
                        @foreach ($article->comments as $comment) 
                            <li class="list-group-item text-left" style="color:black;">
                            <p class="mb-0">{{ $comment->comment }}</p>
                            <p><small>{{ $comment->fullName() }}, {{ $comment->created_at}}</small></p>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
        @endforeach    
    </div>
    </div>

@endsection