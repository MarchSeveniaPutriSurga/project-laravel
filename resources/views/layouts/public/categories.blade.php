@extends('layouts.public.app')

@section('content')

<!-- Page Content-->
<div class="container px-5 my-5" data-aos="fade-up" data-aos-delay="200">
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline"> Recipe Categories</span></h1>
    </div>
    <div class="container">
        <div class="row">
            {{-- @foreach ($categories as $category)
                <div class="col-md-3">
                    <a href="/categories/{{ $category->slug }}">
                        <div class="card text-bg-dark">
                            <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                            <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0, 0, 0, 0.6)" >{{ $category->name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach --}}
            <div class="dropdown text-center mb-5">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Recipe Categories
                </button>
                    <ul class="dropdown-menu">
                        @foreach ($categories as $category)
                        <li><a class="dropdown-item" href="/categories/{{ $category->slug }}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init();
        });
    </script>
@endsection
