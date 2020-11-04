<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function viewRegister(){
        return view('admin.register');
    }
    public function register(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name'     => 'required',
            'email'         => 'required|email|unique:users',
            'password'      => 'required',
        ]);


        if ($validator->fails()) {

            return response()->json([
                'status'=>false,
                'message' => 'Sorry your registration could not be completed',
                'errors' =>$validator->errors()->all() ,
            ], 401);

        }

        //disable mass assignment protection.
        //please only use this if you know what u are doing, it is dangerous

        User::unguard();

        $user = new User();
        $user->name    = $request->name;
        $user->email        = $request->email;
        $user->password     = bcrypt($request->password);
        $user->save();

        User::reguard();
        auth()->login($user);
        return redirect()->route('viewDashboard');
    }
//

    public function viewLogin(){
        return view('admin.login');
    }

    public function login(Request $request){


        $validator = Validator::make($request->all(), [
            'email'     => 'required|string',
            'password'  => 'required|string',
        ]);



        if ($validator->fails()) {

            $errors =$validator->errors()->all();

            return response()->json([
                'status'=> false,
                'message' => 'Some error(s) occurred',
                'errors'=> $errors

            ]);

        }

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('/viewDashboard');
        }
        return redirect()->back()->with('errs','Wrong Credentials');


    }

    public function logout() {
        Auth::logout();
        return redirect()->route('viewLogin');
    }

}
