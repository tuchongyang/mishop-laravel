@extends('web.layouts.layout')
@section('title','首页')

@section('content')
<script>var app = @json($data)</script>
<div class="detail-map-nav">
    <div class="container">
        <div class="title">{{$data->name}}</div>
    </div>
</div>
<div class="product-detail">
    <div class="container">
        <div class="product-head">
            <div class="img">
                <img src="{{$data->pic}}">
            </div>
            <div class="det">
                <div class="tit">{{$data->name}}</div>
                <div class="desc">{{$data->description}}</div>
                <div class="price-info">{{$data->sale_price}} 元</div>
                <div class="line"></div>
                <div class="spec">
                    <div class="spec-tit">规格</div>
                    <div class="spec-tags">
                        <span class="item">4g + 64G</span>
                        <span class="item">4g + 64G</span>
                    </div>
                </div>
                <div class="selected-list">
                    <ul><li>Redmi 9A 4GB+64GB 砂石黑<span>599元</span></li></ul>
                    <div class="total-price">总计：599元</div>
                </div>
                <div class="btn-box"><div class="sale-btn"><a href="javascript:void(0);" class="btn btn-primary">加入购物车</a></div><div class="favorite-btn"></div></div>
                <div class="after-sale-info">
                    <span><a href="javascript:void(0);" class="support" stat_exposure="true"><i class="iconfont"></i><em>小米自营</em></a></span>
                    <span><a href="javascript:void(0);" title="由小米发货" class="support" stat_exposure="true"><i class="iconfont"></i><em>小米发货</em></a></span>
                    <span><a href="javascript:void(0);" class="support" stat_exposure="true"><i class="iconfont"></i><em>7天无理由退货</em></a></span>
                    <span><a href="javascript:void(0);" title="由小米发货商品(不含有品),单笔满99元免运费;
由小米有品发货的商品,免运费;
由第三方商家发货的商品，运费以实际结算金额为准;
特殊商品需要单独收取运费,具体以实际结算金额为准;优惠券等不能抵扣运费金额;如需无理由退货,用户将承担该商品的退货物流费用;" class="support" stat_exposure="true"><i class="iconfont"></i><em>运费说明</em></a></span>
                    <span><a href="javascript:void(0);" class="support" stat_exposure="true"><i class="iconfont"></i><em>企业信息</em></a></span>
                    <span><a href="https://m.mi.com/aftersale/policy/34" target="_blank" class="support" stat_exposure="true"><i class="iconfont"></i><em>售后服务政策</em></a></span>
                    <span><a href="https://s1.mi.com/m/faq/giving/index.html?project_id=44" target="_blank" class="support" stat_exposure="true"><i class="iconfont"></i><em>7天价格保护</em></a></span>
                </div>
            </div>
        </div>
        <div class="product-body">
            asdasdasdasdasd阿三大三大四的阿三大三大四的啊实打实的非官方十多个奥德赛发所大所大所
        </div>
    </div>
</div>

@endsection