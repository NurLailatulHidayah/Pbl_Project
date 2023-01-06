<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class AdminController extends Controller
{
    public function logout(){
        Auth::logout();
        return Redirect()->route('login');
    }

    public function dashboard(){
        // Auth::dashboard();
        return View('admin.index');
    }
}
