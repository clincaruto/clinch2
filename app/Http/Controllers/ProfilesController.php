<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($user)
    {
    	 $user = User::findOrFail($user);
    	//dd(\App\User::find($user)); to see the data
    	//$user = User::find($user);
        return view('home',['user' => $user,]);
    }
}
