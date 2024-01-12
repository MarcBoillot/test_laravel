<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Gate;
class PostController extends Controller
{
    public function index(){
        return view('posts-list',['posts'=> Post::latest()->get()]);
    }

    /*public function showId(int $id){
        return view('post-details',['id'=> $id]);
    }*/
    public function destroy(Post $post){
        $post->delete();
        return redirect(route('post.index'));
    }

    public function create(Post $post){
        $this->authorize('create', Post::class);
        $post->edit();
      return view('posts-list');
    }


    public function store(Request $request) {
        // 1. La validation
        $this->validate($request, [
            'message' => 'bail|required|string|max:255'         
        ]);
        // 3. On enregistre les informations du Post
        Post::create([
            "message" => $request->message,
            "user_id"=>$request->user()->id
        ]);  
        // 4. On retourne vers tous les posts : route("posts.index")
        return redirect(route("post.index"));
    }

    public function show( Post $post )
    {
        if (! Gate::allows('read-post', $post)) {
            abort(403);
        }
        
        // read the post...
 
        return view('post-details',['post'=>$post]);
    }

    public function edit(Request $request, Post $post)
    {
        if (! Gate::allows('update-post', $post)) {
            abort(403);
        }
        
        // Update the post...
 
        return view("post-details", ['post'=>$post]);
    }

    public function update(Request $request,Post $post){
        $post->update(['message'=>$request->message]);
        return view('post-details',['post'=>$post]);
    }
}
