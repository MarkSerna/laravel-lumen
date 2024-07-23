<?php

namespace App\Http\Controllers;
use App\Models\User;

class UsersController extends Controller
{
    function index()
    {
        // Get all users from the database (Eloquent)
        $users = User::all();

        return response()->json($users, 200);
    }
}
