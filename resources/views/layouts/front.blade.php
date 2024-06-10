<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
         {{-- 後の章で説明します --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- 各ページごとにtitleタグを入れるために@yieldで空けておきます。 --}}
        <title>@yield('title')</title>

        <!-- Scripts -->
         {{-- Laravel標準で用意されているJavascriptを読み込みます --}}
        <script src="{{ secure_asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        {{-- Laravel標準で用意されているCSSを読み込みます --}}
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        {{-- この章の後半で作成するCSSを読み込みます --}}
        <link href="{{ secure_asset('css/style.css') }}" rel="stylesheet">
    </head>
    <body>
        <header>
            <nav class="headerNav d-flex justify-content-between">
                <p><a href="/" class="homeBtn">Home</a></p>
                <ul class="headerNav-right d-flex">
                    <li><a href="#">ログイン</a></li>
                    <li><a href="#">新規登録</a></li>
                </ul>
            </nav>
            <div class="mainimage">
                @yield('mainimage')
            </div>
        </header>
        <main class="py-4">
            {{-- コンテンツをここに入れるため、@yieldで空けておきます。 --}}
            @yield('content')
        </main>
        <footer>
            <div class="d-flex">
                <ul class="mario-nav d-flex">
                    <li><a href="#" class="mario-nav-games">ゲームソフト</a></li>
                    <li><a href="#" class="mario-nav-posts">投稿一覧</a></li>
                </ul>
                <div class="up-btn"><img src="" alt="上へ戻るボタン"></div>
            </div>
        </footer>
    </body>
</html>