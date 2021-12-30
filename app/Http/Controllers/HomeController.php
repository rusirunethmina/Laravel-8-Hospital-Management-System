<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;

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
        if (Auth::id()) {
            return redirect('home');
        } else {
            return view('user.home');
        }
    }
    public function about()
    {

        $doctor = Doctor::all();
        return view('user.pages.about',compact('doctor'));
    }
    public function doctor()
    {
        $dataaa = Doctor::all();
        return view('user.pages.doctor', compact('dataaa'));
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
