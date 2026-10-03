@extends('layouts.app')

@section('title')
    Posts
@endsection


@section('content')
    {{-- <x-Alert message="this is a test" /> --}}
    <div class="container py-5">
        <div class="row">
            @if (session()->has('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif
        </div>
        <h1 class="mb-4">All Posts</h1>
        <a href="{{ route('posts.create') }}" class="btn btn-success mb-4">Add Post</a>
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $post['title'] }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Post #{{ $post['id'] }}</h6>
                            <p class="card-text flex-grow-1">{{ $post['body'] }}</p>
                        </div>
                        <div class="card-footer bg-transparent">
                            <small class="text-muted">By {{ $post->user->name }}</small>
                            <div class="mt-2">
                                <a href="{{ route('posts.show', $post['id']) }}" class="btn btn-sm btn-primary">Show</a>
                                <a href="#" class="btn btn-sm btn-warning">Edit</a>
                                <form class="d-inline" method="post" action="{{ route('posts.destroy', $post['id']) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $posts->links() }}
    </div>
@endsection
