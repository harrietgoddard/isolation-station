@extends("app")

@section("title"){{
    $article->fullName()
}}@endsection

@section("content")

    <div class="pt-3 mb-5">

        <h1 class="text-center display-4"><a href="/">Isolation Station</a></h1>

        <p class="text-center mb-4 strapline">The self-isolation journalling app</p>

    </div>

    <div class="mb-5 text-center">

        <h2 class="sub-head" style="font-size:2.5rem;">{{ $article->fullName() }}</h2>
        <p>{{ $article->created_at }}</p>

    </div>
  

    <div class="d-flex justify-content-center">

        <div>

            <div class="list-group text-center" style="width:40rem;">
                    <p class="list-group-item text-white" style="background:#ED3456;">Gratitude... {{ $article->gratitude }} </p>
                    <p class="list-group-item text-white" style="background:#2E0854;">Achievement... {{ $article->achievement }} </p>
                    <p class="list-group-item" style="background:#7AE7C7;color:black;">Resolution... {{ $article->resolution }} </p>
            </div>

            @if($article->comments->isNotEmpty())

                <div class="card mb-5" style="width:40rem;">

                    <div class="card-header text-left" style="font-size:1rem;">
                        Comments
                    </div>

                    <ul class="list-group list-group-flush">

                        @foreach ($article->comments as $comment)

                            <li class="list-group-item text-left">
                                <p class="mb-0">{{ $comment->comment }}</p>
                                <p><small>{{ $comment->fullName() }}, {{ $comment->created_at}}</small></p>
                            </li>

                        @endforeach

                    </ul>

                </div>

            @endif

        <div>

        @include('comments/form')

    </div>

@endsection