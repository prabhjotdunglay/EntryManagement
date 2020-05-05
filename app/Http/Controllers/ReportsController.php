<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function index(){

        $user_id = User
        $user = User::find('$user_id');
        return view('allvisitors')->with('visitor', $user->name);
}

    public function department(){

        return view('bydepartment');

    }

    public function employee(){

        return view('byemployee');
    }
}
