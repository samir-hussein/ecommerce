<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function read()
    {
        if (Auth::guard('customer')->check()) {
            $customer = Customer::find(Auth::guard('customer')->id());
            return response()->json($customer);
        }

        return response()->json(['message' => 'not authenticated']);
    }

    public function edit(Request $request)
    {
        if (Auth::guard('customer')->check()) {
            if ($request->has("email")) {
                return response()->json(["message" => "not allowed"]);
            }

            $user = Customer::find(Auth::guard('customer')->id());

            $user->update($request->all());
            return response()->json($user);
        }

        return response()->json(["message" => "not authenticated"]);
    }
}
