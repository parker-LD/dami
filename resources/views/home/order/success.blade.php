@extends('layout.index')
@section('title','去付款')
@section('css')
    <link rel="shortcut icon" href="//s01.mifile.cn/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="//s01.mifile.cn/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="//s01.mifile.cn/css/base.min.css?v2016d22" />
    <link rel="stylesheet" type="text/css" href="//s01.mifile.cn/css/pay-confirm.min.css?v=2016063001" />
@endsection
@section('header')
    <div class="site-header site-mini-header">
        <div class="container">
            <div class="header-logo">
                <a class="logo " href="//www.mi.com/index.html" title="小米官网"></a>
            </div>
            <div class="header-title" id="J_miniHeaderTitle"></div>
            <div class="topbar-info" id="J_userInfo">
                <a class="link" href="//order.mi.com/site/login" data-needlogin="true">登录</a>
                <span class="sep">|</span>
                <a class="link" href="https://account.xiaomi.com/pass/register" >注册</a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="page-main">
        <div class="container confirm-box">
            <form target="_blank" action="#" id="J_payForm" method="post">
                <div class="section section-order" style="height: 100px;">
                    <div class="order-info clearfix">
                        <div class="fl">
                        <h2 class="title" style="padding-top:10px;">交易完成~ 谢谢.您的光临</h2>
                        <h4><em id="asd">10</em>s之后自动跳转回<a href="/">首页</a></h4>
                        </div>
                        <div class="fr">
                           
                        </div>
                    </div> <i class="iconfont icon-right">&#x221a;</i>

                </div>

            </div>
        </form>
    </div>
</div>
<script>
var n = 0;
var asd = document.getElementById('asd');
setInterval(function(){
    n++;
    asd.innerHTML = 10-n;
    if(n==10){
        window.location.href = '/';
    }
},1000)
</script>
@endsection