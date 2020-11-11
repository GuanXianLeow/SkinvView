@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <form action="{{ route('profile.postEdit') }}" enctype="multipart/form-data" method="post">
                    @csrf
                    <br>  <br>
                    <div class="form">
                        <label for="age">Age</label>
                        <input class="form-control" type="text" name="age" id="age" value="{{ $profile->age }}" >
                    </div>
                    <br>  <br>
                    <div class="form">
                        <label for="skintype">Skin Type</label>
                        <input class="form-control" type="text" name="skintype" id="skintype" value="{{ $profile->skintype }}">
                    </div>
                    <br>  <br>
                    <div class="form">
                        <label for="profilepic">Profile picture</label>
                        <input type="file" name="profilepic" id="profilepic">
                    </div>
                    <br>  <br>
                    <div class="form">
                        <button type="submit" class="btn btn-primary">Create profile</button>
                    </div>
                </form>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
@endsection