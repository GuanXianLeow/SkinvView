@extends('layouts.app')

@section('content')
<div class="login-box2">
       <div class="form-login2">
            
                <form action="{{ route('profile.postCreate') }}" enctype="multipart/form-data" method="post">
                    @csrf
                    
                 
                        <label for="age">Age</label>
                        <input class="form-control" type="text" name="age" id="age">
                    
                    
                    
                        <label for="skintype">Skin Type</label>
                        <input class="form-control" type="text" name="skintype" id="skintype">
                   
                 
                        <label for="profilepic">Profile picture</label>
                        <input type="file" name="profilepic" id="profilepic">
                   
                    
                
                        <button type="submit" class="btn btn-primary">Edit Profile</button>
                  
                </form>
            </div>
           
        </div>
    </div>
@endsection
