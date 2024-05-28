<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GamesController extends Controller
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
    
    public function settingAdd()
    {
        return view('admin.gamingposts.settings');
    }
}
