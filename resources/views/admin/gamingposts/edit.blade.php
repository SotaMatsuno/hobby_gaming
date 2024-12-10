{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.front')

{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'レビュー編集')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
<div class="bg-02-settings">
    <h1>レビュー編集</h1>
    <form action="{{ route('admin.gamingposts.update') }}" method="post" enctype="multipart/form-data">
        @if (count($errors) > 0)
            <ul>
                @foreach($errors->all() as $e)
                    <li>{{ $e }}</li>
                @endforeach
            </ul>
        @endif
        <div class="review-input">
            <div class="review-gamename d-flex">
                <div class="postimg"><img src="{{ secure_asset('img/'. $rev->name .'.jpg' ) }}" alt="{{ $rev->name }}"></div>
                <div>
                    <h3>{{ $rev->name }}</h3>
                    <!--<select name="name">-->
                    <!--    <option value="スーパーマリオ64">スーパーマリオ64</option>-->
                    <!--    <option value="マリオカート64">マリオカート64</option>-->
                    <!--    <option value="マリオパーティ2">マリオパーティ2</option>-->
                    <!--    <option value="マリオパーティ3">マリオパーティ3</option>-->
                    <!--    <option value="マリオパーティ4">マリオパーティ4</option>-->
                    <!--    <option value="マリオカートダブルダッシュ!!">マリオカートダブルダッシュ!!</option>-->
                    <!--    <option value="マリオパーティ5">マリオパーティ5</option>-->
                    <!--    <option value="マリオパーティ6">マリオパーティ6</option>-->
                    <!--    <option value="スーパーペーパーマリオ">スーパーペーパーマリオ</option>-->
                    <!--    <option value="スーパーマリオギャラクシー">スーパーマリオギャラクシー</option>-->
                    <!--    <option value="スーパーマリオギャラクシー2">スーパーマリオギャラクシー2</option>-->
                    <!--    <option value="スーパーマリオ3Dワールド">スーパーマリオ3Dワールド</option>-->
                    <!--    <option value="マリオカート8デラックス">マリオカート8デラックス</option>-->
                    <!--    <option value="スーパーマリオオデッセイ">スーパーマリオオデッセイ</option>-->
                    <!--    <option value="進め！キノピオ隊長">進め！キノピオ隊長</option>-->
                    <!--    <option value="スーパーマリオパーティ">スーパーマリオパーティ</option>-->
                    <!--</select>-->
                </div>
            </div>
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
                    <label class="rating__label" for="2-star" title="星2つ"><span class="rating__icon" aria-hidden="true"></span><span class="hidden--visually">星2つ</span></label>
                    <input class="rating__input hidden--visually" type="radio" id="1-star" name="rating" value="1" />
                    <label class="rating__label" for="1-star" title="星1つ"><span class="rating__icon" aria-hidden="true"></span><span class="hidden--visually">星1つ</span></label>
                </div>
            </div>
            <div class="review-title">
                <input class="input-text" value="{{ $rev->title }}" type="text" name="title" id="mario_review_subject">
            </div>
            <div class="review-txt-area mb-4">
                <div class="review-txt"><textarea class="text-area"  name="body" id="movie_review_body" cols="40" rows="10">{{ $rev->body }}</textarea></div> 
            </div>
            <input type="hidden" value="{{ $rev->name }}" name="name">
            @csrf
            <div class="review-btn-box">
                <input type="submit" value="投稿" class="review-btn">
            </div>
        </div>
    </form>
</div>
@endsection