
@extends('layouts.app')

@section('content')
              <div class="holdingcontainershow"> 
            <img src="/storage/{{ $post->image }}" class="w-50">
        </div>
        
        <div class="show" style="width:500px;height:500px;" >
            <hs> {{$post->brand}}</h>
            <br>
            <ht> {{$post->title}}</h>
            <br>
            <ps> {{$post->body}}</p>


            <a href="/post/{{$post->id}}/edit">
            <button>Edit </button> </a>
            

            <form1 action="{{ route ('post.destroy',['post' => $post->id] ) }}" method="post">
            @csrf
            @method ('Delete')

            <button type="submit">Delete</button>
              
        </div>
    </div>
</div>
@endsection
