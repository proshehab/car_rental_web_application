<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use function PHPSTORM_META\elementType;

class AuthController extends Controller
{

    public function index(){
        return view('admin.auth.login');
    }


    public function authenicate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);


        if ($validator->passes()){

            if(Auth::attempt(['email'=> $request->email,'password'=> $request->password])){
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

    // Register method
    public function register(Request $request)
    {


        return view('admin.auth.signup');


        // if ($validator->fails()) {
        //     return response()->json($validator->errors(), 400);
        // }

        // $user = User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        // ]);

        // Auth::login($user);

        // return response()->json(['message' => 'User registered and logged in successfully!']);
    }

    public function progressRegister(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required | Max:20',
            'email' => 'required |email| unique:users',
            'password' => 'required|confirmed',
        ]);

        if ($validator->passes()){

            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->role = 'customer';
            $user->save();

            return redirect()->route('account.login')->with('success','You have register succfully');

        } else{
            return redirect()->route('accoutnRegister')
            ->withInput()
            ->withErrors($validator);
        }

    }

    // Login method

    // try {
    //     // Validate the incoming request data
    //     $validator = Validator::make($request->all(), [
    //         'email' => 'required|string|email',
    //         'password' => 'required|string|min:8',
    //     ]);

    //     if ($validator->fails()) {
    //         return response()->json($validator->errors(), 400);
    //     }

    //     // Attempt to log the user in
    //     if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
    //         $user = Auth::user();

    //         // Check if the user is an admin or customer
    //         if ($user->isAdmin()) {
    //             // Admin login, redirect to admin dashboard
    //             // Toastr::success('Logged in successfully as Admin!');
    //             return redirect()->route('admin.dashboard');
    //         }

    //         if ($user->isCustomer()) {
    //             // Customer login, redirect to customer dashboard
    //             // Toastr::success('Logged in successfully as Customer!');
    //             return redirect()->route('customer.dashboard');
    //         }

    //         // Default fallback if no role match (just in case)
    //         // Toastr::error('Role not assigned properly.');
    //         return redirect()->route('login');
    //     }

    //     // If authentication fails, show error
    //     // Toastr::error('Invalid credentials.');
    //     return response()->json(['message' => 'Invalid credentials'], 401);

    // } catch (\Exception $e) {
    //     // Handle any exceptions that occur during the login process
    //     // Toastr::error('An error occurred. Please try again.');
    //     return response()->json(['message' => 'An error occurred. Please try again.'], 500);
    // }


    // Logout method
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('account.login');
    }
}
