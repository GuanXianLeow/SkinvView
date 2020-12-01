@extends('layouts.app')

@section('content')




<p> Review</p>


<div class="holdingcontainer1">

           

@foreach($users as $user)
@if($post->user_id == $user->id)
<h4>By {{$user->name}}</h4>
@endif
                    @endforeach
              
                          
                                <img src="/storage/{{$post->image}}" style="width:300px;height:300px;" >
                                </a>
                                    
                                         
                                <div row ="" style="width:300px;height:300px;" >
                              <h1> {{$post->brand}}</h>
                               <p>    {{$post->title}} </p>
                               
                                                               
                                 </div>
                   
                                 @endforeach
 
             


            















@endsection