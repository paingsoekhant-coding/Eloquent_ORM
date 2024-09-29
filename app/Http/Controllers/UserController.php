<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Address;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userList()
    {
        $userList = User::get();
        return view('dashboard',compact('userList'));
    }
}
