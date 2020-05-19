@extends("app")

@section("title"){{
    "Isolation Station"
}}@endsection

@section("content")

    <h1 class="mb-5">Journal entries</h1>

    <div class="list-group">
        @foreach ($articles as $article) 
            <div class="card mb-5" style="width: 40rem;">
                <div class="card-header">
                    {{ $article->fullName() }}, {{ $article->created_at}}
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Gratitude: {{ $article->gratitude }}</li>
                    <li class="list-group-item">Achievement: {{ $article->achievement }}</li>
                    <li class="list-group-item">Resolution: {{ $article->resolution }}</li>
                </ul>
            </div>
        @endforeach    
    </div>

@endsection