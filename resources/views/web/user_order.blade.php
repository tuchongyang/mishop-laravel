@extends('web.layouts.layout')
@section('title','首页')

@section('content')
<div class="breadcrumb">
    <div class="container"><a href="/">首页</a>&nbsp;&nbsp;/&nbsp;&nbsp;<span>个人中心</span></div>
</div>
<div class="section-usercenter">
    <div class="container clearfix">
        <div class="user-menu">
            <div class="menu-box">
                <h3 class="title">订单中心</h3>
                <ul class="list">
                    <li class="active"><a href="/user/orderList">我的订单</a></li>
                    <li><a href="/user/address">收货地址</a></li>
                </ul>
            </div>
        </div>
        <div class="user-box order-list-box ">
            <div class="box-title">我的订单</div>
            <div class="order-list">
                <div class="uc-order-item uc-order-item-finish">
                    <div class="order-remove"><img src="//i1.mifile.cn/f/i/2019/order/trash.png" alt="垃圾桶"></div>
                    <div class="order-detail">
                        <div class="order-summary">
                            <div class="order-status">已收货</div>
                        </div>
                        <table class="order-detail-table">
                            <thead>
                                <tr>
                                    <th class="col-main"><p class="caption-info">2016年12月15日 11:26<span class="sep">|</span>涂重阳<span class="sep">|</span>订单号：<a href="/user/orderView?order_id=1161215831500819">1161215831500819</a><span class="sep">|</span>在线支付</p></th>
                                    <th class="col-sub"><p class="caption-price">实付金额：<span class="num">899.00</span>元</p></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="order-items">
                                        <ul class="goods-list">
                                            <li>
                                                <div class="figure figure-thumb"><a href="/buy?product_id=1161200004" target="_blank"><img src="//cdn.cnbj0.fds.api.mi-img.com/b2c-shopapi-pms/T1WxYvB_xv1RXrhCrK.jpg?thumb=1&amp;w=80&amp;h=80" width="80" height="80" alt="小米活塞耳机 基础版 黑色"></a></div>
                                                <p class="name"><a href="/buy?product_id=1161200004" target="_blank">小米活塞耳机 基础版 黑色</a></p>
                                                <p class="price">0元 × 1</p>
                                            </li>
                                            <li>
                                                <div class="figure figure-thumb"><a href="/buy?product_id=1164200082" target="_blank"><img src="//cdn.cnbj0.fds.api.mi-img.com/b2c-shopapi-pms/pms_1484274162.7958986.jpg?thumb=1&amp;w=80&amp;h=80" width="80" height="80" alt="红米手机 4 高配全网通版  3GB内存 32GB 金色 32GB"></a></div>
                                                <p class="name"><a href="/buy?product_id=1164200082" target="_blank">红米手机 4 高配全网通版  3GB内存 32GB 金色 32GB</a></p>
                                                <p class="price">899元 × 1</p>
                                            </li>
                                        </ul>
                                    </td>
                                    <td  class="order-actions">
                                        <a href="/user/orderView?order_id=1161215831500819" class="btn btn-small btn-line-gray">订单详情</a>
                                        <a href="/service/aftersale/apply?order_id=1161215831500819" target="_blank" class="btn btn-small btn-line-gray">申请售后</a>
                                        <a href="javascript:void(0)" class="btn btn-small btn-line-gray btn-contract">联系客服</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection