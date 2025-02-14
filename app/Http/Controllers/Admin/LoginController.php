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
                
                if(Auth::guard('admin')->user()->role != "admin"){
                    Auth::guard('admin')->logout();
                    return redirect()->route('admin.login')->with('Your are not authorize this page');
                }
                return redirect()->route('admin.dashboard');
            } else {
                return redirect()->route('admin.login')->with('Either email or password is incorrect');
            }

        } else{
            return redirect()->route('admin.login')
            ->withInput()
            ->withErrors($validator);
        }

    }


    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }

}