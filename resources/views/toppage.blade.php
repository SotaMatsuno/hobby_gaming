{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.front')


{{-- front.blade.phpの@yield('title')に'トップページ'を埋め込む --}}
@section('title', 'トップページ')

{{-- front.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <ul>
        <li><a href="#">ゲームソフト</a></li>
        <li><a href="#">投稿一覧</a></li>
        <li><a href="#">キャラクター</a></li>
    </ul>
    
    <h1>最新投稿</h1>
    
    <div class="main">
        <div class="container">
            <div class="left-contents">
                <div class="card-contents">
                    <h3 class="text-title"></h3>
                </div>    
            </div>
            <div class="right-contents">
                <div class="card-contents">
                    <h4 class="text-title"></h4>
                </div>
            </div>
        </div>    
    </div>
    
    <ul>
        <li><a href="#">投稿ページへ</a></li>
    </ul>
    
    <h5>Games</h5>
    
    <div class="main">
        <div class="container">
            <div class="main-contents">
                <div class="game-image"><img src=""></div>
                <p class="game-name">スーパーマリオ64</p>    
            </div>
            <div class="right-contents">
                <div class="game-image"><img src=""></div>
                <p class="game-name">スーパーマリオ64</p>    
            </div>
            <div class="left-contents">
                <div class="game-image"><img src=""></div>
                <p class="game-name">スーパーマリオ64</p>    
            </div>
        </div>
    </div>
    
    <p><a href="#">もっと見る</a></p>
    
    <div class="Mario-image"><img src="" alt="マリオの画像"></div>
    
@endsection