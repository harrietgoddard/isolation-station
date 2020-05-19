@extends("app")

@section("title"){{
    "Isolation Station"
}}@endsection

@section("content")

    <h1 class="text-center display-2">Isolation Station</h1>
    <h4 class="text-center font-italic mb-5">The self-isolation journalling app</h4>

    <div class="d-flex justify-content-between">

        <div class="card" style="width: 22rem;">
            <div class="card-header text-center">
                Gratitudes
            </div>
            <ul class="list-group list-group-flush">
                @foreach ($articlesFirst as $articleFirst) 
                    <li class="list-group-item">
                    <p class="mb-0">{{ $articleFirst->gratitude }}</p>
                    <p><small>{{ $articleFirst->fullName() }}, {{ $articleFirst->created_at}}</small></p>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="card" style="width: 22rem;">
            <div class="card-header text-center">
                Achievements
            </div>
            <ul class="list-group list-group-flush">
                @foreach ($articlesSecond as $articleSecond) 
                    <li class="list-group-item">
                    <p class="mb-0">{{ $articleSecond->achievement }}</p>
                    <p><small>{{ $articleSecond->fullName() }}, {{ $articleSecond->created_at}}</small></p>
                    </li>
                @endforeach 
            </ul>
        </div>

        <div class="card" style="width: 22rem;">
            <div class="card-header text-center">
                Resolutions
            </div>
            <ul class="list-group list-group-flush">
                @foreach ($articlesThird as $articleThird) 
                    <li class="list-group-item">
                    <p class="mb-0">{{ $articleThird->resolution }}</p>
                    <p><small>{{ $articleThird->fullName() }}, {{ $articleThird->created_at}}</small></p>
                    </li>
                @endforeach
            </ul>
        </div>

    </div>
    <div class="d-flex justify-content-center mt-5">
        <a class="btn btn-primary" href="articles/create" role="button">Create new journal entry</a>
    </div>
    <div class="d-flex justify-content-center mt-4">
        <button><a href="articles/">See all journal entries</a></button>
        <button><a href="">My journal entries</a></button>
    </div>

@endsection