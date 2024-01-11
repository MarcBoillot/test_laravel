<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Gate;
class PostController extends Controller
{
    public function show(){

        return view('posts-list');
    }
    public function showId(int $id){
        return view('post-details',['id'=> $id]);
    }
    public function update(Request $request, Post $post): RedirectResponse
    {
        if (! Gate::allows('update-post', $post)) {
            abort(403);
        }
 
        // Update the post...
 
        return redirect('/posts');
    }
}
