{{-- layouts/front.blade.phpを読み込む --}}
@extends('layouts.front')

{{-- front.blade.phpの@yield('title')に'ゲーム一覧'を埋め込む --}}
@section('title', 'ゲーム一覧')

{{-- front.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <ul>
        <li><a href="#">ゲームソフト</a></li>
        <li><a href="#">投稿一覧</a></li>
        <li><a href="#">キャラクター</a></li>
    </ul>
    
    <div class="d-flex">
        <a href="#" class="btn">
            <div class="d-flex">
                <div><img src="{{ secure_asset('img/mario64.jpg') }}" alt="スーパーマリオ64"></div>
                <div>
                    <h3>スーパーマリオ64</h3>
                    <p>1996.6.23</p>
                    <p>レビューへ</p>
                </div>
            </div>
        </a>
        <a href="#" class="btn">
            <div>
                <div><img src="{{ secure_asset('img/mariokart64.jpg') }}" alt="マリオカート64"></div>
                <div>
                    <h3>マリオカート64</h3>
                    <p>1996.12.14</p>
                    <p>レビューへ</p>
                </div>
            </div>
        </a>
        
        <a href="#" class="btn">マリオパーティ2</a>
        <a href="#" class="btn">マリオパーティ3</a>
        <a href="#" class="btn">マリオパーティ4</a>
        <a href="#" class="btn">マリオカートダブルダッシュ!!</a>
        <a href="#" class="btn">マリオパーティ5</a>
        <a href="#" class="btn">マリオパーティ6</a>
        <a href="#" class="btn">スーパーペーパーマリオ</a>
        <a href="#" class="btn">スーパーマリオギャラクシー</a>
        <a href="#" class="btn">スーパーマリオギャラクシー2</a>
        <a href="#" class="btn">スーパーマリオ3Dワールド</a>
        <a href="#" class="btn">マリオカート8デラックス</a>
        <a href="#" class="btn">スーパーマリオオデッセイ</a>
        <a href="#" class="btn">進め！キノピオ隊長</a>
        <a href="#" class="btn">スーパーマリオパーティ</a>
    </div>
    
@endsection