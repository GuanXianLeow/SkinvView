@extends('layouts.app')

@section('content')
<div class="login-box1">
       <div class="form-login1">
            
            <form action="{{ route('post.store') }}" enctype="multipart/form-data" method="post">
                    @csrf
                   
                   

                   
                   
                        <label for="brand">Brand</label>
                        <input class="form-control" type="text" name="brand" id="brand">
                  

                    
                        <label for="title">Title</label>
                        <input class="form-control" type="text" name="title" id="title">
                    
                  
                        <label for="body">Review</label>
                        <textarea rows="6" cols="50" class ="form-control"  type="text" name="body" id="Body">
                        </textarea>
                   
              
                    <label for="postpic">Post a picture</label>
                        <input type="file" name="postpic" id="postpic">
                   

                    
                        <button type="submit" class="btn btn-primary">Create Reviews</button>
                    </div>
                </form>
              
        </div>
    </div>
@endsection