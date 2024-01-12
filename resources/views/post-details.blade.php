<div>
    
    <p>Le detail du message avec l'Id de post-details Message :</p>
    <p> {{$post->message}}</p>
    <p><i>{{$post->user->name}}</i></p>
    <p><b>{{$post->created_at}}</b></p>

</div>
<h1>Editer un post</h1>

	


	<!-- Le formulaire est géré par la route "posts.update" -->
	<form method="POST" action="{{ route('post.update', $post) }}" enctype="multipart/form-data" >

		<!-- <input type="hidden" name="_method" value="PUT"> -->
		@method('PUT')

		
		@csrf
		
		<p>
			<label for="message" >POST</label><br/>

			<!-- S'il y a un $post->title, on complète la valeur de l'input -->
			<textarea type="message" name="message"  rows="10" cols="40" value=""  id="message"  >{{ isset($post->message) ? $post->message : old('message') }}</textarea>

			<!-- Le message d'erreur pour "title" -->
			@error("message")
			<div>{{ $message }}</div>
			@enderror
		</p>

    <input class="styled" type="submit" value="edit post" />
  
           
     
