<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPanel extends Controller
{
    //
    public function index(){
        $page = "main";
        return view('Admin.main', compact('page'));
    }
    public function completed(){
        $page = "completed";
        return view('Admin.main', compact('page'));
    }
    public function upcoming(){
        $page = "upcoming";
        return view('Admin.main', compact('page'));
    }
    public function uncompleted(){
        $page = "uncompleted";
        return view('Admin.main', compact('page'));
    }
    public function settings(){
        $page = "settings";
        return view('Admin.main', compact('page'));
    }
    public function chat(){
        $page = "chat";
        return view('Admin.main', compact('page'));
    }
}
