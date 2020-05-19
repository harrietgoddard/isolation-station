@extends("app")

@section("title"){{
    "Isolation Station"
}}@endsection

@section("content")

    <h1 class="text-center display-3">Isolation Station</h1>
    <h4 class="text-center font-italic mb-5">The self-isolation journalling app</h4>

    <div class="d-flex justify-content-between">

        <div class="card" style="width: 18rem;">
            <div class="card-header">
                Gratitudes
            </div>
            <ul class="list-group list-group-flush">
                @foreach ($articlesFirst as $articleFirst) 
                    <li class="list-group-item">{{ $articleFirst->gratitude }} - {{ $articleFirst->fullName() }}</li>
                @endforeach
            </ul>
        </div>

        <div class="card" style="width: 18rem;">
            <div class="card-header">
                Achievements
            </div>
            <ul class="list-group list-group-flush">
                @foreach ($articlesSecond as $articleSecond) 
                    <li class="list-group-item">{{ $articleSecond->achievement }} - {{ $articleSecond->fullName() }}</li>
                @endforeach 
            </ul>
        </div>

        <div class="card" style="width: 18rem;">
            <div class="card-header">
                Resolutions
            </div>
            <ul class="list-group list-group-flush">
                @foreach ($articlesThird as $articleThird) 
                    <li class="list-group-item">{{ $articleThird->resolution }} - {{ $articleThird->fullName() }}</li>
                @endforeach
            </ul>
        </div>

    </div>
    <div class="d-flex justify-content-center mt-5">
        <button class="display-4"><a href="articles/create">Create new journal entry</a></button>
    </div>
    <div class="d-flex justify-content-center mt-5">
        <button><a href="articles/">See all journal entries</a></button>
        <button><a href="">My journal entries</a></button>
    </div>

@endsection