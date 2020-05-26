<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FollowsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public functin store(User $user)
    {
        return auth()->user()->following()->toggle($user->profile);
    }
}
