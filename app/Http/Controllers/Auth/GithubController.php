<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class GithubController extends Controller
{
   public function auth(){
       // envoyer la requete git
       return Socialite::driver('github')->redirect();
   }


   public function redirect(){
    // recevoir  la requete git
    $userInfos = Socialite::driver('github')->stateless()->user();

$user =User::firstOrCreate([
    'email'=>$userInfos->email],[
    'name'=>$userInfos->name,
    'passeword'=>Hash::make(Str::random(24))
    ]);

Auth::login($user);
return redirect()->route('home');
}
}
