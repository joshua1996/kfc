<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class loginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/';
}
