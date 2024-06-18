{{-- layouts/front.blade.phpを読み込む --}}
@extends('layouts.front')

{{-- front.blade.phpの@yield('title')に'設定'を埋め込む --}}
@section('title', '設定')

{{-- front.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
<div>
    <ul class="settingMenu">
        <li>
            <div><img src="{{ secure_asset('img/mario64.jpg') }}" alt="スーパーマリオ64"></div>
            <p>アカウント</p>
        </li>
        <li><a href="#" id="">ログアウト</a></li>
        <li><a href="#">メールアドレス変更</a></li>
        <li><a href="#">パスワード変更</a></li>
        <li><a href="#">アカウント削除</a></li>
    </ul>
</div>
@endsection