<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDashboard extends Controller
{
    //
    public function index(){
        return view('Admin.Dashboard');
    }
    public function completed(){
        return view('Admin.completed');
    }
    public function upcoming(){
        return view('Admin.upcoming');
    }
    public function uncompleted(){
        return view('Admin.uncompleted');
    }
}
