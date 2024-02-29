<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
   


    public function index()
    {
        if (Auth::id()) {
            $usertype = Auth()->user()->usertype;

            if ($usertype == '0') {
                return view('home.homepage');
            }
             else if ($usertype == '1') {
                return view('admin.adminhome');
                
            }
             else {
                return redirect()->back();
            }
        }
    }

    public function homepage()
    {
        return view('home.homepage');
    }
}
