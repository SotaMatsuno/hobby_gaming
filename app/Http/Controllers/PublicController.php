<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MarioReview;

class PublicController extends Controller
{
    
    public $games = [
        [
            "name" => "スーパーマリオ64",
            "nen" => "1996.06.23"
        ],
        [
            "name" => "マリオカート64",
            "nen" => "1996.12.14"
        ],
        [
            "name" => "マリオパーティ2",
            "nen" => "1999.12.17"
        ],
        [
            "name" => "マリオパーティ3",
            "nen" => "2000.12.07"
        ],
        [
            "name" => "マリオパーティ4",
            "nen" => "2002.11.08"
        ],
        [
            "name" => "マリオカートダブルダッシュ!!",
            "nen" => "2003.11.07"
        ],
        [
            "name" => "マリオパーティ5",
            "nen" => "2003.11.28"
        ],
        [
            "name" => "マリオパーティ6",
            "nen" => "2004.11.18"
        ],
        [
            "name" => "スーパーペーパーマリオ",
            "nen" => "2007.04.19"
        ],
        [
            "name" => "スーパーマリオギャラクシー",
            "nen" => "2007.11.01"
        ],
        [
            "name" => "スーパーマリオギャラクシー2",
            "nen" => "2010.05.27"
        ],
        [
            "name" => "スーパーマリオ3Dワールド",
            "nen" => "2013.11.21"
        ],
        [
            "name" => "マリオカート8デラックス",
            "nen" => "2017.04.28"
        ],
        [
            "name" => "スーパーマリオオデッセイ",
            "nen" => "2017.10.27"
        ],
        [
            "name" => "進め！キノピオ隊長",
            "nen" => "2018.07.13"
        ],
        [
            "name" => "スーパーマリオパーティ",
            "nen" => "2018.10.05"
        ],
    ];
    
    public function toppage()
    {
        $posts = MarioReview::take(2)->get();
        return view('toppage',['posts' => $posts]);
    }
    
    public function gamesView()
    {
        return view('games',['games' => $this->games]);
    }
    
    //投稿したレビューを表示する
    public function gamePosts(Request $request)
    {
        $cond_title = $request->cond_title;
        if ($cond_title != '') {
            // 検索されたら検索結果を取得する
            $posts = MarioReview::where('title', $cond_title)->get();
        } else {
            // それ以外はすべてのレビューを取得する
            $posts = MarioReview::all();
        }
        return view('posts', ['posts' => $posts, 'cond_title' => $cond_title]);
    }
}
