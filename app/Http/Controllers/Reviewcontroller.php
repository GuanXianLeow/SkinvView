<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Reviewcontroller extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::all();
        $users = User::all();
        return view('review',[
            'posts' => $posts,
            'users' => $users
        ]
    );
    }

}


