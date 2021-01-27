@extends('web.layouts.layout')
@section('title','首页')

@section('content')

<div class="container" style="height:460px;background:#eee;"></div>
<div class="section-product">
    <div class="container">
        <div class="category-item">
            <div class="title">手机</div>
            <div class="product-list" style="height:460px;background:#eee;">
                <div class="item">
                    <a href="javascript:;">
                    <div class="figure-img"><img src="//cdn.cnbj1.fds.api.mi-img.com/mi-mall/5a260090e0e08770b0bd865845a4b4ab.jpg?thumb=1&w=200&h=200&f=webp&q=90"></div>
                    <h3 class="title">小米手机11</h3>
                    <p class="desc">骁龙888 | 2K四曲面屏</p>
                    <p class="price">3999元起</p>
                    </a>
                </div>
                <div class="item">
                    <a href="javascript:;">
                    <div class="figure-img"><img src="//cdn.cnbj1.fds.api.mi-img.com/mi-mall/5a260090e0e08770b0bd865845a4b4ab.jpg?thumb=1&w=200&h=200&f=webp&q=90"></div>
                    <h3 class="title">小米手机11</h3>
                    <p class="desc">骁龙888 | 2K四曲面屏</p>
                    <p class="price">3999元起</p>
                    </a>
                </div>
                <div class="item">
                    <a href="javascript:;">
                    <div class="figure-img"><img src="//cdn.cnbj1.fds.api.mi-img.com/mi-mall/5a260090e0e08770b0bd865845a4b4ab.jpg?thumb=1&w=200&h=200&f=webp&q=90"></div>
                    <h3 class="title">小米手机11</h3>
                    <p class="desc">骁龙888 | 2K四曲面屏</p>
                    <p class="price">3999元起</p>
                    </a>
                </div>
                <div class="item">
                    <a href="javascript:;">
                    <div class="figure-img"><img src="//cdn.cnbj1.fds.api.mi-img.com/mi-mall/5a260090e0e08770b0bd865845a4b4ab.jpg?thumb=1&w=200&h=200&f=webp&q=90"></div>
                    <h3 class="title">小米手机11</h3>
                    <p class="desc">骁龙888 | 2K四曲面屏</p>
                    <p class="price">3999元起</p>
                    </a>
                </div>
            </div>
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