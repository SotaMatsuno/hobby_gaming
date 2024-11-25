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
        <script>
          (function(d) {
            var config = {
              kitId: 'tlt2bja',
              scriptTimeout: 3000,
              async: true
            },
            h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
          })(document);
        </script>

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
                    {{-- ログインしていなかったらログイン画面へのリンクを表示 --}}
                    @guest
                        <li><a href="{{ route('login') }}">ログイン</a></li>
                        <li><a id="logout" href="{{ route('register') }}">新規登録</a></li>
                    {{-- ログインしていたらユーザー名とログアウトボタンを表示 --}}
                    @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    ログアウト
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                    <li class="hamburger">
                        <!-- ハンバーガーメニュー部分 -->
                        <div class="nav">
                            <!-- ハンバーガーメニューの表示・非表示を切り替えるチェックボックス -->
                            <input id="drawer_input" class="drawer_hidden" type="checkbox">
                            <!-- ハンバーガーアイコン -->
                            <label for="drawer_input" class="drawer_open"><span></span></label>
                            <!-- メニュー -->
                            <nav class="nav_content">
                                <ul class="nav_list">
                                    <li class="nav_item"><a href="">トップページ</a></li>
                                    <li class="nav_item"><a href="">ゲーム一覧</a></li>
                                    <li class="nav_item"><a href="">投稿一覧</a></li>
                                    <li class="nav_item"><a href="">アカウント設定</a></li>
                                </ul>
                            </nav>
                        </div>
                    </li>
                </ul>
                <div class="logout-box">
                    <h4>ログアウト</h4>
                    <p>ログアウトしますか?</p>
                    <a class="dropdown-item" href="{{ route('logout') }}">ログアウト</a>
                </div>
            </nav>
            <div class="mainimage">
                @yield('mainimage')
            </div>
        </header>
        <main>
            {{-- コンテンツをここに入れるため、@yieldで空けておきます。 --}}
            @yield('content')
        </main>
        <footer>
            <div class="d-flex">
                <ul class="mario-nav d-flex">
                    <li><a href="{{ url('/games') }}" class="mario-nav-games">ゲームソフト</a></li>
                    <li><a href="{{ url('/posts') }}" class="mario-nav-posts">投稿一覧</a></li>
                </ul>
                <div><a href="#" class="up-btn"><img src="{{ secure_asset('img/up-btn.jpg') }}" alt="上へ戻るボタン"></a></div>
            </div>
        </footer>
    </body>
</html>