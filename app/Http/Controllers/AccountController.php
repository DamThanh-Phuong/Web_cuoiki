<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    //Log out
    function logOut()
    {
        return view('home');
    }
}
