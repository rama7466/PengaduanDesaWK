<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {

        return view('home');
    }

    public function dashboard_masyarakat()
    {
        return view('masyarakat.dashboard');
    }
    public function dashboard_petugas()
    {
        return view('petugas.dashboard');
    }
}
