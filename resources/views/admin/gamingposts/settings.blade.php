{{-- layouts/front.blade.phpを読み込む --}}
@extends('layouts.front')

{{-- front.blade.phpの@yield('title')に'設定'を埋め込む --}}
@section('title', '設定')

{{-- front.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
<div class="bg-02-settings">
    <ul class="settingMenu">
        <li>
            <div><img src="{{ secure_asset('') }}" alt="画像"></div>
            <p>アカウント</p>
        </li>
        <li>
            <a id="lb"><div>ログアウト</div></a>
            <div class="popup">
                <h1>ログアウト</h1>
                <button class="btn-close"></button>
                <p>ログアウトしますか？</p>
                <button>ログアウト</button>
            </div>
        </li>
        <li>
            <a href="#">メールアドレス変更</a>
            <div>
                <p>メールアドレス変更</p>
                <button type="button" class="btn-close"></button>
                <form></form>
                <button>変更</button>    
            </div>
        </li>
        <li>
            <a href="#">パスワード変更</a>
            <div>
                <p>パスワード変更</p>
                <button type="button" class="btn-close"></button>
                <p>現在のパスワード</p>
                <form></form>
                <p>新しいパスワード</p>
                <form></form>
                <p>新しいパスワード（再入力）</p>
                <form></form>
            </div>
        </li>
        <li>
            <a href="#">アカウント削除</a>
            <div>
                <p>アカウント削除</p>
                <button type="button" class="btn-close"></button>
                <p>※データ復旧は不可となります</p>
                <p>現在のパスワード</p>
                <form></form>
                <p>データ復旧は不可と合意する</p>
            </div>
        </li>
    </ul>
</div>
@endsection
