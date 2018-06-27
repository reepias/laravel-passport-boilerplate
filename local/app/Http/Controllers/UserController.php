<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function index()
    {
        $users = DB::table('users')->get();
        return $users;
    }

    public function show()
    {
        $user_id = Auth::user()->id;

        $user = User::where('id', $user_id)
            ->get();
        return $user;
    }
    
}
