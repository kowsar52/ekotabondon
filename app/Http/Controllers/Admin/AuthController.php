<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator,Auth,Session;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function postLogin(Request $request)
    {
        //validation process
        $validator = Validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);


        if ($validator->fails()){//if validation fail
            return response()->json([
                    "status" => false,
                    "errors" => $validator->errors()
                ]);
        } else {//if validation pass
            $credential = [
                'email' => $request->email,
                'password' => $request->password
            ];

            if(Auth::attempt($credential , $request->remember ? true : false)){
                //login
                return response()->json([
                    "status" => true,
                    'message' => "Login Successfully. you are redirecting...",
                    "redirect" => url("admin/dashboard")
                ]);
            }else{
                //not login
                return response()->json([
                    "status" => false,
                    "errors" => ["Invalid credentials"]
                ]);
            }
            // if (Auth::attempt($request->only(["email", "password"]))) {// login attemt
            //     return response()->json([
            //         "status" => true,
            //         "redirect" => url("dashboard")
            //     ]);
            // } else {// credential doesn't match
            //     return response()->json([
            //         "status" => false,
            //         "errors" => ["Invalid credentials"]
            //     ]);
            // }
        }
    }
    //dashboard method start
    public function dashboard()
    {
        return view('admin.dashboard');
    }//end dashboard method

    public function logout() {
        Session::flush();
        Auth::logout();

        return Redirect('admin/login');
    }

}
