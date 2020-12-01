
@extends('layouts.app')

@section('content')
<br>
              <div class="holdingcontainershow"> 
            <img src="/storage/{{ $post->image }}" class="w-50">
        </div>
        
        <div class="show" style="width:500px;height:500px;" >
            <hs> {{$post->brand}}</h>
            <br>  <br>
            <ht> {{$post->title}}</h>
            <br><br>
            <ps> {{$post->body}}</p>

            <br>
            <a href="/post/{{$post->id}}/edit">
            <button>Edit </button> </a>
            

            <form action="{{ route ('post.destroy',['post' => $post->id] ) }}" method="post">
            @csrf
            @method ('Delete')

            <button type="submit" class="btn btn-primary">Delete</button>
              
        </div>
    </div>
</div>
@endsection
