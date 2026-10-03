@extends('layouts.app')

@section('title')
    Add Post
@endsection

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        {{-- <div class="alert alert-danger">{{ $error }}</div> --}}
                    @endforeach
                @endif
            </div>
            <div class="col-12">
                <form method="post" action="{{ route('posts.store') }}">
                    @csrf
                    <div class="mb-3"> <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title"
                            placeholder="Enter post title">
                        @error('title')
                            <small class="alert alert-danger mt-3 d-block">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>
                    <div class="mb-3"> <label for="body" class="form-label">Body</label>
                        <textarea class="form-control" id="body" name="body" rows="5" placeholder="Enter post body"></textarea>
                        @error('body')
                            <small class="alert alert-danger mt-3 d-block">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>
                    <div class="mb-3"> <label for="author" class="form-label">Author</label> 
                    <select class="form-select my-2" name="user_id">
                        @foreach ($authors as $author )
                            <option value="{{ $author->id }}">{{ $author->name }}</option>
                        @endforeach
                    </select>
                    @error('author')
                        <small class="alert alert-danger mt-3 d-block">
                            {{ $message }}
                        </small>
                    @enderror
                    <button type="submit" class="btn btn-primary"> Add Post </button>
                </form>
            </div>

        </div>
    </div>
@endsection
