{{-- layouts/front.blade.phpを読み込む --}}
@extends('layouts.front')

{{-- front.blade.phpの@yield('title')に'ゲーム一覧'を埋め込む --}}
@section('title', 'ゲーム一覧')

{{-- front.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
<div id="bg_test">
    <ul>
        <li><a href="#">ゲームソフト</a></li>
        <li><a href="#">投稿一覧</a></li>
        <li><a href="#">キャラクター</a></li>
    </ul>
    
    <div class="gameList d-flex flex-wrap justify-content-around">
        <a href="#" class="gameCont">
            <div class="d-flex justify-content-around">
                <div class="gameContImg"><img src="{{ secure_asset('img/mario64.jpg') }}" alt="スーパーマリオ64"></div>
                <div class="gameContText">
                    <h2>スーパーマリオ64</h2>
                    <p>1996.06.23</p>
                    <p>レビューへ</p>
                </div>
            </div>
        </a>
        <a href="#" class="gameCont">
            <div class="d-flex justify-content-around">
                <div class="gameContImg"><img src="{{ secure_asset('img/mariokart64.jpg') }}" alt="マリオカート64"></div>
                <div class="gameContText">
                    <h2>マリオカート64</h2>
                    <p>1996.12.14</p>
                    <p>レビューへ</p>
                </div>
            </div>
        </a>
        
        <a href="#" class="gameCont">
            <div class="d-flex justify-content-around">
                <div class="gameContImg"><img src="{{ secure_asset('img/marioparty2.jpg') }}" alt="マリオパーティ2"></div>
                <div class="gameContText">
                    <h2>マリオパーティ2</h2>
                    <p>1999.12.17</p>
                    <p>レビューへ</p>
                </div>
            </div>
        </a>
        <a href="#" class="gameCont">
            <div class="d-flex justify-content-around">
                <div class="gameContImg"><img src="{{ secure_asset('img/marioparty3.jpg') }}" alt="マリオパーティ3"></div>
                <div class="gameContText">
                    <h2>マリオパーティ3</h2>
                    <p>2000.12.07</p>
                    <p>レビューへ</p>
                </div>
            </div>
        </a>
        
        <a href="#" class="gameCont">
            <div class="d-flex justify-content-around">
                <div class="gameContImg"><img src="{{ secure_asset('img/marioparty4.jpg') }}" alt="マリオパーティ4"></div>
                <div class="gameContText">
                    <h2>マリオパーティ4</h2>
                    <p>2002.11.08</p>
                    <p>レビューへ</p>
                </div>
            </div>
        </a>
        <a href="#" class="gameCont">
            <div class="d-flex justify-content-around">
                <div class="gameContImg"><img src="{{ secure_asset('img/doubledash.jpg') }}" alt="マリオカートダブルダッシュ!!"></div>
                <div class="gameContText">
                    <h2>マリオカートダブルダッシュ!!</h2>
                    <p>2003.11.07</p>
                    <p>レビューへ</p>
                </div>
            </div>
        </a>
        
        <a href="#" class="gameCont">
            <div class="d-flex justify-content-around">
                <div class="gameContImg"><img src="{{ secure_asset('img/marioparty5.jpg') }}" alt="マリオパーティ5"></div>
                <div class="gameContText">
                    <h2>マリオパーティ5</h2>
                    <p>2003.11.28</p>
                    <p>レビューへ</p>
                </div>
            </div>
        </a>
        <a href="#" class="gameCont">
            <div class="d-flex justify-content-around">
                <div class="gameContImg"><img src="{{ secure_asset('img/marioparty6.jpg') }}" alt="マリオパーティ6"></div>
                <div class="gameContText">
                    <h2>マリオパーティ6</h2>
                    <p>2004.11.18</p>
                    <p>レビューへ</p>
                </div>
            </div>
        </a>
        
        <a href="#" class="gameCont">
            <div class="d-flex justify-content-around">
                <div class="gameContImg"><img src="{{ secure_asset('img/superpapermario.jpg') }}" alt="スーパーペーパーマリオ"></div>
                <div class="gameContText">
                    <h2>スーパーペーパーマリオ</h2>
                    <p>2007.04.19</p>
                    <p>レビューへ</p>
                </div>
            </div>
        </a>
        <a href="#" class="gameCont">
            <div class="d-flex justify-content-around">
                <div class="gameContImg"><img src="{{ secure_asset('img/mariogalaxy.jpg') }}" alt="スーパーマリオギャラクシー"></div>
                <div class="gameContText">
                    <h2>スーパーマリオギャラクシー</h2>
                    <p>2007.11.01</p>
                    <p>レビューへ</p>
                </div>
            </div>
        </a>
        
        <a href="#" class="gameCont">
            <div class="d-flex justify-content-around">
                <div class="gameContImg"><img src="{{ secure_asset('img/mariogalaxy2.jpg') }}" alt="スーパーマリオギャラクシー2"></div>
                <div class="gameContText">
                    <h2>スーパーマリオギャラクシー2</h2>
                    <p>2010.05.27</p>
                    <p>レビューへ</p>
                </div>
            </div>
        </a>
        <a href="#" class="gameCont">
            <div class="d-flex justify-content-around">
                <div class="gameContImg"><img src="{{ secure_asset('img/mario3Dworld.jpg') }}" alt="スーパーマリオ3Dワールド"></div>
                <div class="gameContText">
                    <h2>スーパーマリオ3Dワールド</h2>
                    <p>2013.11.21</p>
                    <p>レビューへ</p>
                </div>
            </div>
        </a>
        
        <a href="#" class="gameCont">
            <div class="d-flex justify-content-around">
                <div class="gameContImg"><img src="{{ secure_asset('img/8deluxe.jpg') }}" alt="マリオカート8デラックス"></div>
                <div class="gameContText">
                    <h2>マリオカート8デラックス</h2>
                    <p>2017.04.28</p>
                    <p>レビューへ</p>
                </div>
            </div>
        </a>
        <a href="#" class="gameCont">
            <div class="d-flex justify-content-around">
                <div class="gameContImg"><img src="{{ secure_asset('img/marioodyssey.jpg') }}" alt="スーパーマリオオデッセイ"></div>
                <div class="gameContText">
                    <h2>スーパーマリオオデッセイ</h2>
                    <p>2017.10.27</p>
                    <p>レビューへ</p>
                </div>
            </div>
        </a>
        
        <a href="#" class="gameCont">
            <div class="d-flex justify-content-around">
                <div class="gameContImg"><img src="{{ secure_asset('img/captaintoad.png') }}" alt="進め！キノピオ隊長"></div>
                <div class="gameContText">
                    <h2>進め！キノピオ隊長</h2>
                    <p>2018.07.13</p>
                    <p>レビューへ</p>
                </div>
            </div>
        </a>
        <a href="#" class="gameCont">
            <div class="d-flex justify-content-around">
                <div class="gameContImg"><img src="{{ secure_asset('img/supermarioparty.jpg') }}" alt="スーパーマリオパーティ"></div>
                <div class="gameContText">
                    <h2>スーパーマリオパーティ</h2>
                    <p>2018.10.05</p>
                    <p>レビューへ</p>
                </div>
            </div>
        </a>
    </div>
</div>
    
@endsection