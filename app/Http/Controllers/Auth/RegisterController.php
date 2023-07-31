<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;


class RegisterController extends Controller
{
    //
    public function index(){
        return view('authentication/register');
    }
    public function register(Request $request){
        $userInfo = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
            'password_conf' => ['required'],
        ]);
        $email = $request->email;
        $password = $request->password;
        $password_conf = $request->password_conf;
        if($password===$password_conf){
            $user = new User();
            $user->name = $email;
            $user->email=$email;
            $user->password = bcrypt($password);
            $user->save();
        }
        return redirect()->route('login');

        
    }
}
