<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $rules = [
            'email' => 'required|email:filter',
            'password' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if (!$validator->fails()) {
            if (!empty($request->guard)) {
                $check = Auth::guard($request->guard)->attempt(['email' => $request->email, 'password' => $request->password]);
            } else {
                $check = Auth::attempt(['email' => $request->email, 'password' => $request->password]);
            }


            if ($check) {
                return response()->json(['message' => 'success']);
            } else {
                return response()->json(['message' => 'The provided credentials do not match our records.']);
            }
        } else {
            $validator->errors()->add('message', 'Empty Field!');
            return response()->json($validator->errors());
        }
    }

    public function logout()
    {
        if (Auth::check()) {
            Auth::logout();
        } elseif (Auth::guard('customer')->check()) {
            Auth::guard('customer')->logout();
        } elseif (Auth::guard('seller')->check()) {
            Auth::guard('seller')->logout();
        }

        return redirect()->to('/');
    }

    public function isAuth()
    {
        if (Auth::guard('customer')->check()) {
            return response()->json(['message' => 'authenticated']);
        }

        return response()->json(['message' => 'not authenticated']);
    }
}
