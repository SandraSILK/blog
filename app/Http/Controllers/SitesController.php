<?php

namespace App\Http\Controllers;

use App\Post;
// use Illuminate\Http\Request;

class SitesController extends Controller
{
    public function index()
    {
        $posts = Post::orderByDesc('created_at')->take(3)->get();

        return view('welcome', [
            'posts' => $posts,
        ]);
    }

    public function contact()
    {
        dd('cześć!');
    }

    public function team()
    {
        return view('team.team');
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
