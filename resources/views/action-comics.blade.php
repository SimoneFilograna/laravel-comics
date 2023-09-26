@extends("layouts.public");
@section("content") 

    <div class="main-container-card">       
        <div class="light-blue-bar">
    
        </div>
    
        <div class="container mt-5 mb-5">
            <div class="row row-cols-2 g-5">
                <div class="col">
                    <div class="box">
                        <h3>{{$singleComic["title"]}}</h3>
                    </div>

                    <div class="green-bar d-flex justify-content-between align-items-center">
                        <div class="price d-flex justify-content-between align-items-center p-3">
                            <p class="m-0">U.S. Price:  {{$singleComic["price"]}}</p>
                            <p class="m-0">AVAILABLE</p>
                        </div>
                        <div class="btn-group">
                            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Check Availability
                            </button>
                        </div>
                    </div>

                    <div class="description-container">
                        <p>{{$singleComic["description"]}}</p>
                    </div>
                </div>
                <div class="col">
                    <div class="box adv-container">
                        <p class="fw-bold">ADVERTISEMENT</p>
                        <div class="img">
                            <img src="/images/adv.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grey-container">
            
            <div class="container">
                <div class="row row-cols-2">
                    <div class="col">
                        <h4>Talent</h4>
                        <div class="artist d-flex">
                            <div class="title-text">
                                <p class="text-art">Art by:</p>
                            </div>
                            <p class="text-primary">
                                @foreach ($singleComic["artists"] as $artist)
                                    {{$artist}} , 
                                @endforeach
                            </p>
                        </div>
                        <div class="written d-flex">
                            <div class="title-text">
                                <p class="text-write">Written by:</p>
                            </div>
                            <p class="ps-4 text-primary">
                                @foreach ($singleComic["writers"] as $writer )
                                    {{$writer}} ,
                                @endforeach
                            </p>
                        </div>



                    </div>
                    <div class="col">
                        <div class="box">
                            <h4>Specs</h4>
                            <div class="series d-flex gap-5">
                                <p class="w-25">Series:</p>
                                <p class="text-primary"> {{$singleComic["series"]}}</p>
                            </div>
                        </div>
                        <div class="box">
                            <div class="series d-flex gap-5">
                                <p class="w-25">U.S. Price:</p>
                                <p>{{$singleComic["price"]}}</p>
                            </div>
                        </div>
                        <div class="box">
                            <div class="series d-flex gap-5">
                                <p class="w-25">On Sale Date:</p>
                                <p> {{$singleComic["sale_date"]}}</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
       </div>
    </div>
@endsection