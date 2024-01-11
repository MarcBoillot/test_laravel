<div>
    <h1>la liste des messages de la posts-list</h1>
    @foreach($posts as $post)
    <div>
        <ul>
            <p>message : {{$post->message}}</p>
        </ul>
    </div>
    @endforeach
    
</div>
