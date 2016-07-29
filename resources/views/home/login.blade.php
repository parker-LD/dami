<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0022)http://mm.com/user.php -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="Generator" content="ECSHOP v2.7.3">

    <meta name="Keywords" content="">
    <meta name="Description" content="">

    <title>小米官网</title>




    <link href="/homes/common/css/login.css" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="/homes/common/js/common.js"></script>
    <script type="text/javascript" src="/homes/common/js/user.js"></script>
</head>
<body>
<script type="text/javascript" src="/homes/common/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/homes/common/js/jquery.json.js"></script>
<script type="text/javascript" src="/homes/common/js/transport_jquery.js"></script>
<script type="text/javascript" src="/homes/common/js/utils.js"></script>
<script type="text/javascript" src="/homes/common/js/jquery.SuperSlide.js"></script>
<script type="text/javascript" src="/homes/common/js/xiaomi_common.js"></script>


<link rel="stylesheet" href="/homes/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="/homes/bootstrap/css/bootstrap-theme.min.css">
<script type="text/javascript" src="/homes/bootstrap/js/jquery.min.js"></script>
<script type="text/javascript" src="/homes/bootstrap/js/bootstrap.min.js"></script>


<script type="text/javascript">



        $(function(){

            @if(session('mark')!=1)
            $('#but').trigger('click');
                @endif
                    $(".enter-area .enter-item").focus(function(){

                $('#error').remove();
            })
        })

</script>



<div id="main" class="layout">
    <div class="nl-content">
        <div class="nl-logo-area">
            <a href="/"><img src="/homes/common/image/logo.gif" width="55"></a>
        </div>
        <h1 class="nl-login-title">一个帐号，玩转所有小米官网！</h1>
        <p class="nl-login-intro" style="color:#ff5340;">

        </p>
        <div id="login-box" class="nl-frame-container">
            <div class="ng-form-area show-place">
                <form name="formLogin" action="/login" method="post">
                    <div class="shake-area">
                        <style type="text/css">
                            #error{
                                color: orangered;
                                text-align: center;
                            }
                        </style>
                        <div class="enter-area" id="error">
                            @if(session('error'))
                                <h3 id="error">
                                    {{ session('error') }}
                                </h3>
                            @endif
                        </div>
                        <div class="enter-area">
                            <input name="username" type="text" style="height: 40px;border: 1px solid #ededed;" class="enter-item first-enter-item" placeholder="用户名">
                            <i class="placeholder">用户名</i>

                        </div>
                        <div class="enter-area">
                            <input name="password" type="password" style="height: 40px;border: 1px solid #ededed;"style="height: 40px;border: 1px solid #ededed;" class="enter-item last-enter-item" placeholder="密码">
                            <i class="placeholder">密码</i>
                        </div>
                    </div>
                    <div class="enter-area img-code-area">
                        <input type="text"  style="height: 40px;border: 1px solid #ededed;" name="Vcode" maxlength="6" placeholder="验证码">
                        <i class="placeholder" style="margin: 10px;">验证码</i>
                        <img src="/login/captcha" alt="captcha" class="icode_image code-image chkcode_img" onclick="this.src='/login/captcha?'+Math.random()" />
                    </div>
                    {{csrf_field()}}
                    <input type="submit" name="submit" class="button orange" value="立即登录">
                    <div class="ng-foot clearfix">
                        <div class="ng-cookie-area"><label><input type="checkbox" value="1" name="remember" id="remember" class="remember-me">十天免登陆。</label></div>
                        <div class="ng-link-area">
                            <span><a href="/login/password">忘记密码?</a></span>
                            <div class="third-area hide">
                                <a class="ta-weibo" target="_blank" href="http://mm.com/user.php?act=oath&amp;type=weibo" title="weibo">weibo</a>
                                <a class="ta-qq" target="_blank" href="http://mm.com/user.php?act=oath&amp;type=qq" title="qq">qq</a>
                                <a class="ta-alipay" target="_blank" href="http://mm.com/user.php?act=oath&amp;type=alipay" title="alipay">alipay</a>
                                <em class="corner"></em>
                                <em class="corner-inner"></em>
                            </div>
                        </div>
                    </div>
                    <a class="button" href="/login/register">注册小米官网</a>
                </form>
            </div>
        </div>
    </div>
    <div class="nl-footer">
        <div class="nl-f-nav">
            <p class="nl-f-copyright">©<a href="http://mm.com/user.php#">mi.com</a> 京ICP证110507号 京ICP备10046444号 京公网安备1101080212535号 <a href="http://mm.com/user.php#">京网文[2014]0059-0009号</a></p>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">内容已核实 请登录邮箱验证</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <button class="btn btn-warning col-xs-offset-5" >确定前往验证</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button type="button" id="but" class="btn btn-primary col-xs-offset-4 hidden" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"></button>


</div>

</body>
</html>