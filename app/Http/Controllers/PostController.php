<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class PostController extends Controller implements HasMiddleware
{

    public static function middleware(): array
    {
        return [
            'auth',
            new Middleware('check', only: ['index']),
        ];
    }

    public function index()
    {
        $posts = Post::with('user')->latest()->paginate(6) ;
        return view('index', ['posts' => $posts]);
    }

    public function show(Post $post)
    {
        return view('show', ['post' => $post]);
    }

    public function create()
    {
        $authors = User::all();
        return view('create' , ['authors' => $authors]);
    }

    public function store(PostRequest $request)
    {

        $request->validated();

        Post::create($request->toArray());

        // Session::flash('message' , 'post inserted successfully');

        flash()->success('post inserted successfully!');

        return redirect('/posts');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        //  Session::flash('message' , 'post deleted successfully');

        flash()->success('post deleted successfully!');

        return redirect('/posts');
    }
}
