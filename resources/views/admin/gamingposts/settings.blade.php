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
            <p class="text-center">アカウント</p>
        </li>
        <li>
            <a id="lb" class="settingMenuButton">ログアウト</a>
            <div class="popup">
                <h2>ログアウト</h2>
                <button class="btn-close-logout btn-close"></button>
                <p>ログアウトしますか？</p>
                <button><a class="dropdown-item" href="{{ route('logout') }}">ログアウト</a></button>
            </div>
        </li>
        <li>
            <a id="eb" class="settingMenuButton">メールアドレス変更</a>
            <div class="popupEmail">
                <h2>メールアドレス変更</h2>
                <label for="e-mail">Email</label>
                <input type="text" id="e-mail" placeholder="Enter email">
                <button class="btn-close-email btn-close"></button>
                <button>変更</button>    
            </div>
        </li>
        <li>
            <a id="pb" class="settingMenuButton">パスワード変更</a>
            <div class="popupPassword">
                <h2>パスワード変更</h2>
                <button type="button" class="btn-close-password btn-close"></button>
                <label for="password">現在のパスワード</label>
                <div><input type="password" id="password" placeholder="Enter password"></div>
                <label for="password">新しいパスワード</label>
                <div><input type="password" id="password" placeholder="Enter password"></div>
                <label for="password">新しいパスワード（再入力）</label>
                <div><input type="password" id="password" placeholder="Enter password"></div>
                <button>変更</button>
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
