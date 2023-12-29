<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    
    public function index(){
        return view('dashboard');
    }
    public function student(){
        return view('student');
    }
    public function userList(){
        $users = User::all();
        return view('userlist',compact('users'));
    }
   
    public function login(){
        return view('login');
    }
}
