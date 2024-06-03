<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $user = Auth::user();
        return view('admin.dashboard', compact('user'));
    }
}
