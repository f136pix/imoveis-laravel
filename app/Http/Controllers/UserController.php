<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    // GET /register
    public function create() {
        return view('users.register');
    }
}
