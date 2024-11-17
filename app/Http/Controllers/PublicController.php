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
        $games = [
            [
                "name" => "スーパーマリオ64",
                "nen" => "1996.06.23"
            ];
            [
            ]
                "マリオカート64","マリオパーティ2","マリオパーティ3","マリオパーティ4","マリオカートダブルダッシュ!!","マリオパーティ5",
        "マリオパーティ6","スーパーペーパーマリオ","スーパーマリオギャラクシー","スーパーマリオギャラクシー2","スーパーマリオ3Dワールド","マリオカート8デラックス",
        "スーパーマリオオデッセイ","進め！キノピオ隊長","スーパーマリオパーティ"];
        return view('games',['games' => $games]);
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
