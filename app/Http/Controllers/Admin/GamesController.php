<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function add()
    {
        return view('admin.gamingposts.create');
    }
    
    public function create(Request $request)
    {
        // admin/gamingposts/createにリダイレクトする
        return redirect('admin/gamingposts/create');
    }
}