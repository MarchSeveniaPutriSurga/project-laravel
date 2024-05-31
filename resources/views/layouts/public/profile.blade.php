@extends('layouts.public.app')

@section('content')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h2 class="display-5 fw-bolder mb-3"><span class="text-gradient d-inline">{{ $profile->title }}</span></h2>
            <h5>
                by. <a href="/authors/{{ $profile->author->username }}" class="text-decoration-none">{{ $profile->author->name }}</a> in 
                <a href="/categories/{{ $profile->category->slug }}" class="text-decoration-none">{{ $profile->category->name }}</a>
            </h5>
            @if ($profile->image)
                <div style="max-height: 350px; overflow:hidden;">
                    <img src="{{ asset('storage/' . $profile->image) }}" class="img-fluid rounded-start my-3" alt="...">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x500?{{ $profile->category->name }}" class="img-fluid rounded-start my-3" alt="...">
            @endif
            <article class="my-3 fs-6">
                {!! $profile->biografi !!}
            </article>
            <a href="/profile" class="d-block mt-3">Back To Profile</a>
        </div>
    </div>
</div>

@endsection