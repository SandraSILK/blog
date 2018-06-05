<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class SitesController extends Controller
{
    public function contact()
    {
        dd('cześć!');
    }

    public function team()
    {
        dd('cześć!');
    }

    public function stable()
    {
        dd('cześć!');
    }

    public function riding()
    {
        return view('riding.riding');
    }

    public function club()
    {
        dd('cześć!');
    }

    public function transport()
    {
        dd('cześć!');
    }

    public function training()
    {
        dd('cześć!');
    }
}
