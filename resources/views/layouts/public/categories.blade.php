@extends('layouts.public.app')

@section('content')

<!-- Page Content-->
<div class="container px-5 my-5" data-aos="fade-up" data-aos-delay="200">
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline"> Recipe Categories</span></h1>
    </div>
    <div class="container">
        <div class="row">
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
