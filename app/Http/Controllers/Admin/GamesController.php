<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MarioReview;

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
        // Validationを行う
        $this->validate($request, MarioReview::$rules);
        $review = new MarioReview;
        $form = $request->all();
        
        //フォームから送信されてきた_tokenを削除する
        unset($form['_token']);//csrfを消している
        
        //データベースに保存する
        $review->fill($form);
        $review->save();
        
        // 投稿一覧ページにリダイレクトする
        return redirect('posts');
        
    }
}
