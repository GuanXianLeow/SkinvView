@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

       
                <section>
            <div class="hero">
                <img src="{{ url('/images/about.jpeg') }}" alt=""></img>
                <h1 class="headline">SkinView</h1>
            </div>
        </section>
            
        <div class="slider"></div> 

       
        <script src="{{ mix('js/app.js') }}"></script>
        <script type="text/javascript"  src="{{ asset('js/home.js') }}"></script>
      
       




@endsection

