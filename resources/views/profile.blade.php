@extends('layouts.app')

@section('content')

   
                  
                       <img class="rounded-circle" width="150" src="/storage/{{ $profile->image }}">
                      
                      
                       <h1>{{ $user->name }}</h1>

                       Age :{{ $profile->age }}</div>
                         <br>
                       
                         Skin Type :{{ $profile->skintype }}</div>
                       <br>
                       <span><strong>{{ $postscount }}</strong> Review </span>
                       <br> <br>
                       <div class="pt-3"><a href="/profile/edit">Edit profile</a></div>
                      
                       </div>

                       <div class="holdingcontainer1">

                            @foreach($posts as $post)
                            
                                    <a href="/post/{{$post->id}}">
                                        <img src="/storage/{{$post->image}}" style="width:300px;height:300px;" >
                                        </a>
                                            
                                                 
                                        <div row ="" style="width:300px;height:300px;" >
                                      <h1> {{$post->brand}}</h>
                                       <p>    {{$post->title}} </p>
                                       
                                                                       
                                         </div>
                            @endforeach


                       
                  
                                                        
                          
    </div>
</div>
               </div>
         
</div>
@endsection
