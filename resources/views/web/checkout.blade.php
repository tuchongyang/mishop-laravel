@extends('web.layouts.layout')
@section('title','首页')

@section('content')
<div class="detail-map-nav">
    <div class="container">
        <div class="title">确认订单</div>
    </div>
</div>
<div class="checkout-section">
    <div class="container checkout-detail">
        <div class="detail-section address-detail">
            <div class="address-header"><span class="header-title">收货地址</span></div>
            <div class="address-list">
                <div class="address-item">
                    <div class="address-info"><div class="name">涂重阳<span style="color: rgb(176, 176, 176);"></span></div><div class="tel">187****3663</div><div class="address-con"><span>湖北</span><span>武汉市</span><span>江夏区</span><span>佛祖岭街道</span><span class="info">高新五路达尚城3-2-1602</span></div><div class="address-action"><span>修改</span></div></div>
                </div>
                <div class="address-item active">
                    <div class="address-info"><div class="name">涂重阳<span style="color: rgb(176, 176, 176);"></span></div><div class="tel">153****9300</div><div class="address-con"><span>湖北</span><span>武汉市</span><span>洪山区</span><span></span><span class="info">阜华大厦D座12B03</span></div><div class="address-action show-action"><span>修改</span><!----></div></div><div class="address-info-solt" style=""></div>
                </div>
                <div class="address-item">
                    <div class="add-desc"><i class="iconfont icon-plus"></i><span>添加新地址</span></div>
                </div>
            </div>
        </div>
        <div class="detail-section">
            <div class="detail-header">商品及优惠券</div>
            <div class="goods-list">
                <div class="good-item">
                    <div class="item-desc good-img"><img src="//cdn.cnbj0.fds.api.mi-img.com/b2c-shopapi-pms/pms_1596706248.29816692.jpg?thumb=1&amp;w=30&amp;h=30"></div>
                    <div class="item-desc good-name"><a href="//www.mi.com/buy?product_id=1184800015" target="_blank"><span>小米智能门锁 标准锁体 碳素黑</span></a></div>
                    <div class="item-desc price-box">
                        <div class="item-desc good-price">1299元 x 1</div>
                        <div class="item-desc good-status"></div>
                        <div class="item-desc good-total">1299元</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="detail-section">
            <div class="section-options section-shipment">
                <div class="options-desc options-header">
                    <div class="title">配送方式</div>
                </div>
                <div class="options-desc options-body">
                    <div class="options-list">
                        <div class="options-item selected">包邮</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="detail-section count-detail">
            <div class="section-bill">
                <div class="bill-item">
                    <div class="bill-name">商品件数：</div>
                    <div class="bill-money">4件</div>
                </div>
                <div class="bill-item">
                    <div class="bill-name">商品总价：</div>
                    <div class="bill-money">5497元</div>
                </div>
                <div class="bill-item">
                    <div class="bill-name">活动优惠：</div>
                    <div class="bill-money">-0元</div>
                </div>
                <div class="bill-item">
                    <div class="bill-name">优惠券抵扣：</div>
                    <div class="bill-money">-0元</div>
                </div>
                <div class="bill-item">
                    <div class="bill-name">运费：</div>
                    <div class="bill-money">0元</div>
                </div>
                <div class="bill-item total-price"><div class="bill-name">应付总额：</div><div class="bill-money"><em>5497</em>元</div></div></div>
        </div>
        <div class="detail-section footer-detail clearfix">
            <div class="handle-action">
                <div class="operating-button">
                    <a href="javascript:void(0);" class="btn btn-primary">去结算</a>
                    <a href="/cart" class="btn btn-return">返回购物车</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection