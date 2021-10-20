<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function loginWithGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callbackFromGoogle()
    {
        try {
            $user = Socialite::driver('google')->stateless()->user();

            // Check Users Email If Already There
            $is_user = Customer::where('email', $user->getEmail())->first();
            if (!$is_user) {
                $saveUser = Customer::updateOrCreate([
                    'google_id' => $user->getId(),
                ], [
                    'name' => $user->getName(),
                    'email' => $user->getEmail(),
                    'password' => Hash::make($user->getName() . '@' . $user->getId())
                ]);
            } else {
                $saveUser = Customer::where('email', $user->getEmail())->update([
                    'google_id' => $user->getId(),
                ]);
                $saveUser = Customer::where('email', $user->getEmail())->first();
            }


            Auth::guard('customer')->loginUsingId($saveUser->id);

            return redirect()->intended();
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
