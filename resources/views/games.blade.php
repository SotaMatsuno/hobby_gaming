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
        <!--<a href="{{ route('admin.gamingposts.add', ['gamename' => 'マリオカート64']) }}" class="gameCont">-->
        <!--    <div class="d-flex justify-content-around">-->
        <!--        <div class="gameContImg"><img src="{{ secure_asset('img/マリオカート64.jpg') }}" alt="マリオカート64"></div>-->
        <!--        <div class="gameContText">-->
        <!--            <h2>マリオカート64</h2>-->
        <!--            <p>1996.12.14</p>-->
        <!--            <p>レビューへ</p>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</a>-->
        
        <!--<a href="#" class="gameCont">-->
        <!--    <div class="d-flex justify-content-around">-->
        <!--        <div class="gameContImg"><img src="{{ secure_asset('img/マリオパーティ2.jpg') }}" alt="マリオパーティ2"></div>-->
        <!--        <div class="gameContText">-->
        <!--            <h2>マリオパーティ2</h2>-->
        <!--            <p>1999.12.17</p>-->
        <!--            <p>レビューへ</p>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</a>-->
        <!--<a href="#" class="gameCont">-->
        <!--    <div class="d-flex justify-content-around">-->
        <!--        <div class="gameContImg"><img src="{{ secure_asset('img/マリオパーティ3.jpg') }}" alt="マリオパーティ3"></div>-->
        <!--        <div class="gameContText">-->
        <!--            <h2>マリオパーティ3</h2>-->
        <!--            <p>2000.12.07</p>-->
        <!--            <p>レビューへ</p>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</a>-->
        
        <!--<a href="#" class="gameCont">-->
        <!--    <div class="d-flex justify-content-around">-->
        <!--        <div class="gameContImg"><img src="{{ secure_asset('img/マリオパーティ4.jpg') }}" alt="マリオパーティ4"></div>-->
        <!--        <div class="gameContText">-->
        <!--            <h2>マリオパーティ4</h2>-->
        <!--            <p>2002.11.08</p>-->
        <!--            <p>レビューへ</p>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</a>-->
        <!--<a href="#" class="gameCont">-->
        <!--    <div class="d-flex justify-content-around">-->
        <!--        <div class="gameContImg"><img src="{{ secure_asset('img/マリオカートダブルダッシュ!!.jpg') }}" alt="マリオカートダブルダッシュ!!"></div>-->
        <!--        <div class="gameContText">-->
        <!--            <h2>マリオカートダブルダッシュ!!</h2>-->
        <!--            <p>2003.11.07</p>-->
        <!--            <p>レビューへ</p>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</a>-->
        
        <!--<a href="#" class="gameCont">-->
        <!--    <div class="d-flex justify-content-around">-->
        <!--        <div class="gameContImg"><img src="{{ secure_asset('img/マリオパーティ5.jpg') }}" alt="マリオパーティ5"></div>-->
        <!--        <div class="gameContText">-->
        <!--            <h2>マリオパーティ5</h2>-->
        <!--            <p>2003.11.28</p>-->
        <!--            <p>レビューへ</p>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</a>-->
        <!--<a href="#" class="gameCont">-->
        <!--    <div class="d-flex justify-content-around">-->
        <!--        <div class="gameContImg"><img src="{{ secure_asset('img/マリオパーティ6.jpg') }}" alt="マリオパーティ6"></div>-->
        <!--        <div class="gameContText">-->
        <!--            <h2>マリオパーティ6</h2>-->
        <!--            <p>2004.11.18</p>-->
        <!--            <p>レビューへ</p>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</a>-->
        
        <!--<a href="#" class="gameCont">-->
        <!--    <div class="d-flex justify-content-around">-->
        <!--        <div class="gameContImg"><img src="{{ secure_asset('img/スーパーペーパーマリオ.jpg') }}" alt="スーパーペーパーマリオ"></div>-->
        <!--        <div class="gameContText">-->
        <!--            <h2>スーパーペーパーマリオ</h2>-->
        <!--            <p>2007.04.19</p>-->
        <!--            <p>レビューへ</p>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</a>-->
        <!--<a href="#" class="gameCont">-->
        <!--    <div class="d-flex justify-content-around">-->
        <!--        <div class="gameContImg"><img src="{{ secure_asset('img/スーパーマリオギャラクシー.jpg') }}" alt="スーパーマリオギャラクシー"></div>-->
        <!--        <div class="gameContText">-->
        <!--            <h2>スーパーマリオギャラクシー</h2>-->
        <!--            <p>2007.11.01</p>-->
        <!--            <p>レビューへ</p>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</a>-->
        
        <!--<a href="#" class="gameCont">-->
        <!--    <div class="d-flex justify-content-around">-->
        <!--        <div class="gameContImg"><img src="{{ secure_asset('img/スーパーマリオギャラクシー2.jpg') }}" alt="スーパーマリオギャラクシー2"></div>-->
        <!--        <div class="gameContText">-->
        <!--            <h2>スーパーマリオギャラクシー2</h2>-->
        <!--            <p>2010.05.27</p>-->
        <!--            <p>レビューへ</p>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</a>-->
        <!--<a href="#" class="gameCont">-->
        <!--    <div class="d-flex justify-content-around">-->
        <!--        <div class="gameContImg"><img src="{{ secure_asset('img/スーパーマリオ3Dワールド.jpg') }}" alt="スーパーマリオ3Dワールド"></div>-->
        <!--        <div class="gameContText">-->
        <!--            <h2>スーパーマリオ3Dワールド</h2>-->
        <!--            <p>2013.11.21</p>-->
        <!--            <p>レビューへ</p>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</a>-->
        
        <!--<a href="#" class="gameCont">-->
        <!--    <div class="d-flex justify-content-around">-->
        <!--        <div class="gameContImg"><img src="{{ secure_asset('img/マリオカート8デラックス.jpg') }}" alt="マリオカート8デラックス"></div>-->
        <!--        <div class="gameContText">-->
        <!--            <h2>マリオカート8デラックス</h2>-->
        <!--            <p>2017.04.28</p>-->
        <!--            <p>レビューへ</p>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</a>-->
        <!--<a href="#" class="gameCont">-->
        <!--    <div class="d-flex justify-content-around">-->
        <!--        <div class="gameContImg"><img src="{{ secure_asset('img/スーパーマリオオデッセイ.jpg') }}" alt="スーパーマリオオデッセイ"></div>-->
        <!--        <div class="gameContText">-->
        <!--            <h2>スーパーマリオオデッセイ</h2>-->
        <!--            <p>2017.10.27</p>-->
        <!--            <p>レビューへ</p>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</a>-->
        
        <!--<a href="#" class="gameCont">-->
        <!--    <div class="d-flex justify-content-around">-->
        <!--        <div class="gameContImg"><img src="{{ secure_asset('img/進め！キノピオ隊長.png') }}" alt="進め！キノピオ隊長"></div>-->
        <!--        <div class="gameContText">-->
        <!--            <h2>進め！キノピオ隊長</h2>-->
        <!--            <p>2018.07.13</p>-->
        <!--            <p>レビューへ</p>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</a>-->
        <!--<a href="#" class="gameCont">-->
        <!--    <div class="d-flex justify-content-around">-->
        <!--        <div class="gameContImg"><img src="{{ secure_asset('img/スーパーマリオパーティ.jpg') }}" alt="スーパーマリオパーティ"></div>-->
        <!--        <div class="gameContText">-->
        <!--            <h2>スーパーマリオパーティ</h2>-->
        <!--            <p>2018.10.05</p>-->
        <!--            <p>レビューへ</p>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</a>-->