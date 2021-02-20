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
                @foreach ($data->goods as $good)
                <div class="item">
                    <a href="javascript:;">
                    <div class="figure-img"><img src="{{$good->pic}}"></div>
                    <h3 class="title">{{$good->name}}</h3>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        
        @endforeach
    </div>
</div>

@endsection