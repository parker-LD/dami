@extends('layout.index')
@section('title','我的订单')
@section('css')
<link rel="stylesheet" href="/homes/common/css/base.min.css" />
<link rel="stylesheet" href="/homes/common/css/main.min.css" />
<link rel="stylesheet" href="/homes/common/css/address-edit.min.css" />
@endsection

@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <a href='//www.mi.com/index.html'>首页</a>
            <span class="sep">&gt;</span>
            <span>商品评价</span>
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
                                <ul class="uc-nav-list">
                                    <li>
                                        <a href="/user/order/">我的订单</a>
                                    </li>
                                    
                                    <li>
                                        <a href="/user/comment/">评价晒单</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="uc-nav-box">
                            <div class="box-hd">
                                <h3 class="title">个人中心</h3>
                            </div>
                            <div class="box-bd">
                                <ul class="uc-nav-list">
                                    <li>
                                        <a href="http://order.mi.com/portal?r=78436.1469842507">我的个人中心</a>
                                    </li>
                                   
                                    <li>
                                        <a href="http://order.mi.com/user/favorite?r=78436.1469842507">喜欢的商品</a>
                                    </li>
                                    
                                    <li class="active">
                                        <a href="/user/address">收货地址</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="uc-nav-box">
                            <div class="box-hd">
                                <h3 class="title">账户管理</h3>
                            </div>
                            <div class="box-bd">
                                <ul class="uc-nav-list">
                                    <li>
                                        <a href="https://account.xiaomi.com/" target="_blank">个人信息</a>
                                    </li>
                                    <li>
                                        <a href="https://account.xiaomi.com/pass/auth/security/home#service=setPassword" target="_blank">修改密码</a>
                                    </li>
                                    <li>
                                        <a href="http://uvip.xiaomi.cn" target="_blank">社区VIP认证</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="span16">
                    <div class="uc-box uc-main-box">
                        <div class="uc-content-box">
                            <div class="box-hd">
                                <h1 class="title">商品评价</h1>
                                <div class="more clearfix">
                                    <ul class="filter-list J_addrType">
                                        <li class="first active">
                                            <a href="/user/comment?filter=1">待评价商品（4）</a>
                                        </li>
                                        <li>
                                            <a href="/user/comment?filter=2">已评价商品（1）</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="box-bd">
                                <div class="xm-goods-list-wrap">
                                    <ul class="xm-goods-list clearfix">
                                        <li class="xm-goods-item">
                                            <div class="figure figure-img">
                                                <a href="//item.mi.com/1161000021.html" target="_blank">
                                                    <img src="//i1.mifile.cn/a1/T1QxKvBgCv1RXrhCrK!200x200.jpg" />
                                                </a>
                                            </div>
                                            <h3 class="title">
                                                <a href="//item.mi.com/1161000021.html">小米短袖T恤 轻松米兔</a>
                                            </h3>
                                            <p class="price">39元</p>
                                            <p class="rank">4273人评价</p>
                                            <div class="actions">
                                                <a class="btn btn-primary btn-small J_btnComment" data-gid="2161000055" href="http://order.mi.com/comment/commentAdd/gid/2161000055">去评价</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection

@section('js')
<script src="/homes/common/myjs/jquery.min.js"></script>
<script src="/data/indexNav.js"></script>
<script src="/data/indexData.js"></script>
<script src="/homes/common/myjs/common.js"></script>
@endsection