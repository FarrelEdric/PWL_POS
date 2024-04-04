<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $breadcrum = (object) [
            'title' => 'selamat Datang',
            'list' => ['Home', 'Welcome']
        ];
        $activeMenu = 'dashboard';

        return view('Welcome', ['breadcrumb' => $breadcrum, 'activeMenu' => $activeMenu]);
    }
}
