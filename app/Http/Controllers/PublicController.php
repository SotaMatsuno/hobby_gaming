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
    
    public function gamePosts()
    {
        return view('posts');
    }
    
    //投稿したレビューを表示する
    //public function index(Request $request)
    //{
        //$cond_title = $request->cond_title;
        //if ($cond_title != '') {
            // 検索されたら検索結果を取得する
            //$posts = News::where('title', $cond_title)->get();
        //} else {
            // それ以外はすべてのレビューを取得する
            //$posts = News::all();
        //}
        //return view('admin.news.index', ['posts' => $posts, 'cond_title' => $cond_title]);
    //}
    
}
