<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use APP\Models\User;

use Illuminate\Support\Facades\Auth;

class Dashboardcontroller extends Controller
{
    public function index()
    {
        if(Auth::id()){
            $usertype=Auth()->user()->usertype;

            if($usertype=='user'){
                return view('homepage');
            }
        }

        else if($usertype=='admin'){
            return view('dashboard');
        }
        else{
            return redirect()->back();
        }
    }
}


