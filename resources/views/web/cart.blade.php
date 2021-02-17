@extends('web.layouts.layout')
@section('title','首页')

@section('content')
<div class="detail-map-nav">
    <div class="container">
        <div class="title">购物车</div>
    </div>
</div>
<div class="cart-goods-section">
    <div class="container">
        <div class="cart-goods-list">
            <div class="list-head clearfix">
                <div class="col col-check"><i class="iconfont icon-checkbox icon-checkbox-selected">√</i>全选</div>
                <div class="col col-img">&nbsp;</div>
                <div class="col col-name">商品名称</div>
                <div class="col col-price">单价</div>
                <div class="col col-num">数量</div>
                <div class="col col-total">小计</div>
                <div class="col col-action">操作</div>
            </div>
            <div class="list-body">
                <div class="list-item">
                    <div class="item-box">
                        <div class="item-table">
                            <div class="item-row clearfix">
                                <div class="col col-check"><i class="iconfont icon-checkbox icon-checkbox-selected">√</i></div>
                                <div class="col col-img"><a href="javascript:void(0)"><img alt="" src="//cdn.cnbj0.fds.api.mi-img.com/b2c-shopapi-pms/pms_1596706248.29816692.jpg?thumb=1&amp;w=80&amp;h=80" width="80" height="80"></a></div>
                                <div class="col col-name"><div class="tags"></div><div class="tags"></div><h3 class="name"><a href="javascript:void(0)">小米智能门锁 标准锁体 碳素黑</a></h3></div>
                                <div class="col col-price">1299元<p class="pre-info"></p></div>
                                <div class="col col-num"><div class="change-goods-num clearfix"><a href="javascript:void(0)"><i class="iconfont icon-move"></i></a><input type="text" autocomplete="off" class="goods-num" value="1"><a href="javascript:void(0)"><i class="iconfont icon-plus"></i></a></div></div>
                                <div class="col col-total">1299元<p class="pre-info"></p></div><div class="col col-action"><a href="javascript:void(0);" title="删除" class="del"><i class="iconfont icon-trash"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cart-bar clearfix"><div class="section-left"><a href="//list.mi.com/0" class="back-shopping">继续购物</a><span class="cart-total">共 <i>4</i> 件商品，已选择 <i>4</i>件</span></div><!----><span class="total-price">合计：<em>5497</em>元<a href="javascript:void(0);" class="btn btn-a btn-primary">去结算</a></span><div class="no-select-tip" style="display: none;">请勾选需要结算的商品<i class="arrow arrow-a"></i><i class="arrow arrow-b"></i></div></div>
    </div>
</div>

@endsection