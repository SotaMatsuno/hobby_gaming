<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MarioReview;
use Auth;

class GamesController extends Controller
{
    public function settingAdd()
    {
        return view('admin.gamingposts.settings');
    }
    
    public function add($gamename)
    {
        if (empty($gamename)) {
            abort(404);
        }
        return view('admin.gamingposts.create' , ['gamename' => $gamename]);
    }
    
    public function create(Request $request)
    {
        // Validationを行う
        $this->validate($request, MarioReview::$rules);
        $review = new MarioReview;
        $review->user_id = Auth::id();
        $form = $request->all();
        
        //フォームから送信されてきた_tokenを削除する
        unset($form['_token']);//csrfを消している
        
        //データベースに保存する
        $review->fill($form);
        $review->save();
        
        // 投稿一覧ページにリダイレクトする
        return redirect('posts');
    }
    
    public function _404(){
        abort(404);
    }
    
    public function edit(Request $request)
    {
        // News Modelからデータを取得する
        $rev = MarioReview::find($request->id);
        if (empty($rev)) {
            abort(404);
        }
        return view('admin.gamingposts.edit', ['rev' => $rev]);
    }
}
