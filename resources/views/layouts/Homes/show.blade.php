@extends('layouts.private.index')

@section('container')

<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <a href="/dashboard/homes" class="btn btn-success"><i class="fa-solid fa-arrow-left"></i> Back To Home Setting</a>
            <a href="/dashboard/homes/{{ $home->slug }}/edit" class="btn btn-warning"><i class="fa-regular fa-pen-to-square"></i> Edit</a>
            <h2 class="my-3 text-dark">{{ $home->title }}</h2>
            @if ($home->image)
                <img src="{{ asset('storage/' . $home->image) }}" class="profile-img " style="width: 50%" alt="...">
            @else
                <img src="{{ asset('assets/public/assets/wanita.png') }}" class="profile-img" alt="...">
            @endif
            <article class="my-3 fs-6">
                {!! $home->about !!}
            </article>
        </div>
    </div>
</div>
@endsection
