@extends('layouts.Master')

@section('title', 'Detail')

@section('content')
<div class="d-flex row">
    <div>
        <h3>{{ $books->title }}</h3>
    </div>
    <div>
        <p>{{ $books->description }}</p>
    </div>

    <div class="d-flex col align-items-center">
        By {{ $books->author }} | {{ $books->date }}
        @if ($books->readingtime_id == 1)
            <a type="hidden" href="" class="btn btn-primary ms-3" style="width:150px; background-color: green;">Long Reads</a>
        @elseif ($books->readingtime_id == 2)
            <a type="hidden" href="" class="btn btn-primary ms-3" style="width:150px; background-color: green;">Medium Reads</a>
        @else
            <a type="hidden" href="" class="btn btn-primary ms-3" style="width:150px; background-color: green;">Quick Reads</a>
        @endif
        <div>
            @foreach ($categories as $cat)

                <a href="" class="btn btn-primary ms-3" style="width:150px; {{ $cat->name === $books->readingtime_id ? 'background-color: yellow;' : '' }}">
                    {{ $cat->name }}
                </a>
            @endforeach
        </div>

        <div>

        </div>

    </div>
    <div class="mt-3 mb-3" style="width: 100%; height: 200px; overflow: hidden;">
        <img src="{{ $books->image }}" style="width: 100%; height: 100%; object-fit: cover;">
    </div>

    <div class="d-flex ms-0 gap-2 justify-content-start align-items-start">
        <a href="#" class="d-flex justify-content-start rounded-circle">
            <i class="bi bi-linkedin rounded-circle "></i>
        </a>
        <a href="#" class="d-flex justify-content-start rounded-circle">
            <i class="bi bi-twitter rounded-circle "></i>
        </a>
        <a href="#" class="d-flex justify-content-start rounded-circle">
            <i class="bi bi-facebook rounded-circle "></i>
        </a>
        <a href="#" class="d-flex justify-content-start rounded-circle">
            <i class="bi bi-instagram rounded-circle "></i>
        </a>
    </div>

    <div class="mt-3">
        {{ $books->body }}
    </div>

    <div class="mt-3">
        <h6>Video Section</h6>
    </div>

    <div class="d-flex thumbnails" style="width: 100%;">
        <iframe src="https://www.youtube.com/embed/G3Ov4lXIJ1E" frameborder="0" allowfullscreen style="width: 100%; height: 400px;"></iframe>
    </div>





</div>

@endsection
