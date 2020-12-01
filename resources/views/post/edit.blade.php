@extends('layouts.app')

@section('content')
   
<div class="login-box1">
       <div class="form-login1">
            
          
            <form action="{{ route('post.update',$post->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                  

                  
                        <label for="title">Brand</label>
                        <input class="form-control" type="text" name="brand" id="brand" value="{{ $post->brand }}" >
                   

                    
                        <label for="title">Title</label>
                        <input class="form-control" type="text" name="title" id="title" value="{{ $post->title }}" >
                  

                    
                        <label for="body">Review Text</label>
                        <textarea rows="6" cols="50" class ="form-control"  type="text" name="body" id="Body">{{ $post->body }}
                        </textarea>
                    
                   
                        <button type="submit" class="btn btn-primary">Edit</button>
                        
                    </div>
                </form>
            </div>
           
        </div>
    </div>
@endsection