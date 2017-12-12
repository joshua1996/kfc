<?php

namespace App\Http\Controllers;

use App\userModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class registerController extends Controller
{
    use RegistersUsers;
    protected $redirectTo = '/';

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6|confirmed',
            'g-recaptcha-response' => 'required|recaptcha',
        ]);
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withInput($request->all())
                ->withErrors($validator);
        }
    }

    protected function create(array $data)
    {
        return userModel::create([
            'userID' => 'user'.uniqid(),
            'firstName' => $data['firstname'],
            'lastName' => $data['lastname'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
