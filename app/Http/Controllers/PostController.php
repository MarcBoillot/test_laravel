<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Gate;
class PostController extends Controller
{
    public function index(){
        
        return view('posts-list',['posts'=> Post::all()]);
    }

    public function showId(int $id){
        return view('post-details',['id'=> $id]);
    }

    public function show( Post $post )
    {
        if (! Gate::allows('read-post', $post)) {
            abort(403);
        }
        
        // read the post...
 
        return view('post-details',['post'=>$post]);
    }

    public function create(Post $post): RedirectResponse
    {
        if (! Gate::allows('create-post', $post)) {
            abort(403);
        }
        
        // Update the post...
 
        return redirect('/posts');
    }

    public function update(Request $request, Post $post): RedirectResponse
    {
        if (! Gate::allows('update-post', $post)) {
            abort(403);
        }
        
        // Update the post...
 
        return redirect('/posts');
    }

    public function delete(Request $request ,Post $post): RedirectResponse
    {
        if (! Gate::allows('delete-post', $post)){
            abort(403);
        }
        return redirect('/posts');
    }
}
