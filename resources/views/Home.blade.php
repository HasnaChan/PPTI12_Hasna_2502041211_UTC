@extends('layouts.Master')

@section('title', 'Home')

@section('content')
<style>
    .carousel-control-prev,
    .carousel-control-next {
        display: flex;
        justify-content: center;
        margin: auto;
        width: 50px;
        height: 50px;
        border-radius: 0;
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>

<div class="d-flex row">

    <div class="d-flex col" style="border:solid black 5px;">
        <div class="m-2">
            <div class="ms-3">
                <img src="{{$bookz[0]->image}}" style="width: 300px; height:170px;">
            </div>
        </div>

        <div class="d-flex ms-3 row  mt-1 mb-3">
            <p style="text-decoration: underline;">IT REALLY COUNTS</p>

            <h3>{{ $bookz[0]->title }}</h3>
            <p>{{ $bookz[0]->description }}</p>
        </div>
    </div>

    <div class="d-flex mt-3 " style="border:solid black 5px;">
        <div class="d-flex row ">
            <div class="ms-4 mt-3">

                <p style="text-decoration: underline;">LATEST BOOK REVIEW</p>
            </div>

            <div class="d-flex col">
                @foreach ($bookz->skip(1) as $book)
                <div class="d-flex ms-3 row">
                    <img src="{{$book->image}}" style="width: 300px; height:170px;">
                    <h3>{{ $book->title }}</h3>
                    <p>{{ $book->description }}</p>
                </div>
                @endforeach

            </div>
        </div>
    </div>

    <div id="bookCarousel" class="carousel slide mt-3" data-bs-ride="carousel" style="border:solid black 5px;">
        <div class="carousel-inner mt-3">
            <div class="ms-4 mt-3">

                <p style="text-decoration: underline;">Book Series Review</p>
            </div>
            @foreach ($books->chunk(3) as $index => $chunk)
                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                    <div class="row">
                        @foreach ($chunk as $book)
                            <div class="col-md-4">
                                <div class="d-flex row ms-3 m-auto mb-3">
                                    <img src="{{ $book->image }}" style="width: 300px; height: 170px;">
                                    <h3>{{ $book->title }}</h3>
                                    <a href="/detail/{{ $book->id }}" class="btn btn-primary ms-3" style="width:100px;">Read Post</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev ms-5" type="button" data-bs-target="#bookCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next me-5" type="button" data-bs-target="#bookCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>



</div>

@endsection
