<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function redirect()
    {
        if (Auth::id()) {
            if (Auth::user()->user_type == '0') {
                return view('user.home');
            } else {
                return view('admin.inc.home');
            }
        } else {
            return redirect()->back();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function index()
    {
        return view('user.home');
    }
    public function about()
    {
        return view('user.pages.about');
    }
    public function doctor()
    {
        return view('user.pages.doctor');
    }
    public function contact()
    {
        return view('user.pages.contact');
    }
    public function blogDetails()
    {
        return view('user.pages.blog_details');
    }
}
