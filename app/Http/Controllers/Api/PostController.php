<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getUserPosts(User $user)
    {
        $posts = $user->posts()->get();

        return response()->json($posts, 200);
    }
}
