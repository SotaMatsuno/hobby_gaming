{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.front')

{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', '新規作成')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
<div class="bg-02-settings">
    <h2>マリオゲームレビュー一覧新着順</h2>
    <form action="{{ route('admin.gamingposts.create') }}" method="post" enctype="multipart/form-data">
        @if (count($errors) > 0)
            <ul>
                @foreach($errors->all() as $e)
                    <li>{{ $e }}</li>
                @endforeach
            </ul>
        @endif
        <div class="review-input">
            <select name="name">
                <option value="マリオ64">マリオ64</option>
                <option value="マリオカート64">マリオカート64</option>
            </select>
            <div class="d-flex align-items-center">
                <p>評価</p>
                <div class="review-score-area">
                    <input class="rating__input hidden--visually" type="radio" id="5-star" name="rating" value="5" required />
                    <label class="rating__label" for="5-star" title="星5つ"><span class="rating__icon" aria-hidden="true"></span><span class="hidden--visually">星5つ</span></label>
                    <input class="rating__input hidden--visually" type="radio" id="4-star" name="rating" value="4" />
                    <label class="rating__label" for="4-star" title="星4つ"><span class="rating__icon" aria-hidden="true"></span><span class="hidden--visually">星4つ</span></label>
                    <input class="rating__input hidden--visually" type="radio" id="3-star" name="rating" value="3" />
                    <label class="rating__label" for="3-star" title="星3つ"><span class="rating__icon" aria-hidden="true"></span><span class="hidden--visually">星3つ</span></label>
                    <input class="rating__input hidden--visually" type="radio" id="2-star" name="rating" value="2" />
                    <label class="rating__label" for="2-star" title="星2つ"><span class="rating__icon" aria-hidden="true"></span><span class="hidden--visually">星2つ</span></label>                    <input class="rating__input hidden--visually" type="radio" id="1-star" name="rating" value="1" />
                    <label class="rating__label" for="1-star" title="星1つ"><span class="rating__icon" aria-hidden="true"></span><span class="hidden--visually">星1つ</span></label>
                </div>
            </div>
            <div class="review-title">
                <input class="input-text" placeholder="レビュータイトル" type="text" name="title" id="mario_review_subject">
            </div>
            <div class="review-txt-area mb-4">
                <div class="review-txt"><textarea class="text-area" placeholder="本文" name="body" id="movie_review_body" cols="40" rows="10"></textarea></div> 
            </div>
            @csrf
            <div class="review-btn-box">
                <input type="submit" value="投稿" class="review-btn">
            </div>
        </div>
    </form>
</div>
@endsection