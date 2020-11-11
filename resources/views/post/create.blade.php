@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
            <form action="{{ route('post.store') }}" enctype="multipart/form-data" method="post">
                    @csrf
                    <br>  <br>
                   

                    <br>  <br>
                    <div class="form">
                        <label for="brand">Brand</label>
                        <input class="form-control" type="text" name="brand" id="brand">
                    </div>
                    <br>  <br>

                    <div class="form">
                        <label for="title">Title</label>
                        <input class="form-control" type="text" name="title" id="title">
                    </div>
                    <br>  <br>

                    <div class="form">
                        <label for="body">Review</label>
                        <textarea rows="6" cols="50" class ="form-control"  type="text" name="body" id="Body">
                        </textarea>
                    </div>
                    <br>  <br>
                    <div class="form">
                    <label for="postpic">Post a picture</label>
                        <input type="file" name="postpic" id="postpic">
                    </div>

                    <br>  <br>
                    <div class="form">
                        <button type="submit" class="btn btn-primary">Create Reviews</button>
                    </div>
                </form>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
@endsection