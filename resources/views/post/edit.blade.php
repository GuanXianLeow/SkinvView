@extends('layouts.app')

@section('content')
   
              
          
            <form action="{{ route('post.update',$post->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <br>  <br>

                    <div class="form">
                        <label for="title">Brand</label>
                        <input class="form-control" type="text" name="brand" id="brand" value="{{ $post->brand }}" >
                    </div>
                    <br>  <br>

                    <div class="form">
                        <label for="title">Title</label>
                        <input class="form-control" type="text" name="title" id="title" value="{{ $post->title }}" >
                    </div>
                    <br>  <br>

                    <div class="form">
                        <label for="body">Review Text</label>
                        <textarea rows="6" cols="50" class ="form-control"  type="text" name="body" id="Body">{{ $post->body }}
                        </textarea>
                    </div>
                    <br>  <br>
                   
                    <div class="form">
                        <button type="submit" class="btn btn-primary">Edit</button>
                        
                    </div>
                </form>
            </div>
           
        </div>
    </div>
@endsection