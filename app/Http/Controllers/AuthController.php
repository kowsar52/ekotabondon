<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }
    public function postLogin(Request $request)
    {
  
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);
  
        if ($validator->fails()){
            return response()->json([
                    "status" => false,
                    "errors" => $validator->errors()
                ]);
        } else {
            if (Auth::attempt($request->only(["email", "password"]))) {
                return response()->json([
                    "status" => true, 
                    "redirect" => url("dashboard")
                ]);
            } else {
                return response()->json([
                    "status" => false,
                    "errors" => ["Invalid credentials"]
                ]);
            }
        }
    }
    public function registration()
    {
        return view('admin.register');
    }
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    
    public function logout() {
        Session::flush();
        Auth::logout();
    
        return Redirect('login');
    }

}
