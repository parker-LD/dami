@extends('layout.index')
@section('title','我的订单')
@section('css')

<link rel="stylesheet" href="/homes/common/css/base.min.css" />
<link rel="stylesheet" href="/homes/common/css/main.min.css" />
@endsection

@section('content')
<div class="breadcrumbs">
    <div class="container">
        <a href="//www.mi.com/index.html">首页</a><span class="sep">&gt;</span><span>交易订单</span>
    </div>
</div>

<div class="page-main user-main">
    <div class="container">
        <div class="row">
            <div class="span4">
                <div class="uc-box uc-sub-box">
                    <div class="uc-nav-box">
                        <div class="box-hd">
                            <h3 class="title">订单中心</h3>
                        </div>
                        <div class="box-bd">
                            <ul class="uc-nav-list J_navList">
                                <li class="active"><a class="J_noRandom" href="//static.mi.com/order/">我的订单</a></li>
                                <li><a href="http://service.order.mi.com/insurance/payServiceList">意外保服务</a></li>
                                <li data-type="11"><a class="J_tuanList" href="//static.mi.com/order/?type=11">团购订单</a></li>
                                <li><a href="//order.mi.com/user/comment?filter=1" data-count="comment" data-count-style="bracket">评价晒单</a></li>
                                <li><a href="//order.mi.com/user/recharge">话费充值订单</a></li>
                                <li><a href="http://huanxin.mi.com/order/list">以旧换新订单</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="uc-nav-box">
                        <div class="box-hd">
                            <h3 class="title">个人中心</h3>
                        </div>
                        <div class="box-bd">
                            <ul id="J_orderNavList" class="uc-nav-list">
                                <li><a href="//order.mi.com/portal">我的个人中心</a></li>
                                <li><a href="//order.mi.com/cashAccount">现金账户</a></li>
                                <li><a href="//order.mi.com/ecard/bind">小米礼品卡</a></li>
                                <li><a href="//order.mi.com/huanxin/list">手机换新券</a></li>
                                <li><a href="//order.mi.com/user/favorite">喜欢的商品</a></li>
                                <li><a href="//order.mi.com/user/coupon">优惠券</a></li>
                                <li><a href="//order.mi.com/user/address">收货地址</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="uc-nav-box">
                        <div class="box-hd">
                            <h3 class="title">售后服务</h3>
                        </div>
                        <div class="box-bd">
                            <ul class="uc-nav-list">
                                <li><a href="http://service.order.mi.com/record/list">服务记录</a></li>
                                <li><a href="http://service.order.mi.com/apply/fill">申请服务</a></li>
                                <li><a href="http://service.order.mi.com/user/compensate">领取快递报销</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="uc-nav-box">
                        <div class="box-hd">
                            <h3 class="title">账户管理</h3>
                        </div>
                        <div class="box-bd">
                            <ul class="uc-nav-list">
                                <li><a href="https://account.xiaomi.com/" target="_blank">个人信息</a></li>
                                <li><a href="https://account.xiaomi.com/pass/auth/security/home#service=setPassword" target="_blank">修改密码</a></li>
                                <li><a href="http://uvip.xiaomi.cn" target="_blank">社区VIP认证</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="span16">
                <div class="uc-box uc-main-box">
                    <div class="uc-content-box order-list-box">
                        <div class="box-hd">
                            <h1 class="title">我的订单<small>请谨防钓鱼链接或诈骗电话，<a href="//www.mi.com/service/buy/antifraud/" target="_blank">了解更多&gt;</a></small></h1>
                            <div class="more clearfix">
                                <ul class="filter-list J_orderType">
                                    <li class="first"><a href="http://dami.com/user/order" >全部有效订单</a></li>
                                    <li><a id="J_unpaidTab" href="http://dami.com/user/order?s=0" data-type="0">待支付{{ $order->where('order_status',0)->count() }}</a></li>
                                    <li><a id="J_unpaidTab" href="http://dami.com/user/order?s=1" data-type="1">待发货{{ $order->where('order_status',1)->count() }}</a></li>
                                    <li><a id="J_sendTab" href="http://dami.com/user/order?s=2" data-type="2">待收货{{ $order->where('order_status',2)->count() }}</a></li><!-- 
                                    <li><a href="http://dami.com/user/order?s=10" data-type="5">已关闭</a></li> -->
                                </ul>
                                
                            </div>
                        </div>
                        <div class="box-bd">
                            <div id="J_orderList">
                                <div class="loading hide"><div class="loader"></div></div>
                                @if(session('info')) {{session('info')}} @endif
                            </div>
                            <div id="J_orderListPages">
                                {!!$info!!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="deliver-beta hide" id="J_deliverBeta">
    <p>预计送达时间功能处于测试阶段，若您在下单时已选择“周末送货”或“工作日送货”，则会顺延至您要求的时间，如果发现预计送达时间不准确，期待您的反馈，我们会及时改进。</p>
    <a href="//static.mi.com/feedback/" target="_blank">问题反馈 &gt;</a>
    <i class="arrow arrow-a"></i>
    <i class="arrow arrow-b"></i>
</div>




<div class="modal modal-appcode modal-hide fade" id="J_modalAppcode">
  <a class="close" data-dismiss="modal" href="javascript: void(0);"><i class="iconfont">&#xe602;</i></a>
  <div class="modal-header">
    <h3 class="title">查看电子门票</h3>
  </div>
  <div class="modal-body">
    <p>发布会电子门票仅支持在小米商城 App 查看<br>扫码下载小米商城</p>
    <img src="//s1.mi.com/m/ghd/2016/0422max/images/2-2efadb9f14.png" alt="">
  </div>
</div>
<style>
.pagination{
    text-align: center;
}
.pagination li{list-style:none;
    display: inline-block;
    width: 48px;
    height: 24px;
    padding: 3px 0;
    margin: 0 7px;
    font-size: 18px;
    font-weight: 200;
    line-height: 24px;
    color: #b0b0b0;
}
.pagination li:hover {
    background: #b0b0b0;
    color: #fff;
    cursor: pointer;
}
.pagination li:hover a{
    display: block;
    color:#fff;
}
</style>
@endsection