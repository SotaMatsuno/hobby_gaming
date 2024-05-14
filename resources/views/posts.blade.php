{{-- layouts/front.blade.phpを読み込む --}}
@extends('layouts.front')

{{-- front.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'トップページ')

{{-- front.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
<h1>新着</h1>
@endsection