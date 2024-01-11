<div>
    
    <p>Le detail du message avec l'Id de post-details Message :</p>
    <p> {{$post->message}}</p>
    <p>{{$post->users->name}}</p>
    <p>{{$post->created_at}}</p>

</div>
<form method="POST" action="{{ route('posts.destroy', $post) }}" >
    @csrf
    @method("DELETE")
    <input class="styled" type="submit" value="delete post" />

</form>
  
           
     
