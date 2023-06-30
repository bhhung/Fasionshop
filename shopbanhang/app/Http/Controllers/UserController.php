<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
class UserController extends Controller
{
    public function users() { 
        $users = User::all();
        return view('admin.all_user')->with('users', $users);
    }
    public function news_paper() {
        return view('pages.newspaper.news_paper');
    }
   
}
