@extends('layouts.public.app')

@section('content')

<!-- Page Content-->
<div class="container px-5 my-5">
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bolder mb-0" data-aos="fade-up" data-aos-delay="200"><span class="text-gradient d-inline">{{ $title }}</span></h1>
    </div>

    @if ($profiles->count())
    <div class="row gx-5 justify-content-center" data-aos="fade-up" data-aos-duration="1000">
        @foreach ($profiles as $profile)
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card shadow border-0 rounded-4">
                <div class="card-body p-4">
                    <div class="position-relative">
                        <div class="position-absolute px-3 py-2" style="background-color:rgba(0, 0, 0, 0.6)">
                            <a href="/categories/{{ $profile->category->slug }}" class=" text-white text-decoration-none">{{ $profile->category->name }}</a>
                        </div>
                        @if ($profile->image)
                            <img src="{{ asset('storage/' . $profile->image) }}" class="img-fluid rounded-start card-img-fixed" alt="...">
                        @else
                            <img src="{{ $profile->image_url }}" class="img-fluid rounded-start card-img-fixed" alt="{{ $profile->category->name }}">
                        @endif
                    </div>
                    <h5 class="card-title mt-3">
                        <a href="/profiles/{{ $profile->slug }}" class="text-decoration-none text-dark">{{ $profile->title }}</a>
                    </h5>
                    <p class="text-muted mb-2">
                        By. <a href="/authors/{{ $profile->author->username }}" class="text-decoration-none">{{ $profile->author->name }}</a>
                    </p>
                    <p class="card-text">{{ $profile->excerpt }}</p>
                    <a href="/profiles/{{ $profile->slug }}" class="text-decoration-none btn btn-secondary">Read more</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @else
    <p class="text-center fs-4">No Post Found.</p>
    @endif
</div>

<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init();
    document.addEventListener('DOMContentLoaded', function() {
        AOS.init();
    });
</script>

@endsection
