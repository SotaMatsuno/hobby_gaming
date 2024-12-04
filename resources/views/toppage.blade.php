{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.front')


{{-- front.blade.phpの@yield('title')に'トップページ'を埋め込む --}}
@section('title', 'トップページ')
@section('mainimage')
    <div class="mainimg"><img src="{{ secure_asset('img/main-image.png') }}"></div>
@endsection

{{-- front.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="bg-01">
        <ul class="mario-nav d-flex justify-content-center">
            <li><a href="{{ url('/games') }}" class="mario-nav-posts-create">ゲームソフト</a></li>
            <li><a href="{{ url('/posts') }}" class="mario-nav-posts-create">投稿一覧</a></li>
        </ul>
        <h1 class="letter">最新投稿</h1>
        <div class="gameList d-flex flex-wrap justify-content-around">
            @for($i = 0; $i < 2; $i++)
                <div class="gameCont">
                    <div class="d-flex justify-content-around">
                        <div class="gameContImg"><img src="{{ secure_asset('img/' . $posts[$i]->name . '.jpg') }}" alt="スーパーマリオ64"></div>
                        <div class="gameContText">
                            <div class="review-score-area">
                                <div class="d-flex">
                                    @for($a = 0; $a < $posts[$i]->rating; $a++)
                                            <div><img src="{{ secure_asset('img/icon-mariostar.png') }}"></div>
                                    @endfor
                                    @for($b = 0; $b < 5 - $posts[$i]->rating; $b++)
                                        <div><img src="{{ secure_asset('img/icon-gstar.png') }}"></div>
                                    @endfor
                                </div>
                            </div>
                            <h3>{{ $posts[$i]->title }}</h3>
                            <div class="post-text">
                                <p class="post-text-area" placeholder="本文" name="movie_review" id="movie_review_body" cols="40" rows="10">{{ $posts[$i]->body }}</p>
                            </div>
                            <h2>{{$posts[$i]->name}}</h2>
                            <p>{{$posts[$i]->nen}}</p>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
        <p class="mario-nav-posts-create"><a href="{{ url('/admin/gamingposts/create') }}">投稿作成へ</a></p>
    </div>
    <div class="bg-02">
        <h2 class="letter">ゲーム一覧</h2>
        <div class="gamebox d-flex">
            <a href="{{ url('/admin/gamingposts/create/スーパーマリオ64') }}" class="mariogame"><div><img src="{{ secure_asset('img/スーパーマリオ64.jpg') }}"></div></a>
            <a href="{{ url('/admin/gamingposts/create/スーパーマリオギャラクシー') }}" class="mariogame"><div><img src="{{ secure_asset('img/スーパーマリオギャラクシー.jpg') }}"></div></a>
            <a href="{{ url('/admin/gamingposts/create/スーパーマリオオデッセイ') }}" class="mariogame"><div><img src="{{ secure_asset('img/スーパーマリオオデッセイ.jpg') }}"></div></a>
        </div>
        <p class="mario-nav-gameList"><a href="{{ url('/games') }}">もっと見る</a></p>
    </div>
@endsection