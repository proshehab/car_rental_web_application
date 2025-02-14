<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.admin_login');
    }

    public function authenicate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);


        if ($validator->passes()){

            if(Auth::guard('admin')->attempt(['email'=> $request->email,'password'=> $request->password])){
                return redirect()->route('account.dashboard');
            } else {
                return redirect()->route('account.login')->with('Either email or password is incorrect');
            }

        } else{
            return redirect()->route('account.login')
            ->withInput()
            ->withErrors($validator);
        }

    }

}