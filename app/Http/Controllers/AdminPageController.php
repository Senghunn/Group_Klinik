<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPageController extends Controller
{

    public function admin(){
        return view('layouts/admin');
    }

    public function dashboard(){
        $data['title'] = "Dashboard";
        return view('layouts/dashboard',$data);
    }
   

    public function table(){
        $data['title'] = "Table";
        return view('layouts/front_table',$data);
    }

    public function billing(){
        $data['title'] = "Billing";
        return view('layouts/front_billing',$data);
    }

    public function profile(){
        $data['title'] = "Profile";
        return view('layouts/front_profile',$data);
    }
    public function login(){
        return view('auth/login',);
    }
    public function register(){
        return view('auth/register');
    }
}
