{{-- layouts/front.blade.phpを読み込む --}}
@extends('layouts.front')

{{-- front.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'レビュー一覧')

{{-- front.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
<div class="container">
        <h1>レビュー一覧</h1>
        <div class="post d-flex">
            <div class="post-img d-flex">
                <img src="{{ secure_asset('img/mario64.jpg') }}" alt="スーパーマリオ64">
            </div>
            <div class="post-text">
                <div class="d-flex">
                    <div class="review-score-area">
                        <span class="rating__icon" aria-hidden="true"></span><span class="hidden--visually">星5つ</span>
                        <span class="rating__icon" aria-hidden="true"></span><span class="hidden--visually">星4つ</span>
                        <span class="rating__icon" aria-hidden="true"></span><span class="hidden--visually">星3つ</span>
                        <span class="rating__icon" aria-hidden="true"></span><span class="hidden--visually">星2つ</span>
                        <span class="rating__icon" aria-hidden="true"></span><span class="hidden--visually">星1つ</span>
                    </div>
                    <p>タイトル</p>
                </div>
                <div>
                    <textarea class="post-text-area" placeholder="本文" name="movie_review" id="movie_review_body" cols="40" rows="10">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</textarea>
                </div>
                <div class="d-flex">
                    <p>名前</p>
                    <p>投稿日</p>
                </div>
            </div>
        </div>
    </div>
@endsection