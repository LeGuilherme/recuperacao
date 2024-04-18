<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user(string $name,string $lastname)
    {
        return view('user', ['name' => $name, 'lastname' => $lastname]);
    }
}