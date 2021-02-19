@extends('web.layouts.layout')
@section('title','首页')

@section('content')
<script>
    var app = @json($datas);
</script>
<div class="breadcrumb">
    <div class="container"><a href="/">首页</a>&nbsp;&nbsp;/&nbsp;&nbsp;<span>全部商品分类</span></div>
</div>
<div class="section-category">
    <div class="container">
        @foreach ($datas as $data)
            
        <div class="category-item">
            <div class="title">{{$data->name}}</div>
            <div class="category-list">
                <div class="item">
                    <a href="javascript:;">
                    <div class="figure-img"><img src="//cdn.cnbj1.fds.api.mi-img.com/mi-mall/5a260090e0e08770b0bd865845a4b4ab.jpg?thumb=1&w=200&h=200&f=webp&q=90"></div>
                    <h3 class="title">小米手机11</h3>
                    </a>
                </div>
                <div class="item">
                    <a href="javascript:;">
                    <div class="figure-img"><img src="//cdn.cnbj1.fds.api.mi-img.com/mi-mall/5a260090e0e08770b0bd865845a4b4ab.jpg?thumb=1&w=200&h=200&f=webp&q=90"></div>
                    <h3 class="title">小米手机11</h3>
                    </a>
                </div>
                <div class="item">
                    <a href="javascript:;">
                    <div class="figure-img"><img src="//cdn.cnbj1.fds.api.mi-img.com/mi-mall/5a260090e0e08770b0bd865845a4b4ab.jpg?thumb=1&w=200&h=200&f=webp&q=90"></div>
                    <h3 class="title">小米手机11</h3>
                    </a>
                </div>
                <div class="item">
                    <a href="javascript:;">
                    <div class="figure-img"><img src="//cdn.cnbj1.fds.api.mi-img.com/mi-mall/5a260090e0e08770b0bd865845a4b4ab.jpg?thumb=1&w=200&h=200&f=webp&q=90"></div>
                    <h3 class="title">小米手机11</h3>
                    </a>
                </div>
                <div class="item">
                    <a href="javascript:;">
                    <div class="figure-img"><img src="//cdn.cnbj1.fds.api.mi-img.com/mi-mall/5a260090e0e08770b0bd865845a4b4ab.jpg?thumb=1&w=200&h=200&f=webp&q=90"></div>
                    <h3 class="title">小米手机11</h3>
                    </a>
                </div>
            </div>
        </div>
        
        @endforeach
    </div>
</div>

@endsection