<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller
{
    //
    public function index()
    {
        $user = User::orderBy('id');
        
        return view ('tasks.index',[
        'users' => $users,
        ]);
    }
    
}
