<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function settingAdd()
    {
        return view('admin.gamingposts.settings');
    }
    
    public function add()
    {
        return view('admin.gamingposts.create');
    }
    
    public function create(Request $request)
    {
        // admin/news/createにリダイレクトする
        return redirect('admin/gaminposts/create');
    }
}
