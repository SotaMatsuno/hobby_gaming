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
    
    public function index(Request $request)
    {
        $cond_title = $request->cond_title;
        if ($cond_title != '') {
            // 検索されたら検索結果を取得する
            $posts = MarioReviews::where('title', $cond_title)->get();
        } else {
            // それ以外はすべてのニュースを取得する
            $posts = MarioReviews::all();
        }
        return view('admin.gamingposts.index', ['posts' => $posts, 'cond_title' => $cond_title]);
    }
    
    public function edit(Request $request)
    {
        //Modelからデータを取得する
        $rev = MarioReview::find($request->id);
        if (empty($rev)) {
            abort(404);
        }
        return view('admin.gamingposts.edit', ['rev' => $rev]);
    }
    
    public function update(Request $request)
    {
        // Validationを行う
        $this->validate($request, MarioReview::$rules);
        $review = new MarioReview;
        $review->user_id = Auth::id();
        $form = $request->all();

        unset($form['_token']);

        // 該当するデータを上書きして保存する
        $review->fill($form);
        $review->save();

        return redirect('posts');
    }
}
