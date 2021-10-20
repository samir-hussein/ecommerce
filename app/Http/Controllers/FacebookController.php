<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class FacebookController extends Controller
{
    public function facebookRedirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function loginWithFacebook()
    {
        try {
            $user = Socialite::driver('facebook')->stateless()->user();

            // Check Users Email If Already There
            $is_user = Customer::where('email', $user->getEmail())->first();
            if (!$is_user) {
                $saveUser = Customer::updateOrCreate([
                    'fb_id' => $user->getId(),
                ], [
                    'name' => $user->getName(),
                    'email' => $user->getEmail(),
                    'password' => Hash::make($user->getName() . '@' . $user->getId())
                ]);
            } else {
                $saveUser = Customer::where('email', $user->getEmail())->update([
                    'fb_id' => $user->getId(),
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
