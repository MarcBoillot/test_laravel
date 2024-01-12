<div>
    <h1>la liste des messages de la posts-list</h1>
    

	<!-- Le formulaire est géré par la route "posts.store" -->
	<form method="POST" action="{{ route('post.store') }}" enctype="multipart/form-data" >

		<!-- Le token CSRF -->
		@csrf
		
		<p>
			<label for="message" >message</label><br/>
			<input type="text" name="message" value="{{ old('message') }}"  id="message" placeholder="Le message du post" >

			<!-- Le message d'erreur pour "title" -->
			@error("message")
			<div>{{ $message }}</div>
			@enderror
		</p>
		<input type="submit" name="valider" value="Valider" >

	</form>
    @foreach($posts as $post)
    <div>
        <ul>
            <p>message : {{$post->message}}</p>
            <p><i>autor : {{$post->user->name}}</i></p>
            <p><b>date de création : {{$post->created_at}}</b></p>
            <p>-------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
        </ul>
    </div>
    @endforeach


    
</div>
