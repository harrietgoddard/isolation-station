@extends("app")

@section("title"){{
    "Isolation Station"
}}@endsection

@section("content")

    <div class="pt-3 mb-5">

        <h1 class="text-center display-4"><a href="/">Isolation Station</a></h1>

        <p class="text-center mb-4 strapline">The self-isolation journalling app</p>

        <div class="d-flex justify-content-center mb-5">
            <a class="nav-link" href="create">Create new journal entry</a>
        </div>

    </div>

    <div class="hero-container d-flex justify-content-between mt-5 mb-5">

        <div class="card hero-card" style="background:#ED3456;">

            <div class="card-header text-center text-white border-0" style="background:#ED3456;">
                Gratitudes
            </div>

            <ul class="list-group list-group-flush text-white">

                @foreach ($articlesFirst as $articleFirst) 

                    <li class="list-group-item bg-transparent border-0 text-center">
                        <p class="mb-0">{{ $articleFirst->gratitude }}</p>
                        <p><small>{{ $articleFirst->fullName() }}</small></p>
                    </li>

                @endforeach

            </ul>

        </div>

        <div class="card hero-card" style="background:#2E0854;">

            <div class="card-header text-center text-white border-0"  style="background:#2E0854;">
                Achievements
            </div>

            <ul class="list-group list-group-flush text-white">

                @foreach ($articlesSecond as $articleSecond) 

                    <li class="list-group-item bg-transparent border-0 text-center">
                        <p class="mb-0">{{ $articleSecond->achievement }}</p>
                        <p><small>{{ $articleSecond->fullName() }}</small></p>
                    </li>

                @endforeach 

            </ul>

        </div>

        <div class="card hero-card" style="background:#7AE7C7;">

            <div class="card-header text-center border-0" style="background:#7AE7C7;">
                Resolutions
            </div>

            <ul class="list-group list-group-flush">

                @foreach ($articlesThird as $articleThird)

                    <li class="list-group-item bg-transparent border-0 text-center">
                        <p class="mb-0">{{ $articleThird->resolution }}</p>
                        <p><small>{{ $articleThird->fullName() }}</small></p>
                    </li>

                @endforeach

            </ul>

        </div>

    </div>

@endsection