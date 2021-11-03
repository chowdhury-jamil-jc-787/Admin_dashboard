<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class adminController extends Controller
{
    function login(Request $req)
    {
        return User::where(['email'=>$req->email])->first();
    }
}
