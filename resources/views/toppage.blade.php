{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.front')


{{-- front.blade.phpの@yield('title')に'トップページ'を埋め込む --}}
@section('title', 'トップページ')
@section('mainimage')
    <div><img src="{{ secure_asset('img/main-image.png') }}"></div>
@endsection

{{-- front.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="bg-01">
        <ul class="">
            <li><a href="#">ゲームソフト</a></li>
            <li><a href="#">投稿一覧</a></li>
        </ul>
        <h1>最新投稿</h1>
        <div class="main">
            <div class="container">
                <div class="left-contents">
                    <div class="card-contents">
                        <h2 class="text-title"></h3>
                    </div>    
                </div>
                <div class="right-contents">
                    <div class="card-contents">
                        <h2 class="text-title"></h4>
                    </div>
                </div>
            </div>    
        </div>
        <p><a href="#">投稿作成へ</a></p>
    </div>
    <div class="bg-02">
        <h2>Games</h2>
        <div class="main">
            <div class="container">
                <div class="main-contents">
                    <div class="game-image"><img src="{{ secure_asset('img/mario64.jpg') }}"></div>
                    <p class="game-name">スーパーマリオ64</p>    
                </div>
                <div class="right-contents">
                    <div class="game-image"><img src="{{ secure_asset('img/mariogalaxy.jpg') }}"></div>
                    <p class="game-name">スーパーマリオギャラクシー</p>    
                </div>
                <div class="left-contents">
                    <div class="game-image"><img src="{{ secure_asset('img/marioodyssey.jpg') }}"></div>
                    <p class="game-name">マリオオデッセイ</p>    
                </div>
            </div>
        </div>
        <p><a href="#">もっと見る</a></p>
    </div>
@endsection