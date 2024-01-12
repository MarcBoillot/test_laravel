<div>
    
    <p>Le detail du message avec l'Id de post-details Message :</p>
    <p> {{$post->message}}</p>
    <p><i>{{$post->user->name}}</i></p>
    <p><b>{{$post->created_at}}</b></p>

</div>
<form method="POST" action="{{ route('post.destroy', $post) }}" >
    @csrf
    @method("DELETE")
    <input class="styled" type="submit" value="delete post" />

</form>
@csrf
    @method("EDIT")
    <input class="styled" type="submit" value="edit post" />
  
           
     
