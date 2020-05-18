<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class ProfileController extends Controller
{
   public function index($user)
    {
    $user = user::findOrFail($user);  //  oly find can take us to error and findOrFail ganarete   404 when there there is no user id mathed
        return view('profiles.index',[
         'user'=>$user, ]);
    }
}
