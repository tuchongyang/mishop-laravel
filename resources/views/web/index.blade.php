@extends('web.layouts.layout')
@section('title','首页')

@section('content')

<div class="container" style="height:460px;background:#eee;"></div>
<div class="section-product">
    <div class="container">
        <div class="category-item">
            <div class="title">手机</div>
            <div class="product-list" style="height:460px;background:#eee;"></div>
        </div>
        <div class="category-item">
            <div class="title">手机</div>
            <div class="product-list" style="height:460px;background:#eee;"></div>
        </div>
        <div class="category-item">
            <div class="title">手机</div>
            <div class="product-list" style="height:460px;background:#eee;"></div>
        </div>
        <div class="category-item">
            <div class="title">手机</div>
            <div class="product-list" style="height:460px;background:#eee;"></div>
        </div>
    </div>
</div>
商城首页
@if( $user)
    <h3>欢迎，{{ Auth::user()->username }}</h3>
@else
    未登陆
@endif

<div class=""></div>
@endsection