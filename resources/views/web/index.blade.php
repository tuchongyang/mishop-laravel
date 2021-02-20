@extends('web.layouts.layout')
@section('title','首页')

@section('content')

<div class="container" style="height:460px;background:#eee;"></div>
<div class="section-product">
    <div class="container">
        @foreach ($datas as $data)
        <div class="category-item">
            <div class="title">{{$data->name}}</div>
            <div class="product-list">
                @foreach ($data->goods as $good)
                <div class="item">
                    <a href="/product/detail?id={{$good->id}}">
                    <div class="figure-img"><img src="{{$good->pic}}"></div>
                    <h3 class="title">{{$good->name}}</h3>
                    <p class="desc">{{$good->description}}</p>
                    <p class="price">{{$good->sale_price}}元起</p>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection