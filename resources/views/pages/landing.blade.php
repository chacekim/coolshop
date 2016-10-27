@extends('../layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="#" class="list-group-item">
                        For Men
                    </a>
                    <a href="#" class="list-group-item">For Women</a>
                    <a href="#" class="list-group-item">For Kids</a>
                    <a href="#" class="list-group-item">For Geeks</a>
                </div>
            </div>
            <div class="col-md-9">
                @include('../partials.carousel')
            </div>

        </div>
        <h1>Landing Page</h1>
    </div>
@endsection