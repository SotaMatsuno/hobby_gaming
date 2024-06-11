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
        <ul class="mario-nav d-flex justify-content-center">
            <li><a href="#" class="mario-nav-games">ゲームソフト</a></li>
            <li><a href="#" class="mario-nav-posts">投稿一覧</a></li>
        </ul>
        <h1 class="letter">最新投稿</h1>
        <p class="mario-nav-posts-create"><a href="#">投稿作成へ</a></p>
    </div>
    <div class="bg-02">
        <h2 class="letter">Games</h2>
        <div class="gamebox d-flex">
            <a href="#" class="mariogame"><div><img src="{{ secure_asset('img/mario64.jpg') }}"></div></a>
            <a href="#" class="mariogame"><div><img src="{{ secure_asset('img/mariogalaxy.jpg') }}"></div></a>
            <a href="#" class="mariogame"><div><img src="{{ secure_asset('img/marioodyssey.jpg') }}"></div></a>
        </div>
        <p class="mario-nav-gameList"><a href="#">もっと見る</a></p>
    </div>
@endsection