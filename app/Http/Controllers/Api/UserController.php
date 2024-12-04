<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function getUser(User $user)
    {
        $user = User::find($user);

        return response()->json($user, 200);
    }

    public function getUsers(User $user)
    {
        $users = User::all();

        return response()->json($users, 200);
    }

}
