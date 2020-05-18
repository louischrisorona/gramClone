<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FollowsController extends Controller
{
    public functin store(User $user)
    {
        return auth()->user()->following()->toggle($user->profile);
    }
}
