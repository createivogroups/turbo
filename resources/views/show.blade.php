@extends('layouts.app')

@section('title')
    Show Post
@endsection

@section('content')
    <div class="container py-5">
        <h1 class="mb-4">Post</h1>
        <a href="#" class="btn btn-success mb-4">Add Post</a>
        <div class="row">

            <div class="col-12 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $post['title'] }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Post #{{ $post['id'] }}</h6>
                        <p class="card-text flex-grow-1">{{ $post['body'] }}</p>
                    </div>
                    <div class="card-footer bg-transparent">
                        <small class="text-muted">By {{ $post['author'] }}</small>
                        <a href="{{ route('posts.index') }}" class="btn btn-warning btn-sm">back</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
