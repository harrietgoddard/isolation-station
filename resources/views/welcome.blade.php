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
                What are you grateful for today?
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Vestibulum at eros</li>
            </ul>
        </div>

        <div class="card" style="width: 18rem;">
            <div class="card-header">
                What have you achieved today?
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Vestibulum at eros</li>
            </ul>
        </div>

        <div class="card" style="width: 18rem;">
            <div class="card-header">
                Any resolutions for tomorrow?
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Vestibulum at eros</li>
            </ul>
        </div>

    </div>

@endsection