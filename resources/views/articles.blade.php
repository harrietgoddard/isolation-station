@extends("app")

@section("title"){{
    "Journal entries"
}}@endsection

@section("content")

    <div class="pt-3 mb-5">

        <h1 class="text-center display-4"><a href="/">Isolation Station</a></h1>

        <p class="text-center mb-4 strapline">The self-isolation journalling app</p>

        <div class="d-flex justify-content-center mb-5">
            <a class="nav-link" href="create">Create new journal entry</a>
        </div>

    </div>
    
    <h2 class="sub-head text-center mb-5" style="font-size:2.5rem;">Journal entries</h2>

    <div class="d-flex justify-content-center">

        <div class="list-group">

            @foreach ($articles as $article)

                <div class="card mb-5 border-0" style="width:40rem;">

                    <div class="card-header entry-header d-flex justify-content-between align-items-center">

                        <div>
                            {{ $article->fullName() }}, {{ $article->created_at->format('j F Y') }}
                        </div>
                        <a class="pl-5" href="{{ route('articles.show',$article->id) }}" style="font-size:1rem;">View/comment</a>

                    </div>

                    <ul class="list-group list-group-flush text-center">

                        @if($article->gratitude)
                        <li class="list-group-item text-white" style="background:#ED3456;">Gratitude... {{ $article->gratitude }}</li>
                        @endif

                        @if($article->achievement)
                        <li class="list-group-item text-white" style="background:#2E0854;">Achievement... {{ $article->achievement }}</li>
                        @endif

                        @if($article->resolution)
                        <li class="list-group-item" style="background:#7AE7C7;color:black;">Resolution... {{ $article->resolution }}</li>
                        @endif
                        
                    </ul>

                </div>

                @if($article->comments->isNotEmpty())

                    <div class="card mb-5" style="width:40rem; margin-top:-30px;">

                        <div class="card-header entry-header text-left" style="font-size:1rem;">
                            Comments
                        </div>

                        <ul class="list-group list-group-flush">

                            @foreach ($article->comments as $comment)

                                <li class="list-group-item text-left">
                                    <p class="mb-0">{{ $comment->comment }}</p>
                                    <p><small>{{ $comment->fullName() }}, {{ $comment->created_at->format('j F Y H:i') }}</small></p>
                                </li>

                            @endforeach

                        </ul>

                    </div>

                @endif

            @endforeach  

        </div>
        
    </div>

@endsection