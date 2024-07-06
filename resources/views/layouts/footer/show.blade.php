@extends('layouts.private.index')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h2 class="mb-3 text-dark">{{ $footer->title }}</h2>
            
            <a href="/dashboard/footer" class="btn btn-success"><i class="fa-solid fa-arrow-left"></i> Back To All</a>
            <a href="/dashboard/footer/{{ $footer->id }}/edit" class="btn btn-warning"><i class="fa-regular fa-pen-to-square"></i> Edit</a>
            <form action="/dashboard/footer/{{ $footer->id }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Are You Sure?')"><i class="fa-regular fa-rectangle-xmark"></i> Delete</button>
            </form>
            <div class="row gx-5 justify-content-left mt-5">
                <div class="col-lg-8 col-xl-6">
                    <div class="form-floating mb-3">
                        <a href="{{ $footer->url }}" class="mediums" @readonly(true)>{{ $footer->title }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
