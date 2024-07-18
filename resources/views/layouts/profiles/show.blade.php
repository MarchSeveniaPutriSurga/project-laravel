@extends('layouts.private.index')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h2 class="mb-3 text-dark">{{ $profile->title }}</h2>
            
            <a href="/dashboard/profiles" class="btn btn-success"><i class="fa-solid fa-arrow-left"></i> Back To All My Recipe</a>
            <a href="/dashboard/profiles/{{ $profile->slug }}/edit" class="btn btn-warning"><i class="fa-regular fa-pen-to-square"></i> Edit</a>
            <form action="/dashboard/profiles/{{ $profile->slug }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Are You Sure?')"><i class="fa-regular fa-rectangle-xmark"></i> Delete</button>
            </form>
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
        </div>
    </div>
</div>
@endsection
