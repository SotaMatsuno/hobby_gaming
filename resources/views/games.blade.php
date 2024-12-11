{{-- layouts/front.blade.phpを読み込む --}}
@extends('layouts.front')

{{-- front.blade.phpの@yield('title')に'ゲーム一覧'を埋め込む --}}
@section('title', 'ゲーム一覧')

{{-- front.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
<div id="bg_test">
    <div class="gameList d-flex flex-wrap justify-content-around">
        @foreach($games as $game)
            <a href="{{ route('admin.gamingposts.add', ['gamename' => $game["name"]]) }}" class="gameCont">
                <div class="d-flex justify-content-around">
                    <div class="gameContImg"><img src="{{ secure_asset('img/' . $game["name"] . '.jpg') }}" alt="スーパーマリオ64"></div>
                    <div class="gameContText">
                        <h2>{{$game["name"]}}</h2>
                        <p>{{$game["nen"]}}</p>
                        <p>レビューへ</p>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>
@endsection