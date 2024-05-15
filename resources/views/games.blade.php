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
                    <h1>スーパーマリオ64</h1>
                    <p>1996.06.23</p>
                    <p>レビューへ</p>
                </div>
            </div>
        </a>
        <a href="#" class="btn">
            <div>
                <div><img src="{{ secure_asset('img/mariokart64.jpg') }}" alt="マリオカート64"></div>
                <div>
                    <h2>マリオカート64</h2>
                    <p>1996.12.14</p>
                    <p>レビューへ</p>
                </div>
            </div>
        </a>
        
        <a href="#" class="btn">
            <div class="d-flex">
                <div><img src="{{ secure_asset('img/marioparty2.jpg') }}" alt="マリオパーティ2"></div>
                <div>
                    <h3>マリオパーティ2</h3>
                    <p>1999.12.17</p>
                    <p>レビューへ</p>
                </div>
            </div>
        </a>
        <a href="#" class="btn">
            <div>
                <div><img src="{{ secure_asset('img/marioparty3.jpg') }}" alt="マリオパーティ3"></div>
                <div>
                    <h4>マリオパーティ3</h4>
                    <p>2000.12.07</p>
                    <p>レビューへ</p>
                </div>
            </div>
        </a>
        
        <a href="#" class="btn">
            <div class="d-flex">
                <div><img src="{{ secure_asset('img/marioparty4.jpg') }}" alt="マリオパーティ4"></div>
                <div>
                    <h5>マリオパーティ4</h5>
                    <p>2002.11.08</p>
                    <p>レビューへ</p>
                </div>
            </div>
        </a>
        <a href="#" class="btn">
            <div>
                <div><img src="{{ secure_asset('img/doubledash.jpg') }}" alt="マリオカートダブルダッシュ!!"></div>
                <div>
                    <h6>マリオカートダブルダッシュ!!</h6>
                    <p>2003.11.07</p>
                    <p>レビューへ</p>
                </div>
            </div>
        </a>
        
        <a href="#" class="btn">
            <div class="d-flex">
                <div><img src="{{ secure_asset('img/marioparty5.jpg') }}" alt="マリオパーティ5"></div>
                <div>
                    <h7>マリオパーティ5</h7>
                    <p>2003.11.28</p>
                    <p>レビューへ</p>
                </div>
            </div>
        </a>
        <a href="#" class="btn">
            <div>
                <div><img src="{{ secure_asset('img/marioparty6.jpg') }}" alt="マリオパーティ6"></div>
                <div>
                    <h8>マリオパーティ6</h8>
                    <p>2004.11.18</p>
                    <p>レビューへ</p>
                </div>
            </div>
        </a>
        
        <a href="#" class="btn">
            <div class="d-flex">
                <div><img src="{{ secure_asset('img/superpapermario.jpg') }}" alt="スーパーペーパーマリオ"></div>
                <div>
                    <h9>スーパーペーパーマリオ</h9>
                    <p>2007.04.19</p>
                    <p>レビューへ</p>
                </div>
            </div>
        </a>
        <a href="#" class="btn">
            <div>
                <div><img src="{{ secure_asset('img/mariogalaxy.jpg') }}" alt="スーパーマリオギャラクシー"></div>
                <div>
                    <h10>スーパーマリオギャラクシー</h10>
                    <p>2007.11.01</p>
                    <p>レビューへ</p>
                </div>
            </div>
        </a>
        
        <a href="#" class="btn">
            <div class="d-flex">
                <div><img src="{{ secure_asset('img/mariogalaxy2.jpg') }}" alt="スーパーマリオギャラクシー2"></div>
                <div>
                    <h11>スーパーマリオギャラクシー2</h11>
                    <p>2010.05.27</p>
                    <p>レビューへ</p>
                </div>
            </div>
        </a>
        <a href="#" class="btn">
            <div>
                <div><img src="{{ secure_asset('img/mario3Dworld.jpg') }}" alt="スーパーマリオ3Dワールド"></div>
                <div>
                    <h12>スーパーマリオ3Dワールド</h12>
                    <p>2013.11.21</p>
                    <p>レビューへ</p>
                </div>
            </div>
        </a>
        
        <a href="#" class="btn">
            <div class="d-flex">
                <div><img src="{{ secure_asset('img/8deluxe.jpg') }}" alt="マリオカート8デラックス"></div>
                <div>
                    <h13>マリオカート8デラックス</h13>
                    <p>2017.04.28</p>
                    <p>レビューへ</p>
                </div>
            </div>
        </a>
        <a href="#" class="btn">
            <div>
                <div><img src="{{ secure_asset('img/marioodyssey.jpg') }}" alt="スーパーマリオオデッセイ"></div>
                <div>
                    <h14>スーパーマリオオデッセイ</h14>
                    <p>2017.10.27</p>
                    <p>レビューへ</p>
                </div>
            </div>
        </a>
        
        <a href="#" class="btn">
            <div class="d-flex">
                <div><img src="{{ secure_asset('img/captaintoad.jpg') }}" alt="進め！キノピオ隊長"></div>
                <div>
                    <h15>進め！キノピオ隊長</h15>
                    <p>2018.07.13</p>
                    <p>レビューへ</p>
                </div>
            </div>
        </a>
        <a href="#" class="btn">
            <div>
                <div><img src="{{ secure_asset('img/supermarioparty.jpg') }}" alt="スーパーマリオパーティ"></div>
                <div>
                    <h16>スーパーマリオパーティ</h16>
                    <p>2018.10.05</p>
                    <p>レビューへ</p>
                </div>
            </div>
        </a>
    </div>
    
@endsection