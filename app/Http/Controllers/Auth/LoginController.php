<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

class LoginController extends Controller
{
    //
    public function index(){
        return view('authentication/login');
    }
    public function login(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->route('main');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
    public function logout(){
        // AUth::logout();
        session()->flash('toast_success', 'You have successfully logged out!');
    
        return redirect()->route('main');
    }
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
        // return Socialite::driver('google')->stateless()->redirectUrl(url('/auth/google/callback'))->state('your-unique-state')->redirect();

    }

    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->stateless()->user();
        $result = User::where('email', $user->email)->first();
        if($result){
            $credentials = [
                'email' => $user->email,
                'password' => '',
            ];
            if (Auth::attempt($credentials)) {
                return redirect()->route('main');
            }

        }
        else{
            $new_user = new User();
            $new_user->email=$user->email;
            $new_user->name = $user->name;
            $new_user->password ="";
            $new_user->save();
            $credentials = [
                'email' => $user->email,
                'password' => '',
            ];
            Auth::attempt($credentials);
            return redirect()->route('main');

        }
        // $user = Socialite::driver('google')->user();
        return redirect()->route('login');


        // Here, you can create or update the user in your database, and log the user in.
        // For example:
        // $user->getId();
        // $user->getName();
        // $user->getEmail();
    }

}
