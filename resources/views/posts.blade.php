{{-- layouts/front.blade.phpを読み込む --}}
@extends('layouts.front')

{{-- front.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'レビュー一覧')

{{-- front.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
<div class="container">
    <h1>レビュー一覧</h1>
    @foreach($posts as $rev)
    <div class="post d-flex justify-content-around">
        <div class="post-img">
            <img src="{{ secure_asset('img/' . $rev->name . '.jpg') }}" alt="{{ $rev->name }}">
        </div>
        <div>
            <div class="review-score-area">
                <span class="rating__icon" aria-hidden="true"></span><span class="hidden--visually">{{ $rev->rating }}</span>
                <span class="rating__icon" aria-hidden="true"></span><span class="hidden--visually">星4つ</span>
                <span class="rating__icon" aria-hidden="true"></span><span class="hidden--visually">星3つ</span>
                <span class="rating__icon" aria-hidden="true"></span><span class="hidden--visually">星2つ</span>
                <span class="rating__icon" aria-hidden="true"></span><span class="hidden--visually">星1つ</span>
            </div>
            <p>{{ $rev->title }}</p>
            <div class="post-text">
                <textarea class="post-text-area" placeholder="本文" name="movie_review" id="movie_review_body" cols="40" rows="10">{{ $rev->body }}</textarea>
            </div>
            <div class="d-flex">
                <p>{{ Auth::user()->name }}</p>
                <p>{{ $rev->created_at->format('Y-m-d'); }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection