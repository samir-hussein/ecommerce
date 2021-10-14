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
}
