<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function toppage()
    {
        return view('toppage');
    }
    
    public function gamesView()
    {
        return view('games');
    }
}
