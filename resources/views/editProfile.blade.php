@extends('layouts.app')

@section('content')
<div class="login-box2">
       <div class="form-login2">
           
                <form action="{{ route('profile.postEdit') }}" enctype="multipart/form-data" method="post">
                    @csrf
                 
                   
                        <label for="age">Age</label>
                        <input class="form-control" type="text" name="age" id="age" value="{{ $profile->age }}" >
                    
                    
                    
                        <label for="skintype">Skin Type</label>
                        <input class="form-control" type="text" name="skintype" id="skintype" value="{{ $profile->skintype }}">
                  
                   
                  
                        <label for="profilepic">Profile picture</label>
                        <input type="file" name="profilepic" id="profilepic">
                 
                        <button type="submit" class="btn btn-primary">Create profile</button>
                   <p>testing</p>
                </form>
            </div>
            
        </div>
    </div>
@endsection