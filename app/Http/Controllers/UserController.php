<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    // Show Register/Create Form
    public function register() {
        return view('users.register');
    }
}
