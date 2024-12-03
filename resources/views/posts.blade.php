{{-- layouts/front.blade.phpを読み込む --}}
@extends('layouts.front')

{{-- front.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'レビュー一覧')

{{-- front.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
<div class="container">
    <h1>レビュー一覧</h1>
    <div class="d-flex flex-wrap justify-content-between">
        @foreach($posts as $rev)
            <div class="post d-flex justify-content-around">
                <div class="post-img">
                    <img src="{{ secure_asset('img/' . $rev->name . '.jpg') }}" alt="{{ $rev->name }}">
                </div>
                <div>
                    <div class="review-score-area">
                        <div class="d-flex">
                            @for($a = 0; $a < $rev->rating; $a++)
                                    <div><img src="{{ secure_asset('img/icon-mariostar.png') }}"></div>
                            @endfor
                            @for($i = 0; $i < 5 - $rev->rating; $i++)
                                <div><img src="{{ secure_asset('img/icon-gstar.png') }}"></div>
                            @endfor
                        </div>
                    </div>
                    <h3>{{ $rev->title }}</h3>
                    <div class="post-text">
                        <p class="post-text-area" placeholder="本文" name="movie_review" id="movie_review_body" cols="40" rows="10">{{ $rev->body }}</p>
                    </div>
                    <div>
                        <p>{{$rev->user->name}}</p>
                        <p>{{ $rev->created_at->format('Y-m-d'); }}</p>
                    </div>
                    <a href="{{ url('admin/gamingposts/edit') }}" class="mario-nav-posts-create">編集する</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection