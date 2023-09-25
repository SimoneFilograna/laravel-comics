
@extends("layouts.public");

@section("content")
    <div class="container pt-5 position-relative">

        <div>
        <a class="btn btn-primary current-button" href="#" role="button">CURRENT SERIES</a>
        </div>

        <div class="row g-4">

            @foreach ( $comics as $singleComic )
            <div class="col-2">
                <div class="card h-100">
                    <img src="{{$singleComic["thumb"]}}" class="card-img-top" alt="">
                    <div class="card-body">
                        <p class="card-text">{{strtoupper($singleComic["series"])}}</p>
                    </div>
                </div>               
            </div>              
            @endforeach
        </div>

        <div class="text-center">
        <a class="btn btn-primary mt-5 mb-4 px-5 fw-bold bottom-button" href="#" role="button">LOAD MORE</a>
        </div>
    </div>
    
    @include("partials.merch")

@endsection


