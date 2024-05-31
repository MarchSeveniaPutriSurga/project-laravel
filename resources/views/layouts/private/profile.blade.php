@extends('layouts.private.index')

@section('container')
<div class="d-flex flex-column justify-content-between align-items-start pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2 welcome-message">My Profiles</h1>
</div>

@if(session()->has('success'))
    <div class="alert alert-success" role="alert">
    {{ session('success') }}
    </div>
@endif

    <div class="card shadow mb-4" style="margin: 10px;">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Recipe Example</h6>
        </div>
        <div class="card-body">
            <a href="/dashboard/profiles/create" class="btn btn-primary mb-3">Create New Recipe</a>
            <div class="table-responsive" >
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Category</th>
                            <th scope="col" style="width: 150px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($profiles as $profile)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $profile->title }}</td>
                            <td>{{ $profile->category->name }}</td>
                            <td>
                                <a href="/dashboard/profiles/{{ $profile->slug }}" class="badge bg-info"><i class="fa-regular fa-eye"></i></a>
                                <a href="/dashboard/profiles/{{ $profile->slug }}/edit" class="badge bg-warning"><i class="fa-regular fa-pen-to-square"></i></a>
                                <form action="/dashboard/profiles/{{ $profile->slug }}" method="POST" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="badge bg-danger border-0" onclick="return confirm('Are You Sure?')"><i class="fa-regular fa-rectangle-xmark"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
