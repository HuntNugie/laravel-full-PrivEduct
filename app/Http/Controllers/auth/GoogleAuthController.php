<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Socialite;

use function Illuminate\Support\now;

class GoogleAuthController extends Controller
{
    public function redirect()
    {
        // ini berfungsi untuk redirect ke halamn google nya
        return Socialite::driver("google")->redirect();
    }

    public function callback()
    {
        $googleUser = Socialite::driver("google")->user();

        // cek user apakah ada di dalam datbase
        $userLog = User::where("email", $googleUser->getEmail())->first();
        if (!$userLog) {
            $password = Str::random(16);
            $userLog = User::create([
                "email" => $googleUser->getEmail(),
                "name" => $googleUser->getName(),
                "email_verified_at" => now(),
                "password" => Hash::make($password)
            ]);
            $userLog->user_profile()->create([]);
        }

        Auth::login($userLog);
        return redirect()->route("dashboard");
    }
}
