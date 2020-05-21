@extends("app")

@section("title"){{
    "Isolation Station"
}}@endsection

@section("content")

    <div class="pt-5">
        <h1 class="text-center display-4" style="color:dimgray;font-weight:500;">Isolation Station</h1>
        <h5 class="text-center mb-4" style="color:dimgray;">The self-isolation journalling app</h5>
        <div class="d-flex justify-content-center mt-0 mb-5">
            <a class="btn btn-outline-primary" href="articles/create" role="button" style="color:dimgray;border:1px solid dimgray;background:#FFF689;">Create new journal entry</a>
        </div>
    </div>

    <div class="d-flex justify-content-between">

        <div class="card" style="width: 21rem; background: #ED3456">
            <div class="card-header text-center" style="background:#ED3456;">
                Gratitudes
            </div>
            <ul class="list-group list-group-flush">
                @foreach ($articlesFirst as $articleFirst) 
                    <li class="list-group-item">
                    <p class="mb-0">{{ $articleFirst->gratitude }}</p>
                    <p><small>{{ $articleFirst->fullName() }}</small></p>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="card" style="width: 21rem; background: #2E0854">
            <div class="card-header text-center"  style="background:#2E0854;">
                Achievements
            </div>
            <ul class="list-group list-group-flush">
                @foreach ($articlesSecond as $articleSecond) 
                    <li class="list-group-item">
                    <p class="mb-0">{{ $articleSecond->achievement }}</p>
                    <p><small>{{ $articleSecond->fullName() }}</small></p>
                    </li>
                @endforeach 
            </ul>
        </div>

        <div class="card" style="width: 21rem; background: #7AE7C7;">
            <div class="card-header text-center" style="background:#7AE7C7; color: black;">
                Resolutions
            </div>
            <ul class="list-group list-group-flush">
                @foreach ($articlesThird as $articleThird) 
                    <li class="list-group-item" style="color:black;">
                    <p class="mb-0">{{ $articleThird->resolution }}</p>
                    <p><small>{{ $articleThird->fullName() }}</small></p>
                    </li>
                @endforeach
            </ul>
        </div>

    </div>
    <div class="d-flex justify-content-center mt-5">
        <button style="background:tomato;border:none"><a href="articles/" style="color:white;">See all journal entries</a></button>
        <button class="ml-4" style="background:tomato;border:none"><a href="" style="color:white;">My journal entries</a></button>
    </div>

@endsection