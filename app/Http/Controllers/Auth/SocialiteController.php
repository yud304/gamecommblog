<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Hash;

class SocialiteController extends Controller
{
    //
    public function redirect(){
        return Socialite::driver('google')->with(['prompt' => 'select_account'])->redirect();
    }

    public function callback(){
        $SocialUser = Socialite::driver('google')->user();


    $registeredUser = User::where("google_id", $SocialUser->id)->first();
    if (!$registeredUser){
    $user = User::updateOrCreate([
        'google_id' => $SocialUser->id,
    ], [
        'name' => $SocialUser->name,
        'email' => $SocialUser->email,
        'password' => Hash::make('123'),
        'google_token' => $SocialUser->token,
        'google_refresh_token' => $SocialUser->refreshToken,
    ]);

    Auth::login($user);

    return redirect('/dashboard');
    }else{
        Auth::login($registeredUser);

    }
    return redirect('/dashboard');
}

public function logout()
{
    Auth::logout(); // Logout dari aplikasi Laravel
    return redirect('/'); // Redirect ke halaman login setelah logout
}

}
