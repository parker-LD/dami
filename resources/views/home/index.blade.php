@extends('layout.index')
@section('myCss')
<link rel="stylesheet" href="/homes/common/css/index.min.css" />
@show
@section('content')
    <div class="home-hero-container container">
        <div class="home-hero">
            <div class="home-hero-slider">
                <div class="ui-wrapper" style="max-width: 100%;">
                    <div class="ui-viewport" style="width: 100%; overflow: hidden; position: relative; height: 460px;">
                        <div id="J_homeSlider" class="xm-slider" data-stat-title="焦点图轮播" style="width: auto; position: relative;">

                            <div class="slide loaded">
                                <a href="http://hd.mi.com/y/07221q/index.html" >
                                   <img src="http://i3.mifile.cn/a4/3df93b73-1f38-41dc-9c19-c6feb05c9cc1" srcset="http://i3.mifile.cn/a4/20c8359e-6e5e-46e1-a017-b2308d9fbbae 2x"></a>
                            </div>

                            <div class="slide loaded">
                                <a href="http://hd.mi.com/y/07221q/index.html" >
                                    <img src="http://i3.mifile.cn/a4/8ebfdc81-ace7-4bfb-b07a-409e17d6d3cf" srcset="http://i3.mifile.cn/a4/5de4e2bb-54fe-45b1-a399-d5b26f106f82 2x"></a>
                            </div>

                            <div class="slide loaded">
                                <a href="http://hd.mi.com/y/07221q/index.html" >
                                    <img src="http://i3.mifile.cn/a4/eadf8c22-c83d-446b-ac04-b3ce72078388" srcset="http://i3.mifile.cn/a4/b3642c09-0d31-49e0-a011-7934fa395697 2x"></a>
                            </div>

                            <div class="slide loaded">
                                <a href="http://hd.mi.com/y/07221q/index.html" >
                                    <img src="http://i3.mifile.cn/a4/c5688819-4791-4b8f-b13e-2d29718f0ed6" srcset="http://i3.mifile.cn/a4/f779d9d8-caac-4f12-8b9c-3032f3daf8e1 2x"></a>
                            </div>

                            <div class="slide loaded">
                                <a href="http://hd.mi.com/y/07221q/index.html" >
                                    <img src="http://i3.mifile.cn/a4/9ea4cb98-3628-4384-bdb1-21646222a53a" srcset="http://i3.mifile.cn/a4/efaf715f-a1cc-4942-a24d-41f7d73e7ff5 2x"></a>
                            </div>

                        </div>
                    </div>
                    <div class="ui-controls-direction">
                        <a class="ui-prev" href="javascript:void(0);">上一张</a>
                        <a class="ui-next" href="javascript:void(0);">下一张</a>
                    </div>
                    <div class="ui-controls ui-has-pager ui-has-controls-direction">
                        <div class="ui-pager ui-default-pager">
                            <div class="ui-pager-item">
                                <a href="javascript:void(0);" class="ui-pager-link">1</a>
                            </div>
                            <div class="ui-pager-item">
                                <a href="javascript:void(0);" class="ui-pager-link">2</a>
                            </div>
                            <div class="ui-pager-item">
                                <a href="javascript:void(0);" class="ui-pager-link">3</a>
                            </div>
                            <div class="ui-pager-item">
                                <a href="javascript:void(0);" class="ui-pager-link active">4</a>
                            </div>
                            <div class="ui-pager-item">
                                <a href="javascript:void(0);" class="ui-pager-link">5</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="home-hero-sub row">
                <div class="span4">
                    <ul class="home-channel-list clearfix">
                        <li class="top left">
                            <a href="//www.mi.com/buyphone/telcom/" data-stat-aid="AA11221" data-stat-pid="2_44_1_250" target="_blank"> <i class="iconfont">&#xe640;</i>
                                电信专场
                            </a>
                        </li>
                        <li class="top">
                            <a href="http://qiye.mi.com/" data-stat-aid="AA10868" data-stat-pid="2_44_2_251" target="_blank">
                                <i class="iconfont">&#xe63e;</i>
                                企业团购
                            </a>
                        </li>
                        <li class="top">
                            <a href="//item.mi.com/re" data-stat-aid="AA10869" data-stat-pid="2_44_3_252" target="_blank">
                                <i class="iconfont">&#xe63b;</i>
                                官翻产品
                            </a>
                        </li>
                        <li class="left">
                            <a href="//www.mi.com/mimobile/" data-stat-aid="AA11244" data-stat-pid="2_44_4_253" target="_blank">
                                <i class="iconfont"></i>
                                小米移动
                            </a>
                        </li>
                        <li class="">
                            <a href="http://huanxin.mi.com/product/list" data-stat-aid="AA12084" data-stat-pid="2_44_5_254" target="_blank">
                                <i class="iconfont"></i>
                                以旧换新
                            </a>
                        </li>
                        <li class="">
                            <a href="http://recharge.10046.mi.com/" data-stat-aid="AA10871" data-stat-pid="2_44_6_255" target="_blank">
                                <i class="iconfont"></i>
                                话费充值
                            </a>
                        </li>

                    </ul>
                </div>
                <div class="span16" id="J_homePromo" data-stat-title="焦点图下方小图">
                    <ul class="home-promo-list clearfix">
                        <li class="first">
                            <a class="item" href="http://hd.mi.com/y/07081o/index.html" data-stat-aid="AA13327" data-stat-pid="2_16_1_77" target="_blank">
                                <img alt="米兔儿童手表-0720" src="http://i3.mifile.cn/a4/bcd96601-1406-4716-8258-975a90e8a706" srcset="http://i3.mifile.cn/a4/fbde1968-89d6-402b-bcee-7451c7b327e3 2x" />
                            </a>
                        </li>
                        <li>
                            <a class="item" href="//item.mi.com/buyphone/mi5" data-stat-aid="AA13313" data-stat-pid="2_16_2_78" target="_blank">
                                <img alt="小米手机5-0720" src="http://i3.mifile.cn/a4/699590cf-1eec-4cbb-84e7-3db5d965bb0d" srcset="http://i3.mifile.cn/a4/cfd68741-d5d4-43aa-9ca9-f71b85483976 2x" />
                            </a>
                        </li>
                        <li>
                            <a class="item" href="//item.mi.com/buyphone/note3" data-stat-aid="AA13314" data-stat-pid="2_16_3_79" target="_blank">
                                <img alt="红米Note3-0720" src="http://i3.mifile.cn/a4/dc80da21-68df-4d2a-9b3f-3bbea5b539a4" srcset="http://i3.mifile.cn/a4/11f55f19-4011-4e67-be32-d245745c57ea 2x" />
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="home-star-goods" id="J_homeStar">
            <div class="xm-plain-box">
                <div class="box-hd">
                    <h2 class="title">小米明星单品</h2>
                    <div class="more">
                        <div class="xm-controls xm-controls-line-small xm-carousel-controls">
                            <a class="control control-prev iconfont" href="javascript: void(0);"></a>
                            <a class="control control-next iconfont" href="javascript: void(0);"></a>
                        </div>
                    </div>
                </div>
                <div class="box-bd">
                    <ul class="xm-carousel-list xm-carousel-col-5-list goods-list rainbow-list clearfix J_carouselList">
                    @if(!empty($star))
                        @foreach($star as $key=>$val)
                            @if($key<=20)
                        <li class="rainbow-item-{{$key}}">
                            <a class="thumb" href="/datail?id={{$val->id}}"  target="_blank">
                                <img src="http://i3.mifile.cn/a4/40d24892-317d-4883-ad63-647f1b9e3cdf" srcset="{{$val->showImg}}" alt="{{$val->title}}" />
                            </a>
                            <h3 class="title">
                                <a href="/datail?id={{$val->id}}" target="_blank">{{$val->title}}</a>
                            </h3>
                            <p class="desc">{{$val->sub_title}}</p>
                            <p class="price">{{$val->price}}</p>
                        </li>
                            @endif
                        @endforeach
                    @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="page-main home-main">
        <div class="container">
            <div id="smart" class="home-brick-box home-brick-row-2-box xm-plain-box J_itemBox J_brickBox" data-from-stat="false">
                <div class="box-hd">
                    <h2 class="title">智能硬件</h2>
                    <div class="more J_brickNav"></div>
                </div>
                <div class="box-bd J_brickBd">
                <!-- 智能硬件 start-->
                    <div class="row">
                        <div class="span4 span-first">
                            <ul class="brick-promo-list clearfix">
                                <li class="brick-item brick-item-l brick-item-active">
                                    <a href="//www.mi.com/scooter/" data-stat-aid="AA13253" data-stat-pid="2_18_1_90" target="_blank" data-stat-id="AA13253+2_18_1_90" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA13253+2_18_1_90', '//www.mi.com/scooter/', 'pcpid']);">
                                        <img src="http://i3.mifile.cn/a4/124d82cc-cfce-44ab-b711-28b21be81683" width="160" height="160" alt=""></a>
                                </li>
                            </ul>
                        </div>
                        <div class="span16">
                            <ul class="brick-list clearfix">
                                @foreach($smarty as $key=>$v)
                                <li class="brick-item brick-item-m brick-item-m-2" data-gid="1161200059">
                                    <div class="figure figure-img">
                                        <a href="/detail?id={{$v->good->id}}">
                                            <img src="{{$v->img}}" width="160" height="160" alt="{{$v->title}}"></a>
                                    </div>
                                    <h3 class="title">
                                        <a href="/detail?id={{$v->good->id}}">{{$v->title}}</a>
                                    </h3>
                                    <p class="desc">{{$v->good->sub_title}}</p>
                                    <p class="price">
                                        <span class="num">{{$v->price}}</span>
                                        元
                                    </p>
                                    <!-- <div class="flag flag-postfree">免邮费</div> -->
                                </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                <!-- 智能硬件 end-->
                </div>
            </div>
            <div id="match" class="home-brick-box home-brick-row-2-box xm-plain-box J_itemBox J_brickBox" data-from-stat="true" data-region-stat="1">
                <div class="box-hd">
                    <h2 class="title">搭配</h2>
                    <div class="more J_brickNav">
                        <ul class="tab-list J_brickTabSwitch" data-tab-target="match-content">
                            <li class="tab-active">热门</li>
                            <li>耳机音箱</li>
                            <li>电源</li>
                            <li>电池存储卡</li>
                        </ul>
                    </div>
                </div>
                <div class="box-bd J_brickBd">
                <!-- 搭配 start -->
                    <div class="row">
                        <div class="span4 span-first">
                            <ul class="brick-promo-list clearfix">
                                <li class="brick-item brick-item-l brick-item-active">
                                    <a href="//www.mi.com/scooter/" data-stat-aid="AA13253" data-stat-pid="2_18_1_90" target="_blank" data-stat-id="AA13253+2_18_1_90" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA13253+2_18_1_90', '//www.mi.com/scooter/', 'pcpid']);">
                                        <img src="http://i3.mifile.cn/a4/124d82cc-cfce-44ab-b711-28b21be81683" width="160" height="160" alt=""></a>
                                </li>
                            </ul>
                        </div>
                        <div class="span16">
                            <div id="match-content" class="tab-container">
                                <ul class="brick-list tab-content clearfix tab-content-active J_recommendActive" style="">
                                    <li class="brick-item brick-item-m" data-gid="2151900016">
                                        <div class="figure figure-img">
                                            <a href="//item.mi.com/1151900011.html" data-stat-method="1_1" data-stat-index="0" data-stat-text="小米移动电源10000mAh" target="_blank" data-stat-pid="stat_首页.搭配热门_0_1_1" data-stat-aid="小米移动电源10000mAh" data-stat-id="小米移动电源10000mAh+stat_首页.搭配热门_0_1_1" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-小米移动电源10000mAh+stat_首页.搭配热门_0_1_1', '//item.mi.com/1151900011.html', 'pcpid']);">
                                                <img src="//i2.mifile.cn/a1/T12HJvByEv1RXrhCrK.jpg?width=150&amp;height=150" width="150" height="150" alt="小米移动电源10000mAh"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//item.mi.com/1151900011.html" data-stat-method="1_1" data-stat-index="0" data-stat-text="小米移动电源10000mAh" target="_blank" data-stat-pid="stat_首页.搭配热门_0_1_1" data-stat-aid="小米移动电源10000mAh" data-stat-id="小米移动电源10000mAh+stat_首页.搭配热门_0_1_1" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-小米移动电源10000mAh+stat_首页.搭配热门_0_1_1', '//item.mi.com/1151900011.html', 'pcpid']);">小米移动电源10000mAh</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">79</span>
                                            元
                                        </p>
                                        <p class="rank">18.6万人评价</p>
                                        <div class="review-wrapper">
                                            <a href="//item.mi.com/1151900011.html" data-stat-method="1_1" data-stat-index="0" data-stat-text="小米移动电源10000mAh" target="_blank" data-stat-pid="stat_首页.搭配热门_0_1_1" data-stat-aid="小米移动电源10000mAh" data-stat-id="小米移动电源10000mAh+stat_首页.搭配热门_0_1_1" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-小米移动电源10000mAh+stat_首页.搭配热门_0_1_1', '//item.mi.com/1151900011.html', 'pcpid']);">
                                                <span class="review">小米移动电源10400我也买了.比这款大.重,还是喜...</span>
                                                <span class="author">
                                                    来自于 笑致天下 的评价
                                                    <span class="date"></span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2161200010">
                                        <div class="figure figure-img">
                                            <a href="//item.mi.com/1161200010.html" data-stat-method="1_1" data-stat-index="1" data-stat-text="小米圈铁耳机" target="_blank" data-stat-pid="stat_首页.搭配热门_1_1_1" data-stat-aid="小米圈铁耳机" data-stat-id="小米圈铁耳机+stat_首页.搭配热门_1_1_1" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-小米圈铁耳机+stat_首页.搭配热门_1_1_1', '//item.mi.com/1161200010.html', 'pcpid']);">
                                                <img src="//i2.mifile.cn/a1/T1ycK_BjYv1RXrhCrK.jpg?width=150&amp;height=150" width="150" height="150" alt="小米圈铁耳机"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//item.mi.com/1161200010.html" data-stat-method="1_1" data-stat-index="1" data-stat-text="小米圈铁耳机" target="_blank" data-stat-pid="stat_首页.搭配热门_1_1_1" data-stat-aid="小米圈铁耳机" data-stat-id="小米圈铁耳机+stat_首页.搭配热门_1_1_1" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-小米圈铁耳机+stat_首页.搭配热门_1_1_1', '//item.mi.com/1161200010.html', 'pcpid']);">小米圈铁耳机</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">99</span>
                                            元
                                        </p>
                                        <p class="rank">9476人评价</p>
                                        <div class="review-wrapper">
                                            <a href="//item.mi.com/1161200010.html" data-stat-method="1_1" data-stat-index="1" data-stat-text="小米圈铁耳机" target="_blank" data-stat-pid="stat_首页.搭配热门_1_1_1" data-stat-aid="小米圈铁耳机" data-stat-id="小米圈铁耳机+stat_首页.搭配热门_1_1_1" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-小米圈铁耳机+stat_首页.搭配热门_1_1_1', '//item.mi.com/1161200010.html', 'pcpid']);">
                                                <span class="review">没话说的，音质真的完美，很好看，我给82剩下的18我...</span>
                                                <span class="author">
                                                    来自于 Miss童莉敏 的评价
                                                    <span class="date"></span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2160900011">
                                        <div class="figure figure-img">
                                            <a href="//item.mi.com/1160900029.html" data-stat-method="1_1" data-stat-index="2" data-stat-text="小米移动电源10000mAh 高配版" target="_blank" data-stat-pid="stat_首页.搭配热门_2_1_1" data-stat-aid="小米移动电源10000mAh高配版" data-stat-id="小米移动电源10000mAh高配版+stat_首页.搭配热门_2_1_1" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-小米移动电源10000mAh高配版+stat_首页.搭配热门_2_1_1', '//item.mi.com/1160900029.html', 'pcpid']);">
                                                <img src="//i2.mifile.cn/a1/T1eSZgBjVT1RXrhCrK.jpg?width=150&amp;height=150" width="150" height="150" alt="小米移动电源10000mAh 高配版"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//item.mi.com/1160900029.html" data-stat-method="1_1" data-stat-index="2" data-stat-text="小米移动电源10000mAh 高配版" target="_blank" data-stat-pid="stat_首页.搭配热门_2_1_1" data-stat-aid="小米移动电源10000mAh高配版" data-stat-id="小米移动电源10000mAh高配版+stat_首页.搭配热门_2_1_1" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-小米移动电源10000mAh高配版+stat_首页.搭配热门_2_1_1', '//item.mi.com/1160900029.html', 'pcpid']);">小米移动电源10000mAh 高配版</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">149</span>
                                            元
                                        </p>
                                        <p class="rank">1.7万人评价</p>
                                        <div class="review-wrapper">
                                            <a href="//item.mi.com/1160900029.html" data-stat-method="1_1" data-stat-index="2" data-stat-text="小米移动电源10000mAh 高配版" target="_blank" data-stat-pid="stat_首页.搭配热门_2_1_1" data-stat-aid="小米移动电源10000mAh高配版" data-stat-id="小米移动电源10000mAh高配版+stat_首页.搭配热门_2_1_1" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-小米移动电源10000mAh高配版+stat_首页.搭配热门_2_1_1', '//item.mi.com/1160900029.html', 'pcpid']);">
                                                <span class="review">很薄，充电快，方便携带</span>
                                                <span class="author">
                                                    来自于 CURGT丶FaKer 的评价
                                                    <span class="date"></span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2151400001">
                                        <div class="figure figure-img">
                                            <a href="//item.mi.com/1151400001.html" data-stat-method="1_1" data-stat-index="3" data-stat-text="小米插线板" target="_blank" data-stat-pid="stat_首页.搭配热门_3_1_1" data-stat-aid="小米插线板" data-stat-id="小米插线板+stat_首页.搭配热门_3_1_1" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-小米插线板+stat_首页.搭配热门_3_1_1', '//item.mi.com/1151400001.html', 'pcpid']);">
                                                <img src="//i2.mifile.cn/a1/pms_1463579883.27084326.jpg?width=150&amp;height=150" width="150" height="150" alt="小米插线板"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//item.mi.com/1151400001.html" data-stat-method="1_1" data-stat-index="3" data-stat-text="小米插线板" target="_blank" data-stat-pid="stat_首页.搭配热门_3_1_1" data-stat-aid="小米插线板" data-stat-id="小米插线板+stat_首页.搭配热门_3_1_1" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-小米插线板+stat_首页.搭配热门_3_1_1', '//item.mi.com/1151400001.html', 'pcpid']);">小米插线板</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">49</span>
                                            元
                                        </p>
                                        <p class="rank">24.1万人评价</p>
                                        <div class="review-wrapper">
                                            <a href="//item.mi.com/1151400001.html" data-stat-method="1_1" data-stat-index="3" data-stat-text="小米插线板" target="_blank" data-stat-pid="stat_首页.搭配热门_3_1_1" data-stat-aid="小米插线板" data-stat-id="小米插线板+stat_首页.搭配热门_3_1_1" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-小米插线板+stat_首页.搭配热门_3_1_1', '//item.mi.com/1151400001.html', 'pcpid']);">
                                                <span class="review">3个usb插口正好给手机和pad充电，隐藏式白色指示...</span>
                                                <span class="author">
                                                    来自于 prinoac 的评价
                                                    <span class="date"></span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2161200004">
                                        <div class="figure figure-img">
                                            <a href="//item.mi.com/1161200004.html" data-stat-method="1_1" data-stat-index="4" data-stat-text="小米活塞耳机 基础版" target="_blank" data-stat-pid="stat_首页.搭配热门_4_1_1" data-stat-aid="小米活塞耳机基础版" data-stat-id="小米活塞耳机基础版+stat_首页.搭配热门_4_1_1" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-小米活塞耳机基础版+stat_首页.搭配热门_4_1_1', '//item.mi.com/1161200004.html', 'pcpid']);">
                                                <img src="//i2.mifile.cn/a1/T1WxYvB_xv1RXrhCrK.jpg?width=150&amp;height=150" width="150" height="150" alt="小米活塞耳机 基础版"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//item.mi.com/1161200004.html" data-stat-method="1_1" data-stat-index="4" data-stat-text="小米活塞耳机 基础版" target="_blank" data-stat-pid="stat_首页.搭配热门_4_1_1" data-stat-aid="小米活塞耳机基础版" data-stat-id="小米活塞耳机基础版+stat_首页.搭配热门_4_1_1" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-小米活塞耳机基础版+stat_首页.搭配热门_4_1_1', '//item.mi.com/1161200004.html', 'pcpid']);">小米活塞耳机 基础版</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">29</span>
                                            元
                                        </p>
                                        <p class="rank">4.5万人评价</p>
                                        <div class="review-wrapper">
                                            <a href="//item.mi.com/1161200004.html" data-stat-method="1_1" data-stat-index="4" data-stat-text="小米活塞耳机 基础版" target="_blank" data-stat-pid="stat_首页.搭配热门_4_1_1" data-stat-aid="小米活塞耳机基础版" data-stat-id="小米活塞耳机基础版+stat_首页.搭配热门_4_1_1" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-小米活塞耳机基础版+stat_首页.搭配热门_4_1_1', '//item.mi.com/1161200004.html', 'pcpid']);">
                                                <span class="review">音质非常的好，很震撼！！美美美！</span>
                                                <span class="author">
                                                    来自于 米米小米aa 的评价
                                                    <span class="date"></span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2152400008">
                                        <div class="figure figure-img">
                                            <a href="//item.mi.com/1152400013.html" data-stat-method="1_1" data-stat-index="5" data-stat-text="小米蓝牙耳机" target="_blank" data-stat-pid="stat_首页.搭配热门_5_1_1" data-stat-aid="小米蓝牙耳机" data-stat-id="小米蓝牙耳机+stat_首页.搭配热门_5_1_1" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-小米蓝牙耳机+stat_首页.搭配热门_5_1_1', '//item.mi.com/1152400013.html', 'pcpid']);">
                                                <img src="//i2.mifile.cn/a1/T190DvB4dv1RXrhCrK.jpg?width=150&amp;height=150" width="150" height="150" alt="小米蓝牙耳机"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//item.mi.com/1152400013.html" data-stat-method="1_1" data-stat-index="5" data-stat-text="小米蓝牙耳机" target="_blank" data-stat-pid="stat_首页.搭配热门_5_1_1" data-stat-aid="小米蓝牙耳机" data-stat-id="小米蓝牙耳机+stat_首页.搭配热门_5_1_1" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-小米蓝牙耳机+stat_首页.搭配热门_5_1_1', '//item.mi.com/1152400013.html', 'pcpid']);">小米蓝牙耳机</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">79</span>
                                            元
                                        </p>
                                        <p class="rank">8.5万人评价</p>
                                        <div class="review-wrapper">
                                            <a href="//item.mi.com/1152400013.html" data-stat-method="1_1" data-stat-index="5" data-stat-text="小米蓝牙耳机" target="_blank" data-stat-pid="stat_首页.搭配热门_5_1_1" data-stat-aid="小米蓝牙耳机" data-stat-id="小米蓝牙耳机+stat_首页.搭配热门_5_1_1" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-小米蓝牙耳机+stat_首页.搭配热门_5_1_1', '//item.mi.com/1152400013.html', 'pcpid']);">
                                                <span class="review">小米的产品值得信赖，用了一段时间，无论是听歌，打电话...</span>
                                                <span class="author">
                                                    来自于 气功流 的评价
                                                    <span class="date"></span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2153800019">
                                        <div class="figure figure-img">
                                            <a href="//item.mi.com/1153800044.html" data-stat-method="1_1" data-stat-index="6" data-stat-text="小米蓝牙音箱" target="_blank" data-stat-pid="stat_首页.搭配热门_6_1_1" data-stat-aid="小米蓝牙音箱" data-stat-id="小米蓝牙音箱+stat_首页.搭配热门_6_1_1" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-小米蓝牙音箱+stat_首页.搭配热门_6_1_1', '//item.mi.com/1153800044.html', 'pcpid']);">
                                                <img src="//i2.mifile.cn/a1/T1MDK_B_YT1RXrhCrK.jpg?width=150&amp;height=150" width="150" height="150" alt="小米蓝牙音箱"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//item.mi.com/1153800044.html" data-stat-method="1_1" data-stat-index="6" data-stat-text="小米蓝牙音箱" target="_blank" data-stat-pid="stat_首页.搭配热门_6_1_1" data-stat-aid="小米蓝牙音箱" data-stat-id="小米蓝牙音箱+stat_首页.搭配热门_6_1_1" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-小米蓝牙音箱+stat_首页.搭配热门_6_1_1', '//item.mi.com/1153800044.html', 'pcpid']);">小米蓝牙音箱</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">199</span>
                                            元
                                        </p>
                                        <p class="rank">1.8万人评价</p>
                                        <div class="review-wrapper">
                                            <a href="//item.mi.com/1153800044.html" data-stat-method="1_1" data-stat-index="6" data-stat-text="小米蓝牙音箱" target="_blank" data-stat-pid="stat_首页.搭配热门_6_1_1" data-stat-aid="小米蓝牙音箱" data-stat-id="小米蓝牙音箱+stat_首页.搭配热门_6_1_1" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-小米蓝牙音箱+stat_首页.搭配热门_6_1_1', '//item.mi.com/1153800044.html', 'pcpid']);">
                                                <span class="review">小东西有大能量，音质在这个价位真的是无敌了，很精美的...</span>
                                                <span class="author">
                                                    来自于 语无伦次哈 的评价
                                                    <span class="date"></span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-s" data-gid="2161800002">
                                        <div class="figure figure-img">
                                            <a href="//item.mi.com/1161800005.html" data-stat-method="1_2" data-stat-index="7" data-stat-text="小米小钢炮蓝牙音箱 青春版 象牙白" target="_blank" data-stat-pid="stat_首页.搭配热门_7_1_2" data-stat-aid="小米小钢炮蓝牙音箱青春版象牙白" data-stat-id="小米小钢炮蓝牙音箱青春版象牙白+stat_首页.搭配热门_7_1_2" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-小米小钢炮蓝牙音箱青春版象牙白+stat_首页.搭配热门_7_1_2', '//item.mi.com/1161800005.html', 'pcpid']);">
                                                <img src="//i2.mifile.cn/a1/T15hZ_BsDv1RXrhCrK.jpg?width=80&amp;height=80" width="80" height="80" alt="小米小钢炮蓝牙音箱 青春版 象牙白"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//item.mi.com/1161800005.html" data-stat-method="1_2" data-stat-index="7" data-stat-text="小米小钢炮蓝牙音箱 青春版 象牙白" target="_blank" data-stat-pid="stat_首页.搭配热门_7_1_2" data-stat-aid="小米小钢炮蓝牙音箱青春版象牙白" data-stat-id="小米小钢炮蓝牙音箱青春版象牙白+stat_首页.搭配热门_7_1_2" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-小米小钢炮蓝牙音箱青春版象牙白+stat_首页.搭配热门_7_1_2', '//item.mi.com/1161800005.html', 'pcpid']);">小米小钢炮蓝牙音箱 青春版 象牙白</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">99</span>
                                            元
                                        </p>
                                    </li>
                                    <li class="brick-item brick-item-s">
                                        <div class="figure figure-more">
                                            <a href="//list.mi.com/dapei" target="_blank" data-stat-pid="stat_首页.搭配热门_undefined_undefined" data-stat-id="undefined+stat_首页.搭配热门_undefined_undefined" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-undefined+stat_首页.搭配热门_undefined_undefined', '//list.mi.com/dapei', 'pcpid']);"> <i class="iconfont"></i>
                                            </a>
                                        </div>
                                        <a class="more" href="//list.mi.com/dapei" target="_blank" data-stat-pid="stat_首页.搭配热门_undefined_undefined" data-stat-id="undefined+stat_首页.搭配热门_undefined_undefined" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-undefined+stat_首页.搭配热门_undefined_undefined', '//list.mi.com/dapei', 'pcpid']);">
                                            浏览更多
                                            <small>热门</small>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="brick-list tab-content clearfix tab-content-hide hide" style="display: none;">
                                    <li class="brick-item brick-item-m" data-gid="2161200007">
                                        <div class="figure figure-img">
                                            <a href="//www.mi.com/huosai2/" data-stat-aid="AA13305" data-stat-pid="2_22_1_110" target="_blank" data-stat-id="AA13305+2_22_1_110" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA13305+2_22_1_110', '//www.mi.com/huosai2/', 'pcpid']);">
                                                <img src="//i3.mifile.cn/a4/T1..W_Bvxv1RXrhCrK.jpg" width="150" height="150" alt="小米活塞耳机 基础版"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//www.mi.com/huosai2/" data-stat-aid="AA13305" data-stat-pid="2_22_1_110" target="_blank" data-stat-id="AA13305+2_22_1_110" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA13305+2_22_1_110', '//www.mi.com/huosai2/', 'pcpid']);">小米活塞耳机 基础版</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">29</span>
                                            元
                                        </p>
                                        <p class="rank">4.5万人评价</p>
                                        <div class="review-wrapper">
                                            <a href="//www.mi.com/huosai2/" data-stat-aid="AA13305" data-stat-pid="2_22_1_110" target="_blank" data-stat-id="AA13305+2_22_1_110" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA13305+2_22_1_110', '//www.mi.com/huosai2/', 'pcpid']);">
                                                <span class="review">价钱优惠，音质好。值得推荐</span>
                                                <span class="author">
                                                    来自于 1006768313 的评价
                                                    <span class="date" data-date="1459554180"></span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2161200010">
                                        <div class="figure figure-img">
                                            <a href="//www.mi.com/quantie/" data-stat-aid="AA12796" data-stat-pid="2_22_2_111" target="_blank" data-stat-id="AA12796+2_22_2_111" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12796+2_22_2_111', '//www.mi.com/quantie/', 'pcpid']);">
                                                <img src="//i1.mifile.cn/a1/T1ycK_BjYv1RXrhCrK!220x220.jpg" width="150" height="150" alt="小米圈铁耳机"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//www.mi.com/quantie/" data-stat-aid="AA12796" data-stat-pid="2_22_2_111" target="_blank" data-stat-id="AA12796+2_22_2_111" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12796+2_22_2_111', '//www.mi.com/quantie/', 'pcpid']);">小米圈铁耳机</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">99</span>
                                            元
                                        </p>
                                        <p class="rank">9476人评价</p>
                                        <div class="review-wrapper">
                                            <a href="//www.mi.com/quantie/" data-stat-aid="AA12796" data-stat-pid="2_22_2_111" target="_blank" data-stat-id="AA12796+2_22_2_111" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12796+2_22_2_111', '//www.mi.com/quantie/', 'pcpid']);">
                                                <span class="review">没话说的，音质真的完美，很好看，我给82剩下的18我...</span>
                                                <span class="author">
                                                    来自于 Miss童莉敏 的评价
                                                    <span class="date" data-date="1459611900"></span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2161800006">
                                        <div class="figure figure-img">
                                            <a href="//item.mi.com/1161800009.html" data-stat-aid="AA13303" data-stat-pid="2_22_3_112" target="_blank" data-stat-id="AA13303+2_22_3_112" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA13303+2_22_3_112', '//item.mi.com/1161800009.html', 'pcpid']);">
                                                <img src="//i1.mifile.cn/a1/T1SkV_BCd_1RXrhCrK!220x220.jpg" width="150" height="150" alt="小米胶囊耳机"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//item.mi.com/1161800009.html" data-stat-aid="AA13303" data-stat-pid="2_22_3_112" target="_blank" data-stat-id="AA13303+2_22_3_112" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA13303+2_22_3_112', '//item.mi.com/1161800009.html', 'pcpid']);">小米胶囊耳机</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">69</span>
                                            元
                                        </p>
                                        <p class="rank">9175人评价</p>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2152400008">
                                        <div class="figure figure-img">
                                            <a href="//www.mi.com/bluetooth-headset/" data-stat-aid="AA12553" data-stat-pid="2_22_4_113" target="_blank" data-stat-id="AA12553+2_22_4_113" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12553+2_22_4_113', '//www.mi.com/bluetooth-headset/', 'pcpid']);">
                                                <img src="//i1.mifile.cn/a1/T190DvB4dv1RXrhCrK!220x220.jpg" width="150" height="150" alt="小米蓝牙耳机"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//www.mi.com/bluetooth-headset/" data-stat-aid="AA12553" data-stat-pid="2_22_4_113" target="_blank" data-stat-id="AA12553+2_22_4_113" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12553+2_22_4_113', '//www.mi.com/bluetooth-headset/', 'pcpid']);">小米蓝牙耳机</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">79</span>
                                            元
                                        </p>
                                        <p class="rank">8.4万人评价</p>
                                        <div class="review-wrapper">
                                            <a href="//www.mi.com/bluetooth-headset/" data-stat-aid="AA12553" data-stat-pid="2_22_4_113" target="_blank" data-stat-id="AA12553+2_22_4_113" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12553+2_22_4_113', '//www.mi.com/bluetooth-headset/', 'pcpid']);">
                                                <span class="review">东西不错，特别轻，以前买过别的蓝牙耳机，带几天就不带...</span>
                                                <span class="author">
                                                    来自于 A@然 的评价
                                                    <span class="date" data-date="1438603200"></span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2154300023">
                                        <div class="figure figure-img">
                                            <a href="//www.mi.com/yinxiang/" data-stat-aid="AA12798" data-stat-pid="2_22_5_114" target="_blank" data-stat-id="AA12798+2_22_5_114" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12798+2_22_5_114', '//www.mi.com/yinxiang/', 'pcpid']);">
                                                <img src="//i1.mifile.cn/a1/T1Tfd_BjAv1RXrhCrK!220x220.jpg" width="150" height="150" alt="小米小钢炮蓝牙音箱2"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//www.mi.com/yinxiang/" data-stat-aid="AA12798" data-stat-pid="2_22_5_114" target="_blank" data-stat-id="AA12798+2_22_5_114" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12798+2_22_5_114', '//www.mi.com/yinxiang/', 'pcpid']);">小米小钢炮蓝牙音箱2</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">129</span>
                                            元
                                        </p>
                                        <p class="rank">9677人评价</p>
                                        <div class="review-wrapper">
                                            <a href="//www.mi.com/yinxiang/" data-stat-aid="AA12798" data-stat-pid="2_22_5_114" target="_blank" data-stat-id="AA12798+2_22_5_114" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12798+2_22_5_114', '//www.mi.com/yinxiang/', 'pcpid']);">
                                                <span class="review">很精致，小巧可爱，连接成功是女声说话提示。音质很纯很...</span>
                                                <span class="author">
                                                    来自于 Cc大坏 的评价
                                                    <span class="date" data-date="1459568340"></span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2160800017">
                                        <div class="figure figure-img">
                                            <a href="//www.mi.com/littleaudio/" data-stat-aid="AA13307" data-stat-pid="2_22_6_115" target="_blank" data-stat-id="AA13307+2_22_6_115" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA13307+2_22_6_115', '//www.mi.com/littleaudio/', 'pcpid']);">
                                                <img src="//i1.mifile.cn/a1/T1LqYgBCWv1RXrhCrK!220x220.jpg" width="150" height="150" alt="小米随身蓝牙音箱"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//www.mi.com/littleaudio/" data-stat-aid="AA13307" data-stat-pid="2_22_6_115" target="_blank" data-stat-id="AA13307+2_22_6_115" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA13307+2_22_6_115', '//www.mi.com/littleaudio/', 'pcpid']);">小米随身蓝牙音箱</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">69</span>
                                            元
                                        </p>
                                        <p class="rank">6237人评价</p>
                                        <div class="review-wrapper">
                                            <a href="//www.mi.com/littleaudio/" data-stat-aid="AA13307" data-stat-pid="2_22_6_115" target="_blank" data-stat-id="AA13307+2_22_6_115" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA13307+2_22_6_115', '//www.mi.com/littleaudio/', 'pcpid']);">
                                                <span class="review">超级喜欢！小巧玲珑！音质完美！不知道为什么！只要是小...</span>
                                                <span class="author">
                                                    来自于 田密 的评价
                                                    <span class="date" data-date="1460129880"></span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2153800021">
                                        <div class="figure figure-img">
                                            <a href="//www.mi.com/pocketaudio/" data-stat-aid="AA13308" data-stat-pid="2_22_7_116" target="_blank" data-stat-id="AA13308+2_22_7_116" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA13308+2_22_7_116', '//www.mi.com/pocketaudio/', 'pcpid']);">
                                                <img src="//i1.mifile.cn/a1/T1yf__BjAT1RXrhCrK!220x220.jpg" width="150" height="150" alt="小米蓝牙音箱"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//www.mi.com/pocketaudio/" data-stat-aid="AA13308" data-stat-pid="2_22_7_116" target="_blank" data-stat-id="AA13308+2_22_7_116" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA13308+2_22_7_116', '//www.mi.com/pocketaudio/', 'pcpid']);">小米蓝牙音箱</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">199</span>
                                            元
                                        </p>
                                        <p class="rank">1.7万人评价</p>
                                        <div class="review-wrapper">
                                            <a href="//www.mi.com/pocketaudio/" data-stat-aid="AA13308" data-stat-pid="2_22_7_116" target="_blank" data-stat-id="AA13308+2_22_7_116" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA13308+2_22_7_116', '//www.mi.com/pocketaudio/', 'pcpid']);">
                                                <span class="review">199能有这效果有点惊喜</span>
                                                <span class="author">
                                                    来自于 efunliu 的评价
                                                    <span class="date" data-date="1444865160"></span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-s" data-gid="2161800002">
                                        <div class="figure figure-img">
                                            <a href="//www.mi.com/speaker/" data-stat-aid="AA13309" data-stat-pid="2_22_8_117" target="_blank" data-stat-id="AA13309+2_22_8_117" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA13309+2_22_8_117', '//www.mi.com/speaker/', 'pcpid']);">
                                                <img src="//i1.mifile.cn/a1/T15hZ_BsDv1RXrhCrK!220x220.jpg" width="80" height="80" alt="小米小钢炮蓝牙音箱 青春版"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//www.mi.com/speaker/" data-stat-aid="AA13309" data-stat-pid="2_22_8_117" target="_blank" data-stat-id="AA13309+2_22_8_117" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA13309+2_22_8_117', '//www.mi.com/speaker/', 'pcpid']);">小米小钢炮蓝牙音箱 青春版</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">99</span>
                                            元
                                        </p>
                                    </li>
                                    <li class="brick-item brick-item-s">
                                        <div class="figure figure-more">
                                            <a href="//list.mi.com/17" target="_blank" data-stat-id="05b6ad9a5fb35b64" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-05b6ad9a5fb35b64', '//list.mi.com/17', 'pcpid']);"> <i class="iconfont"></i>
                                            </a>
                                        </div>
                                        <a class="more" href="//list.mi.com/17" target="_blank" data-stat-id="5b0df4e5f94bdced" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-5b0df4e5f94bdced', '//list.mi.com/17', 'pcpid']);">
                                            浏览更多
                                            <small>耳机音箱</small>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="brick-list tab-content clearfix tab-content-hide hide" style="display: none;">
                                    <li class="brick-item brick-item-m" data-gid="2144800001">
                                        <div class="figure figure-img">
                                            <a href="//www.mi.com/dianyuan5000/" data-stat-aid="AA12386" data-stat-pid="2_23_1_118" target="_blank" data-stat-id="AA12386+2_23_1_118" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12386+2_23_1_118', '//www.mi.com/dianyuan5000/', 'pcpid']);">
                                                <img src="//i3.mifile.cn/a4/T1AcE_Bghv1RXrhCrK.jpg" width="150" height="150" alt="移动电源5000mAh"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//www.mi.com/dianyuan5000/" data-stat-aid="AA12386" data-stat-pid="2_23_1_118" target="_blank" data-stat-id="AA12386+2_23_1_118" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12386+2_23_1_118', '//www.mi.com/dianyuan5000/', 'pcpid']);">移动电源5000mAh</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">49</span>
                                            元
                                        </p>
                                        <p class="rank">8.6万人评价</p>
                                        <div class="review-wrapper">
                                            <a href="//www.mi.com/dianyuan5000/" data-stat-aid="AA12386" data-stat-pid="2_23_1_118" target="_blank" data-stat-id="AA12386+2_23_1_118" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12386+2_23_1_118', '//www.mi.com/dianyuan5000/', 'pcpid']);">
                                                <span class="review">之前都不知道，还以为是18650电芯的。拿到手一看这...</span>
                                                <span class="author">
                                                    来自于 ywtdzh 的评价
                                                    <span class="date" data-date="1428700440"></span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2151900016">
                                        <div class="figure figure-img">
                                            <a href="//www.mi.com/dianyuan10000/" data-stat-aid="AA10701" data-stat-pid="2_23_2_119" target="_blank" data-stat-id="AA10701+2_23_2_119" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA10701+2_23_2_119', '//www.mi.com/dianyuan10000/', 'pcpid']);">
                                                <img src="//i1.mifile.cn/a1/T12HJvByEv1RXrhCrK!220x220.jpg" width="150" height="150" alt="移动电源10000mAh"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//www.mi.com/dianyuan10000/" data-stat-aid="AA10701" data-stat-pid="2_23_2_119" target="_blank" data-stat-id="AA10701+2_23_2_119" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA10701+2_23_2_119', '//www.mi.com/dianyuan10000/', 'pcpid']);">移动电源10000mAh</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">79</span>
                                            元
                                        </p>
                                        <p class="rank">18.6万人评价</p>
                                        <div class="review-wrapper">
                                            <a href="//www.mi.com/dianyuan10000/" data-stat-aid="AA10701" data-stat-pid="2_23_2_119" target="_blank" data-stat-id="AA10701+2_23_2_119" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA10701+2_23_2_119', '//www.mi.com/dianyuan10000/', 'pcpid']);">
                                                <span class="review">这个小巧玲珑啊，比10400安的小了好多，感觉不错，...</span>
                                                <span class="author">
                                                    来自于 LIN翼 的评价
                                                    <span class="date" data-date="1435328820"></span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2160900011">
                                        <div class="figure figure-img">
                                            <a href="//www.mi.com/dianyuan10000/pro/" data-stat-aid="AA12801" data-stat-pid="2_23_3_120" target="_blank" data-stat-id="AA12801+2_23_3_120" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12801+2_23_3_120', '//www.mi.com/dianyuan10000/pro/', 'pcpid']);">
                                                <img src="//i1.mifile.cn/a1/T1eSZgBjVT1RXrhCrK!220x220.jpg" width="150" height="150" alt="移动电源10000mAh 高配版"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//www.mi.com/dianyuan10000/pro/" data-stat-aid="AA12801" data-stat-pid="2_23_3_120" target="_blank" data-stat-id="AA12801+2_23_3_120" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12801+2_23_3_120', '//www.mi.com/dianyuan10000/pro/', 'pcpid']);">移动电源10000mAh 高配版</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">149</span>
                                            元
                                        </p>
                                        <p class="rank">1.7万人评价</p>
                                        <div class="review-wrapper">
                                            <a href="//www.mi.com/dianyuan10000/pro/" data-stat-aid="AA12801" data-stat-pid="2_23_3_120" target="_blank" data-stat-id="AA12801+2_23_3_120" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12801+2_23_3_120', '//www.mi.com/dianyuan10000/pro/', 'pcpid']);">
                                                <span class="review">非常棒的手感。越来越好了，小米加油！</span>
                                                <span class="author">
                                                    来自于 journey099 的评价
                                                    <span class="date" data-date="1457224200"></span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2154400015">
                                        <div class="figure figure-img">
                                            <a href="//item.mi.com/1154400042.html" data-stat-aid="AA12250" data-stat-pid="2_23_4_121" target="_blank" data-stat-id="AA12250+2_23_4_121" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12250+2_23_4_121', '//item.mi.com/1154400042.html', 'pcpid']);">
                                                <img src="//i3.mifile.cn/a4/T1x8J_BgEv1RXrhCrK.jpg" width="150" height="150" alt="移动电源20000mAh"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//item.mi.com/1154400042.html" data-stat-aid="AA12250" data-stat-pid="2_23_4_121" target="_blank" data-stat-id="AA12250+2_23_4_121" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12250+2_23_4_121', '//item.mi.com/1154400042.html', 'pcpid']);">移动电源20000mAh</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">149</span>
                                            元
                                        </p>
                                        <p class="rank">4.3万人评价</p>
                                        <div class="review-wrapper">
                                            <a href="//item.mi.com/1154400042.html" data-stat-aid="AA12250" data-stat-pid="2_23_4_121" target="_blank" data-stat-id="AA12250+2_23_4_121" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12250+2_23_4_121', '//item.mi.com/1154400042.html', 'pcpid']);">
                                                <span class="review">以前一直使用10400的版本，买了这个之后，才知道有...</span>
                                                <span class="author">
                                                    来自于 呈现逐步 的评价
                                                    <span class="date" data-date="1448699280"></span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2152000005">
                                        <div class="figure figure-img">
                                            <a href="//item.mi.com/1152000009.html" data-stat-aid="AA13079" data-stat-pid="2_23_5_122" target="_blank" data-stat-id="AA13079+2_23_5_122" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA13079+2_23_5_122', '//item.mi.com/1152000009.html', 'pcpid']);">
                                                <img src="//i1.mifile.cn/a1/T1vSDQB4_T1RXrhCrK!220x220.jpg" width="150" height="150" alt="10000mAh小米移动电源保护套"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//item.mi.com/1152000009.html" data-stat-aid="AA13079" data-stat-pid="2_23_5_122" target="_blank" data-stat-id="AA13079+2_23_5_122" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA13079+2_23_5_122', '//item.mi.com/1152000009.html', 'pcpid']);">10000mAh小米移动电源保护套</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">19.9</span>
                                            元
                                        </p>
                                        <p class="rank">1.9万人评价</p>
                                        <div class="review-wrapper">
                                            <a href="//item.mi.com/1152000009.html" data-stat-aid="AA13079" data-stat-pid="2_23_5_122" target="_blank" data-stat-id="AA13079+2_23_5_122" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA13079+2_23_5_122', '//item.mi.com/1152000009.html', 'pcpid']);">
                                                <span class="review">可好了，能有效的保护手机了，再也不用担心移动电源被磨...</span>
                                                <span class="author">
                                                    来自于 682837881 的评价
                                                    <span class="date" data-date="1436088780"></span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2151400001">
                                        <div class="figure figure-img">
                                            <a href="//www.mi.com/powerstrip/" data-stat-aid="AA12383" data-stat-pid="2_23_6_123" target="_blank" data-stat-id="AA12383+2_23_6_123" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12383+2_23_6_123', '//www.mi.com/powerstrip/', 'pcpid']);">
                                                <img src="//i3.mifile.cn/a4/T1jMbjB5Jv1RXrhCrK.jpg" width="150" height="150" alt="小米插线板（3孔位+USB）"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//www.mi.com/powerstrip/" data-stat-aid="AA12383" data-stat-pid="2_23_6_123" target="_blank" data-stat-id="AA12383+2_23_6_123" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12383+2_23_6_123', '//www.mi.com/powerstrip/', 'pcpid']);">小米插线板（3孔位+USB）</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">49</span>
                                            元
                                        </p>
                                        <p class="rank">24万人评价</p>
                                        <div class="review-wrapper">
                                            <a href="//www.mi.com/powerstrip/" data-stat-aid="AA12383" data-stat-pid="2_23_6_123" target="_blank" data-stat-id="AA12383+2_23_6_123" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12383+2_23_6_123', '//www.mi.com/powerstrip/', 'pcpid']);">
                                                <span class="review">东西真心不错，用过最好用的插线板，做工外观没得挑剔，...</span>
                                                <span class="author">
                                                    来自于 yinyin19891117 的评价
                                                    <span class="date" data-date="1432613940"></span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2161200012">
                                        <div class="figure figure-img">
                                            <a href="//www.mi.com/chongdianqi4kou/" data-stat-aid="AA13058" data-stat-pid="2_23_7_124" target="_blank" data-stat-id="AA13058+2_23_7_124" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA13058+2_23_7_124', '//www.mi.com/chongdianqi4kou/', 'pcpid']);">
                                                <img src="//i1.mifile.cn/a1/T1vFEjBbWT1RXrhCrK!220x220.jpg" width="150" height="150" alt="小米USB充电器（4口）"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//www.mi.com/chongdianqi4kou/" data-stat-aid="AA13058" data-stat-pid="2_23_7_124" target="_blank" data-stat-id="AA13058+2_23_7_124" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA13058+2_23_7_124', '//www.mi.com/chongdianqi4kou/', 'pcpid']);">小米USB充电器（4口）</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">69</span>
                                            元
                                        </p>
                                        <p class="rank">5601人评价</p>
                                        <div class="review-wrapper">
                                            <a href="//www.mi.com/chongdianqi4kou/" data-stat-aid="AA13058" data-stat-pid="2_23_7_124" target="_blank" data-stat-id="AA13058+2_23_7_124" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA13058+2_23_7_124', '//www.mi.com/chongdianqi4kou/', 'pcpid']);">
                                                <span class="review">产品质量一如既往的好，小巧玲珑，方便携带，旅行必备</span>
                                                <span class="author">
                                                    来自于 YY2TH 的评价
                                                    <span class="date" data-date="1459601580"></span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-s" data-gid="2154500009">
                                        <div class="figure figure-img">
                                            <a href="//item.mi.com/1154500022.html" data-stat-aid="AA11913" data-stat-pid="2_23_8_125" target="_blank" data-stat-id="AA11913+2_23_8_125" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA11913+2_23_8_125', '//item.mi.com/1154500022.html', 'pcpid']);">
                                                <img src="//i3.mifile.cn/a4/T1Ihd_BTCv1RXrhCrK.jpg" width="80" height="80" alt="小米插线板 5孔位"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//item.mi.com/1154500022.html" data-stat-aid="AA11913" data-stat-pid="2_23_8_125" target="_blank" data-stat-id="AA11913+2_23_8_125" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA11913+2_23_8_125', '//item.mi.com/1154500022.html', 'pcpid']);">小米插线板 5孔位</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">39</span>
                                            元
                                        </p>
                                    </li>
                                    <li class="brick-item brick-item-s">
                                        <div class="figure figure-more">
                                            <a href="//list.mi.com/11" target="_blank" data-stat-id="98b12e57077b0c68" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-98b12e57077b0c68', '//list.mi.com/11', 'pcpid']);">
                                                <i class="iconfont"></i>
                                            </a>
                                        </div>
                                        <a class="more" href="//list.mi.com/11" target="_blank" data-stat-id="7c1ce1abe884958e" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-7c1ce1abe884958e', '//list.mi.com/11', 'pcpid']);">
                                            浏览更多
                                            <small>电源</small>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="brick-list tab-content clearfix tab-content-hide hide" style="display: none;">
                                    <li class="brick-item brick-item-m" data-gid="1134900527">
                                        <div class="figure figure-img">
                                            <a href="//item.mi.com/1134900527.html" data-stat-aid="AA13012" data-stat-pid="2_24_1_126" target="_blank" data-stat-id="AA13012+2_24_1_126" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA13012+2_24_1_126', '//item.mi.com/1134900527.html', 'pcpid']);">
                                                <img src="//i1.mifile.cn/a1/T1sRhTBsYT1RXrhCrK!220x220.jpg" width="150" height="150" alt="SanDisk 16GB存储卡（Class4）"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//item.mi.com/1134900527.html" data-stat-aid="AA13012" data-stat-pid="2_24_1_126" target="_blank" data-stat-id="AA13012+2_24_1_126" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA13012+2_24_1_126', '//item.mi.com/1134900527.html', 'pcpid']);">SanDisk 16GB存储卡（Class4）</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">35.9</span>
                                            元 <del><span class="num">49.9</span>
                                                元</del>
                                        </p>
                                        <p class="rank">7.9万人评价</p>
                                        <div class="flag flag-saleoff">享8折</div>
                                        <div class="review-wrapper">
                                            <a href="//item.mi.com/1134900527.html" data-stat-aid="AA13012" data-stat-pid="2_24_1_126" target="_blank" data-stat-id="AA13012+2_24_1_126" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA13012+2_24_1_126', '//item.mi.com/1134900527.html', 'pcpid']);">
                                                <span class="review">物美价廉，正品行货，发货迅速</span>
                                                <span class="author">
                                                    来自于 sharph 的评价
                                                    <span class="date" data-date="1437463980"></span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="1153300072">
                                        <div class="figure figure-img">
                                            <a href="//item.mi.com/1153300072.html" data-stat-aid="AA12950" data-stat-pid="2_24_2_127" target="_blank" data-stat-id="AA12950+2_24_2_127" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12950+2_24_2_127', '//item.mi.com/1153300072.html', 'pcpid']);">
                                                <img src="//i1.mifile.cn/a1/T1ipAvB_ZT1RXrhCrK!220x220.jpg" width="150" height="150" alt="原装快充套装"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//item.mi.com/1153300072.html" data-stat-aid="AA12950" data-stat-pid="2_24_2_127" target="_blank" data-stat-id="AA12950+2_24_2_127" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12950+2_24_2_127', '//item.mi.com/1153300072.html', 'pcpid']);">原装快充套装</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">58</span>
                                            元 <del><span class="num">78</span>
                                                元</del>
                                        </p>
                                        <p class="rank">0人评价</p>
                                        <div class="flag flag-saleoff">享8折</div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2154300020">
                                        <div class="figure figure-img">
                                            <a href="//item.mi.com/1154300033.html" data-stat-aid="AA11638" data-stat-pid="2_24_3_128" target="_blank" data-stat-id="AA11638+2_24_3_128" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA11638+2_24_3_128', '//item.mi.com/1154300033.html', 'pcpid']);">
                                                <img src="//i1.mifile.cn/a1/T1xxVTBghv1RXrhCrK!220x220.jpg" width="150" height="150" alt="彩虹5号电池（10粒装）"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//item.mi.com/1154300033.html" data-stat-aid="AA11638" data-stat-pid="2_24_3_128" target="_blank" data-stat-id="AA11638+2_24_3_128" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA11638+2_24_3_128', '//item.mi.com/1154300033.html', 'pcpid']);">彩虹5号电池（10粒装）</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">9.9</span>
                                            元
                                        </p>
                                        <p class="rank">6.4万人评价</p>
                                        <div class="review-wrapper">
                                            <a href="//item.mi.com/1154300033.html" data-stat-aid="AA11638" data-stat-pid="2_24_3_128" target="_blank" data-stat-id="AA11638+2_24_3_128" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA11638+2_24_3_128', '//item.mi.com/1154300033.html', 'pcpid']);">
                                                <span class="review">彩虹的电量，彩虹的心情，彩虹的每一天</span>
                                                <span class="author">
                                                    来自于 醉爱你HYA 的评价
                                                    <span class="date" data-date="1446808560"></span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2155000004">
                                        <div class="figure figure-img">
                                            <a href="//item.mi.com/1155000010.html" data-stat-aid="AA12228" data-stat-pid="2_24_4_129" target="_blank" data-stat-id="AA12228+2_24_4_129" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12228+2_24_4_129', '//item.mi.com/1155000010.html', 'pcpid']);">
                                                <img src="//i1.mifile.cn/a1/T178EjBjVT1RXrhCrK!220x220.jpg" width="150" height="150" alt="彩虹7号电池（10粒装）"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//item.mi.com/1155000010.html" data-stat-aid="AA12228" data-stat-pid="2_24_4_129" target="_blank" data-stat-id="AA12228+2_24_4_129" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12228+2_24_4_129', '//item.mi.com/1155000010.html', 'pcpid']);">彩虹7号电池（10粒装）</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">9.9</span>
                                            元
                                        </p>
                                        <p class="rank">3.6万人评价</p>
                                        <div class="review-wrapper">
                                            <a href="//item.mi.com/1155000010.html" data-stat-aid="AA12228" data-stat-pid="2_24_4_129" target="_blank" data-stat-id="AA12228+2_24_4_129" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12228+2_24_4_129', '//item.mi.com/1155000010.html', 'pcpid']);">
                                                <span class="review">颜色亮丽，价格便宜，使用很方便好用。</span>
                                                <span class="author">
                                                    来自于 谁会问 的评价
                                                    <span class="date" data-date="1450054440"></span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2151400210">
                                        <div class="figure figure-img">
                                            <a href="//item.mi.com/1151400067.html" data-stat-aid="AA10709" data-stat-pid="2_24_5_130" target="_blank" data-stat-id="AA10709+2_24_5_130" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA10709+2_24_5_130', '//item.mi.com/1151400067.html', 'pcpid']);">
                                                <img src="//i1.mifile.cn/a1/T16XAgB5dT1RXrhCrK!220x220.jpg" width="150" height="150" alt="CR2032纽扣电池"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//item.mi.com/1151400067.html" data-stat-aid="AA10709" data-stat-pid="2_24_5_130" target="_blank" data-stat-id="AA10709+2_24_5_130" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA10709+2_24_5_130', '//item.mi.com/1151400067.html', 'pcpid']);">CR2032纽扣电池</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">9</span>
                                            元
                                        </p>
                                        <p class="rank">1.2万人评价</p>
                                        <div class="review-wrapper">
                                            <a href="//item.mi.com/1151400067.html" data-stat-aid="AA10709" data-stat-pid="2_24_5_130" target="_blank" data-stat-id="AA10709+2_24_5_130" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA10709+2_24_5_130', '//item.mi.com/1151400067.html', 'pcpid']);">
                                                <span class="review">小米把关，质量还是有得保证的，暂时还没用，先备着！</span>
                                                <span class="author">
                                                    来自于 陶都 的评价
                                                    <span class="date" data-date="1430124840"></span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="1161500023">
                                        <div class="figure figure-img">
                                            <a href="//www.mi.com/recharger/" data-stat-aid="AA13059" data-stat-pid="2_24_6_131" target="_blank" data-stat-id="AA13059+2_24_6_131" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA13059+2_24_6_131', '//www.mi.com/recharger/', 'pcpid']);">
                                                <img src="//i3.mifile.cn/a4/T1gVCgBjDv1RXrhCrK.jpg" width="150" height="150" alt="紫5镍氢充电电池"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//www.mi.com/recharger/" data-stat-aid="AA13059" data-stat-pid="2_24_6_131" target="_blank" data-stat-id="AA13059+2_24_6_131" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA13059+2_24_6_131', '//www.mi.com/recharger/', 'pcpid']);">紫5镍氢充电电池</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">49</span>
                                            元
                                        </p>
                                        <p class="rank">1792人评价</p>
                                        <div class="review-wrapper">
                                            <a href="//www.mi.com/recharger/" data-stat-aid="AA13059" data-stat-pid="2_24_6_131" target="_blank" data-stat-id="AA13059+2_24_6_131" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA13059+2_24_6_131', '//www.mi.com/recharger/', 'pcpid']);">
                                                <span class="review">终于出了充电电池，外形时尚，喜欢</span>
                                                <span class="author">
                                                    来自于 吴国立 的评价
                                                    <span class="date" data-date="1462320480"></span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2154400016">
                                        <div class="figure figure-img">
                                            <a href="//item.mi.com/1154400043.html" data-stat-aid="AA12671" data-stat-pid="2_24_7_132" target="_blank" data-stat-id="AA12671+2_24_7_132" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12671+2_24_7_132', '//item.mi.com/1154400043.html', 'pcpid']);">
                                                <img src="//i1.mifile.cn/a1/T142A_BXEv1RXrhCrK!220x220.jpg" width="150" height="150" alt="小米车载充电器"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//item.mi.com/1154400043.html" data-stat-aid="AA12671" data-stat-pid="2_24_7_132" target="_blank" data-stat-id="AA12671+2_24_7_132" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12671+2_24_7_132', '//item.mi.com/1154400043.html', 'pcpid']);">小米车载充电器</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">49</span>
                                            元
                                        </p>
                                        <p class="rank">2.7万人评价</p>
                                        <div class="review-wrapper">
                                            <a href="//item.mi.com/1154400043.html" data-stat-aid="AA12671" data-stat-pid="2_24_7_132" target="_blank" data-stat-id="AA12671+2_24_7_132" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12671+2_24_7_132', '//item.mi.com/1154400043.html', 'pcpid']);">
                                                <span class="review">做工好，性价比高，不错</span>
                                                <span class="author">
                                                    来自于 14065665 的评价
                                                    <span class="date" data-date="1448386320"></span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-s" data-gid="1152400014">
                                        <div class="figure figure-img">
                                            <a href="//item.mi.com/1152400014.html" data-stat-aid="AA12803" data-stat-pid="2_24_8_133" target="_blank" data-stat-id="AA12803+2_24_8_133" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12803+2_24_8_133', '//item.mi.com/1152400014.html', 'pcpid']);">
                                                <img src="//i1.mifile.cn/a1/T1_lKvBKZT1RXrhCrK!220x220.jpg" width="80" height="80" alt="红米2/红米2A能量套装"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//item.mi.com/1152400014.html" data-stat-aid="AA12803" data-stat-pid="2_24_8_133" target="_blank" data-stat-id="AA12803+2_24_8_133" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12803+2_24_8_133', '//item.mi.com/1152400014.html', 'pcpid']);">红米2/红米2A能量套装</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">69</span>
                                            元
                                        </p>
                                    </li>
                                    <li class="brick-item brick-item-s">
                                        <div class="figure figure-more">
                                            <a href="//list.mi.com/135" target="_blank" data-stat-id="072780fc1ce8681c" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-072780fc1ce8681c', '//list.mi.com/135', 'pcpid']);">
                                                <i class="iconfont"></i>
                                            </a>
                                        </div>
                                        <a class="more" href="//list.mi.com/135" target="_blank" data-stat-id="df2864c04b2143a5" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-df2864c04b2143a5', '//list.mi.com/135', 'pcpid']);">
                                            浏览更多
                                            <small>电池存储卡</small>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <!-- 搭配 end -->
                </div>
            </div>
            <div id="accessories" class="home-brick-box home-brick-row-2-box xm-plain-box J_itemBox J_brickBox" data-from-stat="true" data-region-stat="1">
                <div class="box-hd">
                    <h2 class="title">配件</h2>
                    <div class="more J_brickNav">
                        <ul class="tab-list J_brickTabSwitch" data-tab-target="accessories-content">
                            <li class="tab-active">热门</li>
                            <li>保护套</li>
                            <li>贴膜</li>
                            <li>其他配件</li>
                        </ul>
                    </div>
                </div>
                <div class="box-bd J_brickBd">
                    <!-- 配件 start-->
                    <div class="row">
                        <div class="span4 span-first">
                            <ul class="brick-promo-list clearfix">
                                <li class="brick-item brick-item-m">
                                    <a href="//list.mi.com/30" data-stat-aid="AA13131" data-stat-pid="2_25_1_134" target="_blank" data-stat-id="AA13131+2_25_1_134" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA13131+2_25_1_134', '//list.mi.com/30', 'pcpid']);">
                                        <img src="http://i3.mifile.cn/a4/4a8d2efb-bd2a-4123-8345-b460e0e95fa0" width="160" height="160" alt=""></a>
                                </li>
                                <li class="brick-item brick-item-m">
                                    <a href="//www.mi.com/powerstrip/" data-stat-aid="AA13114" data-stat-pid="2_25_2_135" target="_blank" data-stat-id="AA13114+2_25_2_135" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA13114+2_25_2_135', '//www.mi.com/powerstrip/', 'pcpid']);">
                                        <img src="http://i3.mifile.cn/a4/363032e6-b043-4854-a8cc-8909df918f02" width="160" height="160" alt=""></a>
                                </li>
                            </ul>
                        </div>
                        <div class="span16">
                            <div id="accessories-content" class="tab-container">
                                <ul class="brick-list tab-content clearfix tab-content-active J_recommendActive">
                                    <li class="brick-item brick-item-m" data-gid="2135200033">
                                        <div class="figure figure-img">
                                            <a href="//item.mi.com/1135200036.html" data-stat-method="1_16" data-stat-index="0" data-stat-text="小米随身WIFI" target="_blank" data-stat-pid="stat_首页.配件热门_0_1_16" data-stat-aid="小米随身WIFI" data-stat-id="小米随身WIFI+stat_首页.配件热门_0_1_16" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-小米随身WIFI+stat_首页.配件热门_0_1_16', '//item.mi.com/1135200036.html', 'pcpid']);">
                                                <img src="//i2.mifile.cn/a1/T1zL_vByCT1RXrhCrK.jpg?width=150&amp;height=150" width="150" height="150" alt="小米随身WIFI"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//item.mi.com/1135200036.html" data-stat-method="1_16" data-stat-index="0" data-stat-text="小米随身WIFI" target="_blank" data-stat-pid="stat_首页.配件热门_0_1_16" data-stat-aid="小米随身WIFI" data-stat-id="小米随身WIFI+stat_首页.配件热门_0_1_16" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-小米随身WIFI+stat_首页.配件热门_0_1_16', '//item.mi.com/1135200036.html', 'pcpid']);">小米随身WIFI</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">19.9</span>
                                            元
                                        </p>
                                        <p class="rank">29.8万人评价</p>
                                        <div class="review-wrapper">
                                            <a href="//item.mi.com/1135200036.html" data-stat-method="1_16" data-stat-index="0" data-stat-text="小米随身WIFI" target="_blank" data-stat-pid="stat_首页.配件热门_0_1_16" data-stat-aid="小米随身WIFI" data-stat-id="小米随身WIFI+stat_首页.配件热门_0_1_16" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-小米随身WIFI+stat_首页.配件热门_0_1_16', '//item.mi.com/1135200036.html', 'pcpid']);">
                                                <span class="review">很好用，也很实用啊，特别是PPT功能，很好很强大</span>
                                                <span class="author">
                                                    来自于 抽支烟吐圈圈 的评价
                                                    <span class="date"></span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2160800006">
                                        <div class="figure figure-img">
                                            <a href="//item.mi.com/1160800006.html" data-stat-method="1_16" data-stat-index="1" data-stat-text="钢化玻璃贴膜(0.22mm)" target="_blank" data-stat-pid="stat_首页.配件热门_1_1_16" data-stat-aid="钢化玻璃贴膜(0.22mm)" data-stat-id="钢化玻璃贴膜(0.22mm)+stat_首页.配件热门_1_1_16" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-钢化玻璃贴膜(0.22mm)+stat_首页.配件热门_1_1_16', '//item.mi.com/1160800006.html', 'pcpid']);">
                                                <img src="//i2.mifile.cn/a1/T1t2K_B4L_1RXrhCrK.jpg?width=150&amp;height=150" width="150" height="150" alt="钢化玻璃贴膜(0.22mm)"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//item.mi.com/1160800006.html" data-stat-method="1_16" data-stat-index="1" data-stat-text="钢化玻璃贴膜(0.22mm)" target="_blank" data-stat-pid="stat_首页.配件热门_1_1_16" data-stat-aid="钢化玻璃贴膜(0.22mm)" data-stat-id="钢化玻璃贴膜(0.22mm)+stat_首页.配件热门_1_1_16" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-钢化玻璃贴膜(0.22mm)+stat_首页.配件热门_1_1_16', '//item.mi.com/1160800006.html', 'pcpid']);">小米手机5 钢化玻璃贴膜(0.22mm)</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">29</span>
                                            元
                                        </p>
                                        <p class="rank">2.3万人评价</p>
                                        <div class="review-wrapper">
                                            <a href="//item.mi.com/1160800006.html" data-stat-method="1_16" data-stat-index="1" data-stat-text="钢化玻璃贴膜(0.22mm)" target="_blank" data-stat-pid="stat_首页.配件热门_1_1_16" data-stat-aid="钢化玻璃贴膜(0.22mm)" data-stat-id="钢化玻璃贴膜(0.22mm)+stat_首页.配件热门_1_1_16" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-钢化玻璃贴膜(0.22mm)+stat_首页.配件热门_1_1_16', '//item.mi.com/1160800006.html', 'pcpid']);">
                                                <span class="review">手感很好，是高清的不错</span>
                                                <span class="author">
                                                    来自于 俄方热 的评价
                                                    <span class="date"></span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2160800009">
                                        <div class="figure figure-img">
                                            <a href="//item.mi.com/1160800009.html" data-stat-method="1_16" data-stat-index="2" data-stat-text="智能翻盖保护套" target="_blank" data-stat-pid="stat_首页.配件热门_2_1_16" data-stat-aid="智能翻盖保护套" data-stat-id="智能翻盖保护套+stat_首页.配件热门_2_1_16" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-智能翻盖保护套+stat_首页.配件热门_2_1_16', '//item.mi.com/1160800009.html', 'pcpid']);">
                                                <img src="//i2.mifile.cn/a1/T1jsDgBXdv1RXrhCrK.jpg?width=150&amp;height=150" width="150" height="150" alt="智能翻盖保护套"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//item.mi.com/1160800009.html" data-stat-method="1_16" data-stat-index="2" data-stat-text="智能翻盖保护套" target="_blank" data-stat-pid="stat_首页.配件热门_2_1_16" data-stat-aid="智能翻盖保护套" data-stat-id="智能翻盖保护套+stat_首页.配件热门_2_1_16" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-智能翻盖保护套+stat_首页.配件热门_2_1_16', '//item.mi.com/1160800009.html', 'pcpid']);">小米手机5 智能翻盖保护套</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">49</span>
                                            元
                                        </p>
                                        <p class="rank">1.3万人评价</p>
                                        <div class="review-wrapper">
                                            <a href="//item.mi.com/1160800009.html" data-stat-method="1_16" data-stat-index="2" data-stat-text="智能翻盖保护套" target="_blank" data-stat-pid="stat_首页.配件热门_2_1_16" data-stat-aid="智能翻盖保护套" data-stat-id="智能翻盖保护套+stat_首页.配件热门_2_1_16" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-智能翻盖保护套+stat_首页.配件热门_2_1_16', '//item.mi.com/1160800009.html', 'pcpid']);">
                                                <span class="review">c超级喜欢，特别的棒，设计，选料，做工，细节都处理的...</span>
                                                <span class="author">
                                                    来自于 lisongkui 的评价
                                                    <span class="date"></span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2160800001">
                                        <div class="figure figure-img">
                                            <a href="//item.mi.com/1160800001.html" data-stat-method="1_16" data-stat-index="3" data-stat-text="户外防摔保护壳" target="_blank" data-stat-pid="stat_首页.配件热门_3_1_16" data-stat-aid="户外防摔保护壳" data-stat-id="户外防摔保护壳+stat_首页.配件热门_3_1_16" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-户外防摔保护壳+stat_首页.配件热门_3_1_16', '//item.mi.com/1160800001.html', 'pcpid']);">
                                                <img src="//i2.mifile.cn/a1/T1JgbjByhv1RXrhCrK.jpg?width=150&amp;height=150" width="150" height="150" alt="户外防摔保护壳"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//item.mi.com/1160800001.html" data-stat-method="1_16" data-stat-index="3" data-stat-text="户外防摔保护壳" target="_blank" data-stat-pid="stat_首页.配件热门_3_1_16" data-stat-aid="户外防摔保护壳" data-stat-id="户外防摔保护壳+stat_首页.配件热门_3_1_16" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-户外防摔保护壳+stat_首页.配件热门_3_1_16', '//item.mi.com/1160800001.html', 'pcpid']);">小米手机5 户外防摔保护壳</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">39</span>
                                            元
                                        </p>
                                        <p class="rank">4406人评价</p>
                                        <div class="review-wrapper">
                                            <a href="//item.mi.com/1160800001.html" data-stat-method="1_16" data-stat-index="3" data-stat-text="户外防摔保护壳" target="_blank" data-stat-pid="stat_首页.配件热门_3_1_16" data-stat-aid="户外防摔保护壳" data-stat-id="户外防摔保护壳+stat_首页.配件热门_3_1_16" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-户外防摔保护壳+stat_首页.配件热门_3_1_16', '//item.mi.com/1160800001.html', 'pcpid']);">
                                                <span class="review">套在手机上比较紧配，比较厚重，不过抗摔肯定很好</span>
                                                <span class="author">
                                                    来自于 Mi_96569467 的评价
                                                    <span class="date"></span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2153300067">
                                        <div class="figure figure-img">
                                            <a href="//item.mi.com/1153300034.html" data-stat-method="1_16" data-stat-index="4" data-stat-text="指环式防滑手机支架" target="_blank" data-stat-pid="stat_首页.配件热门_4_1_16" data-stat-aid="指环式防滑手机支架" data-stat-id="指环式防滑手机支架+stat_首页.配件热门_4_1_16" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-指环式防滑手机支架+stat_首页.配件热门_4_1_16', '//item.mi.com/1153300034.html', 'pcpid']);">
                                                <img src="//i2.mifile.cn/a1/T1COAjB7WT1RXrhCrK.jpg?width=150&amp;height=150" width="150" height="150" alt="指环式防滑手机支架"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//item.mi.com/1153300034.html" data-stat-method="1_16" data-stat-index="4" data-stat-text="指环式防滑手机支架" target="_blank" data-stat-pid="stat_首页.配件热门_4_1_16" data-stat-aid="指环式防滑手机支架" data-stat-id="指环式防滑手机支架+stat_首页.配件热门_4_1_16" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-指环式防滑手机支架+stat_首页.配件热门_4_1_16', '//item.mi.com/1153300034.html', 'pcpid']);">指环式防滑手机支架</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">12.5</span>
                                            元
                                        </p>
                                        <p class="rank">7189人评价</p>
                                        <div class="review-wrapper">
                                            <a href="//item.mi.com/1153300034.html" data-stat-method="1_16" data-stat-index="4" data-stat-text="指环式防滑手机支架" target="_blank" data-stat-pid="stat_首页.配件热门_4_1_16" data-stat-aid="指环式防滑手机支架" data-stat-id="指环式防滑手机支架+stat_首页.配件热门_4_1_16" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-指环式防滑手机支架+stat_首页.配件热门_4_1_16', '//item.mi.com/1153300034.html', 'pcpid']);">
                                                <span class="review">很好的设计，太实用了，更方便单手操作了，不用担心手机...</span>
                                                <span class="author">
                                                    来自于 疯流涕淌王 的评价
                                                    <span class="date"></span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2154600004">
                                        <div class="figure figure-img">
                                            <a href="//item.mi.com/1154600004.html" data-stat-method="1_2" data-stat-index="5" data-stat-text="米兔手机U盘升级版" target="_blank" data-stat-pid="stat_首页.配件热门_5_1_2" data-stat-aid="米兔手机U盘升级版" data-stat-id="米兔手机U盘升级版+stat_首页.配件热门_5_1_2" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-米兔手机U盘升级版+stat_首页.配件热门_5_1_2', '//item.mi.com/1154600004.html', 'pcpid']);">
                                                <img src="//i2.mifile.cn/a1/T1ZhD_BsxT1RXrhCrK.jpg?width=150&amp;height=150" width="150" height="150" alt="米兔手机U盘升级版"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//item.mi.com/1154600004.html" data-stat-method="1_2" data-stat-index="5" data-stat-text="米兔手机U盘升级版" target="_blank" data-stat-pid="stat_首页.配件热门_5_1_2" data-stat-aid="米兔手机U盘升级版" data-stat-id="米兔手机U盘升级版+stat_首页.配件热门_5_1_2" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-米兔手机U盘升级版+stat_首页.配件热门_5_1_2', '//item.mi.com/1154600004.html', 'pcpid']);">米兔手机U盘升级版</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">79</span>
                                            元
                                        </p>
                                        <p class="rank">2.9万人评价</p>
                                        <div class="review-wrapper">
                                            <a href="//item.mi.com/1154600004.html" data-stat-method="1_2" data-stat-index="5" data-stat-text="米兔手机U盘升级版" target="_blank" data-stat-pid="stat_首页.配件热门_5_1_2" data-stat-aid="米兔手机U盘升级版" data-stat-id="米兔手机U盘升级版+stat_首页.配件热门_5_1_2" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-米兔手机U盘升级版+stat_首页.配件热门_5_1_2', '//item.mi.com/1154600004.html', 'pcpid']);">
                                                <span class="review">米兔君的升级版，第二次买（第一次买的用了还不到一周就...</span>
                                                <span class="author">
                                                    来自于 167953031 的评价
                                                    <span class="date"></span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2160400025">
                                        <div class="figure figure-img">
                                            <a href="//item.mi.com/1160400025.html" data-stat-method="1_16" data-stat-index="6" data-stat-text="液态硅胶保护壳" target="_blank" data-stat-pid="stat_首页.配件热门_6_1_16" data-stat-aid="液态硅胶保护壳" data-stat-id="液态硅胶保护壳+stat_首页.配件热门_6_1_16" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-液态硅胶保护壳+stat_首页.配件热门_6_1_16', '//item.mi.com/1160400025.html', 'pcpid']);">
                                                <img src="//i2.mifile.cn/a1/T1jsbjBjKT1RXrhCrK.jpg?width=150&amp;height=150" width="150" height="150" alt="液态硅胶保护壳"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//item.mi.com/1160400025.html" data-stat-method="1_16" data-stat-index="6" data-stat-text="液态硅胶保护壳" target="_blank" data-stat-pid="stat_首页.配件热门_6_1_16" data-stat-aid="液态硅胶保护壳" data-stat-id="液态硅胶保护壳+stat_首页.配件热门_6_1_16" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-液态硅胶保护壳+stat_首页.配件热门_6_1_16', '//item.mi.com/1160400025.html', 'pcpid']);">小米手机5 液态硅胶保护壳</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">69</span>
                                            元
                                        </p>
                                        <p class="rank">3099人评价</p>
                                        <div class="review-wrapper">
                                            <a href="//item.mi.com/1160400025.html" data-stat-method="1_16" data-stat-index="6" data-stat-text="液态硅胶保护壳" target="_blank" data-stat-pid="stat_首页.配件热门_6_1_16" data-stat-aid="液态硅胶保护壳" data-stat-id="液态硅胶保护壳+stat_首页.配件热门_6_1_16" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-液态硅胶保护壳+stat_首页.配件热门_6_1_16', '//item.mi.com/1160400025.html', 'pcpid']);">
                                                <span class="review">手感超好，开口准确，配件还是得原厂的好之前一直挺喜欢...</span>
                                                <span class="author">
                                                    来自于 单翼天使jf 的评价
                                                    <span class="date"></span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-s" data-gid="2154900023">
                                        <div class="figure figure-img">
                                            <a href="//item.mi.com/1154900023.html" data-stat-method="1_16" data-stat-index="7" data-stat-text="青米USB快速充电数据线 橙色" target="_blank" data-stat-pid="stat_首页.配件热门_7_1_16" data-stat-aid="青米USB快速充电数据线橙色" data-stat-id="青米USB快速充电数据线橙色+stat_首页.配件热门_7_1_16" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-青米USB快速充电数据线橙色+stat_首页.配件热门_7_1_16', '//item.mi.com/1154900023.html', 'pcpid']);">
                                                <img src="//i2.mifile.cn/a1/T1l9WjBTbT1RXrhCrK.jpg?width=80&amp;height=80" width="80" height="80" alt="青米USB快速充电数据线 橙色"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//item.mi.com/1154900023.html" data-stat-method="1_16" data-stat-index="7" data-stat-text="青米USB快速充电数据线 橙色" target="_blank" data-stat-pid="stat_首页.配件热门_7_1_16" data-stat-aid="青米USB快速充电数据线橙色" data-stat-id="青米USB快速充电数据线橙色+stat_首页.配件热门_7_1_16" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-青米USB快速充电数据线橙色+stat_首页.配件热门_7_1_16', '//item.mi.com/1154900023.html', 'pcpid']);">青米USB快速充电数据线 橙色</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">14.9</span>
                                            元
                                        </p>
                                    </li>
                                    <li class="brick-item brick-item-s">
                                        <div class="figure figure-more">
                                            <a href="//list.mi.com/pjrm" target="_blank" data-stat-pid="stat_首页.配件热门_undefined_undefined" data-stat-id="undefined+stat_首页.配件热门_undefined_undefined" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-undefined+stat_首页.配件热门_undefined_undefined', '//list.mi.com/pjrm', 'pcpid']);"> <i class="iconfont"></i>
                                            </a>
                                        </div>
                                        <a class="more" href="//list.mi.com/pjrm" target="_blank" data-stat-pid="stat_首页.配件热门_undefined_undefined" data-stat-id="undefined+stat_首页.配件热门_undefined_undefined" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-undefined+stat_首页.配件热门_undefined_undefined', '//list.mi.com/pjrm', 'pcpid']);">
                                            浏览更多
                                            <small>热门</small>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="brick-list tab-content clearfix tab-content-hide">
                                    <li class="brick-item brick-item-m" data-gid="2160800014">
                                        <div class="figure figure-img">
                                            <a href="//item.mi.com/1160800014.html" data-stat-aid="AA12320" data-stat-pid="2_27_1_144" target="_blank" data-stat-id="AA12320+2_27_1_144" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12320+2_27_1_144', '//item.mi.com/1160800014.html', 'pcpid']);">
                                                <img src="//i1.mifile.cn/a1/T12AWgB5Vv1RXrhCrK!220x220.jpg" width="150" height="150" alt="小米手机5 智能翻盖保护套"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//item.mi.com/1160800014.html" data-stat-aid="AA12320" data-stat-pid="2_27_1_144" target="_blank" data-stat-id="AA12320+2_27_1_144" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12320+2_27_1_144', '//item.mi.com/1160800014.html', 'pcpid']);">小米手机5 智能翻盖保护套</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">49</span>
                                            元
                                        </p>
                                        <p class="rank">1.3万人评价</p>
                                        <div class="review-wrapper">
                                            <a href="//item.mi.com/1160800014.html" data-stat-aid="AA12320" data-stat-pid="2_27_1_144" target="_blank" data-stat-id="AA12320+2_27_1_144" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12320+2_27_1_144', '//item.mi.com/1160800014.html', 'pcpid']);">
                                                <span class="review">很好的。质量好。小米的品质。小米的心</span>
                                                <span class="author">
                                                    来自于 爱小米BDS 的评价
                                                    <span class="date" data-date="1456813500"></span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2161600006">
                                        <div class="figure figure-img">
                                            <a href="//item.mi.com/1161600009.html" data-stat-aid="AA12860" data-stat-pid="2_27_2_145" target="_blank" data-stat-id="AA12860+2_27_2_145" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12860+2_27_2_145', '//item.mi.com/1161600009.html', 'pcpid']);">
                                                <img src="//i1.mifile.cn/a1/T1XVWjBCYv1RXrhCrK!220x220.jpg" width="150" height="150" alt="小米Max 智能显示保护套"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//item.mi.com/1161600009.html" data-stat-aid="AA12860" data-stat-pid="2_27_2_145" target="_blank" data-stat-id="AA12860+2_27_2_145" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12860+2_27_2_145', '//item.mi.com/1161600009.html', 'pcpid']);">小米Max 智能显示保护套</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">59</span>
                                            元
                                        </p>
                                        <p class="rank">3046人评价</p>
                                        <div class="review-wrapper">
                                            <a href="//item.mi.com/1161600009.html" data-stat-aid="AA12860" data-stat-pid="2_27_2_145" target="_blank" data-stat-id="AA12860+2_27_2_145" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12860+2_27_2_145', '//item.mi.com/1161600009.html', 'pcpid']);">
                                                <span class="review">今天刚接收，试用了一下，非常好用，护屏一打开屏幕就亮...</span>
                                                <span class="author">
                                                    来自于 林中路 的评价
                                                    <span class="date" data-date="1463623380"></span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2142900027">
                                        <div class="figure figure-img">
                                            <a href="//item.mi.com/1142900047.html" data-stat-aid="AA10730" data-stat-pid="2_27_3_146" target="_blank" data-stat-id="AA10730+2_27_3_146" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA10730+2_27_3_146', '//item.mi.com/1142900047.html', 'pcpid']);">
                                                <img src="//i1.mifile.cn/a1/T11eEvBmYT1RXrhCrK!220x220.jpg" width="150" height="150" alt=" 小米手机4 智能唤醒翻盖保护套"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//item.mi.com/1142900047.html" data-stat-aid="AA10730" data-stat-pid="2_27_3_146" target="_blank" data-stat-id="AA10730+2_27_3_146" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA10730+2_27_3_146', '//item.mi.com/1142900047.html', 'pcpid']);">小米手机4 智能唤醒翻盖保护套</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">15</span>
                                            元 <del><span class="num">49</span>
                                                元</del>
                                        </p>
                                        <p class="rank">11.4万人评价</p>
                                        <div class="flag flag-saleoff">享4折</div>
                                        <div class="review-wrapper">
                                            <a href="//item.mi.com/1142900047.html" data-stat-aid="AA10730" data-stat-pid="2_27_3_146" target="_blank" data-stat-id="AA10730+2_27_3_146" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA10730+2_27_3_146', '//item.mi.com/1142900047.html', 'pcpid']);">
                                                <span class="review">贴好后，觉得效果不错，都习惯了它的智能唤醒，再去拿别...</span>
                                                <span class="author">
                                                    来自于 471329631 的评价
                                                    <span class="date" data-date="1435402320"></span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2161200053">
                                        <div class="figure figure-img">
                                            <a href="//item.mi.com/1161200045.html" data-stat-aid="AA12995" data-stat-pid="2_27_4_147" target="_blank" data-stat-id="AA12995+2_27_4_147" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12995+2_27_4_147', '//item.mi.com/1161200045.html', 'pcpid']);">
                                                <img src="//i1.mifile.cn/a1/T18sWvBTxv1RXrhCrK!220x220.jpg" width="150" height="150" alt="红米3高配版 炫彩翻盖保护套"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//item.mi.com/1161200045.html" data-stat-aid="AA12995" data-stat-pid="2_27_4_147" target="_blank" data-stat-id="AA12995+2_27_4_147" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12995+2_27_4_147', '//item.mi.com/1161200045.html', 'pcpid']);">红米3高配版 炫彩翻盖保护套</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">39</span>
                                            元
                                        </p>
                                        <p class="rank">3117人评价</p>
                                        <div class="review-wrapper">
                                            <a href="//item.mi.com/1161200045.html" data-stat-aid="AA12995" data-stat-pid="2_27_4_147" target="_blank" data-stat-id="AA12995+2_27_4_147" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12995+2_27_4_147', '//item.mi.com/1161200045.html', 'pcpid']);">
                                                <span class="review">好好看，好喜欢，，友友们来购买噢</span>
                                                <span class="author">
                                                    来自于 729491642文 的评价
                                                    <span class="date" data-date="1465966380"></span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2154800017">
                                        <div class="figure figure-img">
                                            <a href="//item.mi.com/1154800016.html" data-stat-aid="AA13141" data-stat-pid="2_27_5_148" target="_blank" data-stat-id="AA13141+2_27_5_148" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA13141+2_27_5_148', '//item.mi.com/1154800016.html', 'pcpid']);">
                                                <img src="//i1.mifile.cn/a1/T10Eb_BmAv1RXrhCrK!220x220.jpg" width="150" height="150" alt="红米Note3 炫彩翻页保护套"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//item.mi.com/1154800016.html" data-stat-aid="AA13141" data-stat-pid="2_27_5_148" target="_blank" data-stat-id="AA13141+2_27_5_148" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA13141+2_27_5_148', '//item.mi.com/1154800016.html', 'pcpid']);">红米Note3 炫彩翻页保护套</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">39</span>
                                            元
                                        </p>
                                        <p class="rank">2万人评价</p>
                                        <div class="review-wrapper">
                                            <a href="//item.mi.com/1154800016.html" data-stat-aid="AA13141" data-stat-pid="2_27_5_148" target="_blank" data-stat-id="AA13141+2_27_5_148" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA13141+2_27_5_148', '//item.mi.com/1154800016.html', 'pcpid']);">
                                                <span class="review">大小合适，特别好，质量和颜色都非常棒！</span>
                                                <span class="author">
                                                    来自于 142010366 的评价
                                                    <span class="date" data-date="1450018080"></span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="1160100013">
                                        <div class="figure figure-img">
                                            <a href="//item.mi.com/1160100013.html" data-stat-aid="AA12351" data-stat-pid="2_27_6_149" target="_blank" data-stat-id="AA12351+2_27_6_149" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12351+2_27_6_149', '//item.mi.com/1160100013.html', 'pcpid']);">
                                                <img src="//i3.mifile.cn/a4/T1WLx_BgVv1RXrhCrK.jpg" width="150" height="150" alt="红米3标准版 炫彩翻盖保护套"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//item.mi.com/1160100013.html" data-stat-aid="AA12351" data-stat-pid="2_27_6_149" target="_blank" data-stat-id="AA12351+2_27_6_149" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12351+2_27_6_149', '//item.mi.com/1160100013.html', 'pcpid']);">红米3标准版 炫彩翻盖保护套</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">29</span>
                                            元 <del><span class="num">39</span>
                                                元</del>
                                        </p>
                                        <p class="rank">6516人评价</p>
                                        <div class="flag flag-saleoff">享8折</div>
                                        <div class="review-wrapper">
                                            <a href="//item.mi.com/1160100013.html" data-stat-aid="AA12351" data-stat-pid="2_27_6_149" target="_blank" data-stat-id="AA12351+2_27_6_149" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12351+2_27_6_149', '//item.mi.com/1160100013.html', 'pcpid']);">
                                                <span class="review">质量很好，老婆很喜欢</span>
                                                <span class="author">
                                                    来自于 风中的云345 的评价
                                                    <span class="date" data-date="1453804860"></span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="1153000016">
                                        <div class="figure figure-img">
                                            <a href="//item.mi.com/1153000016.html" data-stat-aid="AA12623" data-stat-pid="2_27_7_150" target="_blank" data-stat-id="AA12623+2_27_7_150" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12623+2_27_7_150', '//item.mi.com/1153000016.html', 'pcpid']);">
                                                <img src="//i3.mifile.cn/a4/T17PDjBbbT1RXrhCrK.jpg" width="150" height="150" alt="红米Note2 炫彩翻盖保护套"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//item.mi.com/1153000016.html" data-stat-aid="AA12623" data-stat-pid="2_27_7_150" target="_blank" data-stat-id="AA12623+2_27_7_150" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12623+2_27_7_150', '//item.mi.com/1153000016.html', 'pcpid']);">红米Note2 炫彩翻盖保护套</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">25</span>
                                            元
                                            <del>
                                                <span class="num">39</span>
                                                元
                                            </del>
                                        </p>
                                        <p class="rank">2.1万人评价</p>
                                        <div class="flag flag-saleoff">享7折</div>
                                        <div class="review-wrapper">
                                            <a href="//item.mi.com/1153000016.html" data-stat-aid="AA12623" data-stat-pid="2_27_7_150" target="_blank" data-stat-id="AA12623+2_27_7_150" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12623+2_27_7_150', '//item.mi.com/1153000016.html', 'pcpid']);">
                                                <span class="review">材质贴合度都很好。最愉快的一次小米购物，到货也快</span>
                                                <span class="author">
                                                    来自于 喂养心中的狼 的评价
                                                    <span class="date" data-date="1439855400"></span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-s" data-gid="2155100017">
                                        <div class="figure figure-img">
                                            <a href="//item.mi.com/1155100020.html" data-stat-aid="AA12357" data-stat-pid="2_27_8_151" target="_blank" data-stat-id="AA12357+2_27_8_151" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12357+2_27_8_151', '//item.mi.com/1155100020.html', 'pcpid']);">
                                                <img src="//i1.mifile.cn/a1/T1QKJ_BvLv1RXrhCrK!220x220.jpg" width="80" height="80" alt="平板2保护套"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//item.mi.com/1155100020.html" data-stat-aid="AA12357" data-stat-pid="2_27_8_151" target="_blank" data-stat-id="AA12357+2_27_8_151" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12357+2_27_8_151', '//item.mi.com/1155100020.html', 'pcpid']);">平板2保护套</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">69</span>
                                            元
                                        </p>
                                    </li>
                                    <li class="brick-item brick-item-s">
                                        <div class="figure figure-more">
                                            <a href="//list.mi.com/7" target="_blank" data-stat-id="9e3ff122784691fa" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-9e3ff122784691fa', '//list.mi.com/7', 'pcpid']);"> <i class="iconfont"></i>
                                            </a>
                                        </div>
                                        <a class="more" href="//list.mi.com/7" target="_blank" data-stat-id="268b4af5d3511d2b" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-268b4af5d3511d2b', '//list.mi.com/7', 'pcpid']);">
                                            浏览更多
                                            <small>保护套</small>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="brick-list tab-content clearfix tab-content-hide">
                                    <li class="brick-item brick-item-m" data-gid="2160800004">
                                        <div class="figure figure-img">
                                            <a href="//item.mi.com/1160800004.html" data-stat-aid="AA12833" data-stat-pid="2_29_1_160" target="_blank" data-stat-id="AA12833+2_29_1_160" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12833+2_29_1_160', '//item.mi.com/1160800004.html', 'pcpid']);">
                                                <img src="//i3.mifile.cn/a4/T1cVLjBX_v1RXrhCrK.jpg" width="150" height="150" alt="小米手机5 极薄防蓝光贴膜"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//item.mi.com/1160800004.html" data-stat-aid="AA12833" data-stat-pid="2_29_1_160" target="_blank" data-stat-id="AA12833+2_29_1_160" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12833+2_29_1_160', '//item.mi.com/1160800004.html', 'pcpid']);">小米手机5 极薄防蓝光贴膜</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">49</span>
                                            元
                                        </p>
                                        <p class="rank">5304人评价</p>
                                        <div class="review-wrapper">
                                            <a href="//item.mi.com/1160800004.html" data-stat-aid="AA12833" data-stat-pid="2_29_1_160" target="_blank" data-stat-id="AA12833+2_29_1_160" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12833+2_29_1_160', '//item.mi.com/1160800004.html', 'pcpid']);">
                                                <span class="review">超级棒的贴膜，手感一级棒！</span>
                                                <span class="author">
                                                    来自于 萍踪浪影 的评价
                                                    <span class="date" data-date="1457574720"></span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2161600026">
                                        <div class="figure figure-img">
                                            <a href="//item.mi.com/1161600029.html" data-stat-aid="AA12859" data-stat-pid="2_29_2_161" target="_blank" data-stat-id="AA12859+2_29_2_161" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12859+2_29_2_161', '//item.mi.com/1161600029.html', 'pcpid']);">
                                                <img src="//i1.mifile.cn/a1/T1y7JQBbCT1RXrhCrK!220x220.jpg" width="150" height="150" alt="小米Max 标准高透贴膜"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//item.mi.com/1161600029.html" data-stat-aid="AA12859" data-stat-pid="2_29_2_161" target="_blank" data-stat-id="AA12859+2_29_2_161" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12859+2_29_2_161', '//item.mi.com/1161600029.html', 'pcpid']);">小米Max 标准高透贴膜</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">19</span>
                                            元
                                        </p>
                                        <p class="rank">4371人评价</p>
                                        <div class="review-wrapper">
                                            <a href="//item.mi.com/1161600029.html" data-stat-aid="AA12859" data-stat-pid="2_29_2_161" target="_blank" data-stat-id="AA12859+2_29_2_161" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12859+2_29_2_161', '//item.mi.com/1161600029.html', 'pcpid']);">
                                                <span class="review">很薄很亮.透光性很强，值得拥有。</span>
                                                <span class="author">
                                                    来自于 大海 的评价
                                                    <span class="date" data-date="1463904000"></span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2154800023">
                                        <div class="figure figure-img">
                                            <a href="//item.mi.com/1154800022.html" data-stat-aid="AA13169" data-stat-pid="2_29_3_162" target="_blank" data-stat-id="AA13169+2_29_3_162" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA13169+2_29_3_162', '//item.mi.com/1154800022.html', 'pcpid']);">
                                                <img src="//i1.mifile.cn/a1/T1SSJ_B4E_1RXrhCrK!220x220.jpg" width="150" height="150" alt="小米平板2 标准高透贴膜"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//item.mi.com/1154800022.html" data-stat-aid="AA13169" data-stat-pid="2_29_3_162" target="_blank" data-stat-id="AA13169+2_29_3_162" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA13169+2_29_3_162', '//item.mi.com/1154800022.html', 'pcpid']);">小米平板2 标准高透贴膜</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">29</span>
                                            元
                                        </p>
                                        <p class="rank">1204人评价</p>
                                        <div class="review-wrapper">
                                            <a href="//item.mi.com/1154800022.html" data-stat-aid="AA13169" data-stat-pid="2_29_3_162" target="_blank" data-stat-id="AA13169+2_29_3_162" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA13169+2_29_3_162', '//item.mi.com/1154800022.html', 'pcpid']);">
                                                <span class="review">挺好用的，发货也快，清晰！</span>
                                                <span class="author">
                                                    来自于 卖蘑菇的小和尚 的评价
                                                    <span class="date" data-date="1457655300"></span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="1154800026">
                                        <div class="figure figure-img">
                                            <a href="//item.mi.com/1154800026.html" data-stat-aid="AA12576" data-stat-pid="2_29_4_163" target="_blank" data-stat-id="AA12576+2_29_4_163" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12576+2_29_4_163', '//item.mi.com/1154800026.html', 'pcpid']);">
                                                <img src="//i3.mifile.cn/a4/T1qdEgBKKv1RXrhCrK.jpg" width="150" height="150" alt="红米Note3 钢化玻璃膜"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//item.mi.com/1154800026.html" data-stat-aid="AA12576" data-stat-pid="2_29_4_163" target="_blank" data-stat-id="AA12576+2_29_4_163" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12576+2_29_4_163', '//item.mi.com/1154800026.html', 'pcpid']);">红米Note3 钢化玻璃膜</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">19</span>
                                            元
                                        </p>
                                        <p class="rank">3.3万人评价</p>
                                        <div class="review-wrapper">
                                            <a href="//item.mi.com/1154800026.html" data-stat-aid="AA12576" data-stat-pid="2_29_4_163" target="_blank" data-stat-id="AA12576+2_29_4_163" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12576+2_29_4_163', '//item.mi.com/1154800026.html', 'pcpid']);">
                                                <span class="review">质量有保证，原装就是好</span>
                                                <span class="author">
                                                    来自于 Danny_Wong 的评价
                                                    <span class="date" data-date="1448962020"></span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2161200048">
                                        <div class="figure figure-img">
                                            <a href="//item.mi.com/1161200040.html" data-stat-aid="AA12302" data-stat-pid="2_29_5_164" target="_blank" data-stat-id="AA12302+2_29_5_164" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12302+2_29_5_164', '//item.mi.com/1161200040.html', 'pcpid']);">
                                                <img src="//i1.mifile.cn/a1/pms_1465286028.31991854!220x220.jpg" width="150" height="150" alt="红米手机3 钢化玻璃贴膜"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//item.mi.com/1161200040.html" data-stat-aid="AA12302" data-stat-pid="2_29_5_164" target="_blank" data-stat-id="AA12302+2_29_5_164" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12302+2_29_5_164', '//item.mi.com/1161200040.html', 'pcpid']);">红米手机3 钢化玻璃贴膜</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">19</span>
                                            元
                                        </p>
                                        <p class="rank">1949人评价</p>
                                        <div class="review-wrapper">
                                            <a href="//item.mi.com/1161200040.html" data-stat-aid="AA12302" data-stat-pid="2_29_5_164" target="_blank" data-stat-id="AA12302+2_29_5_164" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12302+2_29_5_164', '//item.mi.com/1161200040.html', 'pcpid']);">
                                                <span class="review">质量很好，精致标准！透度挺好的</span>
                                                <span class="author">
                                                    来自于 中华 的评价
                                                    <span class="date" data-date="1465560420"></span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2160800006">
                                        <div class="figure figure-img">
                                            <a href="//item.mi.com/1160800006.html" data-stat-aid="AA12975" data-stat-pid="2_29_6_165" target="_blank" data-stat-id="AA12975+2_29_6_165" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12975+2_29_6_165', '//item.mi.com/1160800006.html', 'pcpid']);">
                                                <img src="//i1.mifile.cn/a1/T1t2K_B4L_1RXrhCrK!220x220.jpg" width="150" height="150" alt="小米手机5 钢化玻璃贴膜"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//item.mi.com/1160800006.html" data-stat-aid="AA12975" data-stat-pid="2_29_6_165" target="_blank" data-stat-id="AA12975+2_29_6_165" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12975+2_29_6_165', '//item.mi.com/1160800006.html', 'pcpid']);">小米手机5 钢化玻璃贴膜</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">29</span>
                                            元
                                        </p>
                                        <p class="rank">2.3万人评价</p>
                                        <div class="review-wrapper">
                                            <a href="//item.mi.com/1160800006.html" data-stat-aid="AA12975" data-stat-pid="2_29_6_165" target="_blank" data-stat-id="AA12975+2_29_6_165" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12975+2_29_6_165', '//item.mi.com/1160800006.html', 'pcpid']);">
                                                <span class="review">手感很好，是高清的不错</span>
                                                <span class="author">
                                                    来自于 俄方热 的评价
                                                    <span class="date" data-date="1456834740"></span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2153300022">
                                        <div class="figure figure-img">
                                            <a href="//item.mi.com/1153300013.html" data-stat-aid="AA12843" data-stat-pid="2_29_7_166" target="_blank" data-stat-id="AA12843+2_29_7_166" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12843+2_29_7_166', '//item.mi.com/1153300013.html', 'pcpid']);">
                                                <img src="//i1.mifile.cn/a1/T1RxA_BgEv1RXrhCrK!220x220.jpg" width="150" height="150" alt="红米Note2 标准高透贴膜"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//item.mi.com/1153300013.html" data-stat-aid="AA12843" data-stat-pid="2_29_7_166" target="_blank" data-stat-id="AA12843+2_29_7_166" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12843+2_29_7_166', '//item.mi.com/1153300013.html', 'pcpid']);">红米Note2 标准高透贴膜</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">6.9</span>
                                            元
                                            <del>
                                                <span class="num">19</span>
                                                元
                                            </del>
                                        </p>
                                        <p class="rank">1.6万人评价</p>
                                        <div class="flag flag-saleoff">享4折</div>
                                        <div class="review-wrapper">
                                            <a href="//item.mi.com/1153300013.html" data-stat-aid="AA12843" data-stat-pid="2_29_7_166" target="_blank" data-stat-id="AA12843+2_29_7_166" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12843+2_29_7_166', '//item.mi.com/1153300013.html', 'pcpid']);">
                                                <span class="review">不错，加上练习膜一共3张，我自己贴的</span>
                                                <span class="author">
                                                    来自于 810098799 的评价
                                                    <span class="date" data-date="1439858760"></span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-s" data-gid="2150300012">
                                        <div class="figure figure-img">
                                            <a href="//item.mi.com/1150300012.html" data-stat-aid="AA12779" data-stat-pid="2_29_8_167" target="_blank" data-stat-id="AA12779+2_29_8_167" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12779+2_29_8_167', '//item.mi.com/1150300012.html', 'pcpid']);">
                                                <img src="//i1.mifile.cn/a1/T1fdWgBgJv1RXrhCrK!220x220.jpg" width="80" height="80" alt="小米Note 标准高透贴膜"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//item.mi.com/1150300012.html" data-stat-aid="AA12779" data-stat-pid="2_29_8_167" target="_blank" data-stat-id="AA12779+2_29_8_167" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12779+2_29_8_167', '//item.mi.com/1150300012.html', 'pcpid']);">小米Note 标准高透贴膜</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">19</span>
                                            元
                                        </p>
                                    </li>
                                    <li class="brick-item brick-item-s">
                                        <div class="figure figure-more">
                                            <a href="//list.mi.com/9" target="_blank" data-stat-id="3c79ffc788b337bc" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-3c79ffc788b337bc', '//list.mi.com/9', 'pcpid']);">
                                                <i class="iconfont"></i>
                                            </a>
                                        </div>
                                        <a class="more" href="//list.mi.com/9" target="_blank" data-stat-id="2e205b008dcd43d6" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-2e205b008dcd43d6', '//list.mi.com/9', 'pcpid']);">
                                            浏览更多
                                            <small>贴膜</small>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="brick-list tab-content clearfix tab-content-hide">
                                    <li class="brick-item brick-item-m" data-gid="2152500009">
                                        <div class="figure figure-img">
                                            <a href="//item.mi.com/1152500016.html" data-stat-aid="AA12033" data-stat-pid="2_30_1_168" target="_blank" data-stat-id="AA12033+2_30_1_168" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12033+2_30_1_168', '//item.mi.com/1152500016.html', 'pcpid']);">
                                                <img src="//i1.mifile.cn/a1/T1xXxQBCVT1RXrhCrK!220x220.jpg" width="150" height="150" alt="小蚁蓝牙遥控器"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//item.mi.com/1152500016.html" data-stat-aid="AA12033" data-stat-pid="2_30_1_168" target="_blank" data-stat-id="AA12033+2_30_1_168" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12033+2_30_1_168', '//item.mi.com/1152500016.html', 'pcpid']);">小蚁蓝牙遥控器</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">39</span>
                                            元
                                        </p>
                                        <p class="rank">2753人评价</p>
                                        <div class="review-wrapper">
                                            <a href="//item.mi.com/1152500016.html" data-stat-aid="AA12033" data-stat-pid="2_30_1_168" target="_blank" data-stat-id="AA12033+2_30_1_168" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12033+2_30_1_168', '//item.mi.com/1152500016.html', 'pcpid']);">
                                                <span class="review">小蚁运动相机的必备产品，一次蓝牙配对绑定，之后开机就...</span>
                                                <span class="author">
                                                    来自于 190244633 的评价
                                                    <span class="date" data-date="1435363740"></span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2153300069">
                                        <div class="figure figure-img">
                                            <a href="//item.mi.com/1153300036.html" data-stat-aid="AA12531" data-stat-pid="2_30_2_169" target="_blank" data-stat-id="AA12531+2_30_2_169" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12531+2_30_2_169', '//item.mi.com/1153300036.html', 'pcpid']);">
                                                <img src="//i1.mifile.cn/a1/T1j_D_BQWT1RXrhCrK!220x220.jpg" width="150" height="150" alt="指环式防滑手机支架"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//item.mi.com/1153300036.html" data-stat-aid="AA12531" data-stat-pid="2_30_2_169" target="_blank" data-stat-id="AA12531+2_30_2_169" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12531+2_30_2_169', '//item.mi.com/1153300036.html', 'pcpid']);">指环式防滑手机支架</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">12.5</span>
                                            元
                                        </p>
                                        <p class="rank">7189人评价</p>
                                        <div class="review-wrapper">
                                            <a href="//item.mi.com/1153300036.html" data-stat-aid="AA12531" data-stat-pid="2_30_2_169" target="_blank" data-stat-id="AA12531+2_30_2_169" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12531+2_30_2_169', '//item.mi.com/1153300036.html', 'pcpid']);">
                                                <span class="review">非常好， 360°轉可橫可直， 樣子優雅， 價錢實際。</span>
                                                <span class="author">
                                                    来自于 1593506696 的评价
                                                    <span class="date" data-date="1448327220"></span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2145000002">
                                        <div class="figure figure-img">
                                            <a href="//www.mi.com/shb/" data-stat-aid="AA12322" data-stat-pid="2_30_3_170" target="_blank" data-stat-id="AA12322+2_30_3_170" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12322+2_30_3_170', '//www.mi.com/shb/', 'pcpid']);">
                                                <img src="//i1.mifile.cn/a1/T1WTEvBmKT1RXrhCrK!220x220.jpg" width="150" height="150" alt="小米蓝牙手柄"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//www.mi.com/shb/" data-stat-aid="AA12322" data-stat-pid="2_30_3_170" target="_blank" data-stat-id="AA12322+2_30_3_170" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12322+2_30_3_170', '//www.mi.com/shb/', 'pcpid']);">小米蓝牙手柄</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">99</span>
                                            元
                                        </p>
                                        <p class="rank">2.6万人评价</p>
                                        <div class="review-wrapper">
                                            <a href="//www.mi.com/shb/" data-stat-aid="AA12322" data-stat-pid="2_30_3_170" target="_blank" data-stat-id="AA12322+2_30_3_170" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12322+2_30_3_170', '//www.mi.com/shb/', 'pcpid']);">
                                                <span class="review">手感超好，联上小米电视玩游戏超爽，就是电视端游戏有待...</span>
                                                <span class="author">
                                                    来自于 陈峪汀 的评价
                                                    <span class="date" data-date="1437319740"></span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2154200017">
                                        <div class="figure figure-img">
                                            <a href="//item.mi.com/1154200029.html" data-stat-aid="AA12625" data-stat-pid="2_30_4_171" target="_blank" data-stat-id="AA12625+2_30_4_171" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12625+2_30_4_171', '//item.mi.com/1154200029.html', 'pcpid']);">
                                                <img src="//i1.mifile.cn/a1/T11oW_B4dv1RXrhCrK!220x220.jpg" width="150" height="150" alt="蓝牙语音体感遥控器"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//item.mi.com/1154200029.html" data-stat-aid="AA12625" data-stat-pid="2_30_4_171" target="_blank" data-stat-id="AA12625+2_30_4_171" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12625+2_30_4_171', '//item.mi.com/1154200029.html', 'pcpid']);">蓝牙语音体感遥控器</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">99</span>
                                            元
                                        </p>
                                        <p class="rank">2172人评价</p>
                                        <div class="review-wrapper">
                                            <a href="//item.mi.com/1154200029.html" data-stat-aid="AA12625" data-stat-pid="2_30_4_171" target="_blank" data-stat-id="AA12625+2_30_4_171" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12625+2_30_4_171', '//item.mi.com/1154200029.html', 'pcpid']);">
                                                <span class="review">语音识别很高，蓝牙遥控方便！</span>
                                                <span class="author">
                                                    来自于 笛哥520 的评价
                                                    <span class="date" data-date="1451031600"></span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2153900018">
                                        <div class="figure figure-img">
                                            <a href="//item.mi.com/1153900018.html" data-stat-aid="AA12670" data-stat-pid="2_30_5_172" target="_blank" data-stat-id="AA12670+2_30_5_172" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12670+2_30_5_172', '//item.mi.com/1153900018.html', 'pcpid']);">
                                                <img src="//i1.mifile.cn/a1/T1juCgBgxT1RXrhCrK!220x220.jpg" width="150" height="150" alt="手机USB Type-C数据线"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//item.mi.com/1153900018.html" data-stat-aid="AA12670" data-stat-pid="2_30_5_172" target="_blank" data-stat-id="AA12670+2_30_5_172" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12670+2_30_5_172', '//item.mi.com/1153900018.html', 'pcpid']);">手机USB Type-C数据线</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">39</span>
                                            元
                                        </p>
                                        <p class="rank">1.3万人评价</p>
                                        <div class="review-wrapper">
                                            <a href="//item.mi.com/1153900018.html" data-stat-aid="AA12670" data-stat-pid="2_30_5_172" target="_blank" data-stat-id="AA12670+2_30_5_172" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12670+2_30_5_172', '//item.mi.com/1153900018.html', 'pcpid']);">
                                                <span class="review">做工精细，支持小米。</span>
                                                <span class="author">
                                                    来自于 223434809 的评价
                                                    <span class="date" data-date="1448638500"></span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2150500004">
                                        <div class="figure figure-img">
                                            <a href="//item.mi.com/1150500009.html" data-stat-aid="AA12573" data-stat-pid="2_30_6_173" target="_blank" data-stat-id="AA12573+2_30_6_173" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12573+2_30_6_173', '//item.mi.com/1150500009.html', 'pcpid']);">
                                                <img src="//i1.mifile.cn/a1/T13y_vBgJT1RXrhCrK!220x220.jpg" width="150" height="150" alt="小米千兆网线"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//item.mi.com/1150500009.html" data-stat-aid="AA12573" data-stat-pid="2_30_6_173" target="_blank" data-stat-id="AA12573+2_30_6_173" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12573+2_30_6_173', '//item.mi.com/1150500009.html', 'pcpid']);">小米千兆网线</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">14.9</span>
                                            元
                                        </p>
                                        <p class="rank">2.9万人评价</p>
                                        <div class="review-wrapper">
                                            <a href="//item.mi.com/1150500009.html" data-stat-aid="AA12573" data-stat-pid="2_30_6_173" target="_blank" data-stat-id="AA12573+2_30_6_173" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12573+2_30_6_173', '//item.mi.com/1150500009.html', 'pcpid']);">
                                                <span class="review">千兆线中算便宜的了，做工也精良，连接路由器与光猫的</span>
                                                <span class="author">
                                                    来自于 al冲冠一怒 的评价
                                                    <span class="date" data-date="1437603240"></span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-m" data-gid="2154100012">
                                        <div class="figure figure-img">
                                            <a href="//item.mi.com/1154100024.html" data-stat-aid="AA12218" data-stat-pid="2_30_7_174" target="_blank" data-stat-id="AA12218+2_30_7_174" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12218+2_30_7_174', '//item.mi.com/1154100024.html', 'pcpid']);">
                                                <img src="//i1.mifile.cn/a1/T1Zp__B5Ev1RXrhCrK!220x220.jpg" width="150" height="150" alt="ZMI无限拓展数据线"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//item.mi.com/1154100024.html" data-stat-aid="AA12218" data-stat-pid="2_30_7_174" target="_blank" data-stat-id="AA12218+2_30_7_174" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12218+2_30_7_174', '//item.mi.com/1154100024.html', 'pcpid']);">ZMI无限拓展数据线</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">29</span>
                                            元
                                        </p>
                                        <p class="rank">4310人评价</p>
                                        <div class="review-wrapper">
                                            <a href="//item.mi.com/1154100024.html" data-stat-aid="AA12218" data-stat-pid="2_30_7_174" target="_blank" data-stat-id="AA12218+2_30_7_174" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA12218+2_30_7_174', '//item.mi.com/1154100024.html', 'pcpid']);">
                                                <span class="review">很不错。做工也很精致。很方便</span>
                                                <span class="author">
                                                    来自于 927667257 的评价
                                                    <span class="date" data-date="1448669340"></span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="brick-item brick-item-s" data-gid="2154900026">
                                        <div class="figure figure-img">
                                            <a href="//item.mi.com/1154900025.html" data-stat-aid="AA13180" data-stat-pid="2_30_8_175" target="_blank" data-stat-id="AA13180+2_30_8_175" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA13180+2_30_8_175', '//item.mi.com/1154900025.html', 'pcpid']);">
                                                <img src="//i1.mifile.cn/a1/T1_7KgB4Jv1RXrhCrK!220x220.jpg" width="80" height="80" alt="青米USB快速充电数据线"></a>
                                        </div>
                                        <h3 class="title">
                                            <a href="//item.mi.com/1154900025.html" data-stat-aid="AA13180" data-stat-pid="2_30_8_175" target="_blank" data-stat-id="AA13180+2_30_8_175" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA13180+2_30_8_175', '//item.mi.com/1154900025.html', 'pcpid']);">青米USB快速充电数据线</a>
                                        </h3>
                                        <p class="price">
                                            <span class="num">24.9</span>
                                            元
                                        </p>
                                    </li>
                                    <li class="brick-item brick-item-s">
                                        <div class="figure figure-more">
                                            <a href="//list.mi.com/others" target="_blank" data-stat-id="29565dc426bded0f" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-29565dc426bded0f', '//list.mi.com/others', 'pcpid']);">
                                                <i class="iconfont"></i>
                                            </a>
                                        </div>
                                        <a class="more" href="//list.mi.com/others" target="_blank" data-stat-id="5e8c3c6228b533ae" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-5e8c3c6228b533ae', '//list.mi.com/others', 'pcpid']);">
                                            浏览更多
                                            <small>其他配件</small>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- 配件 end-->
                </div>
            </div>



            <div id="video" class="home-video-box xm-plain-box J_itemBox J_videoBox is-visible">
                <div class="box-hd">
                    <h2 class="title">视频</h2>
                    <div class="more J_brickNav">

                    </div>
                </div>
                <div class="box-bd J_brickBd">
                    <!-- 视频 start -->
                    <ul class="video-list clearfix">
                        <li class="video-item video-item-first">
                            <div class="figure figure-img">
                                <a class="J_videoTrigger" href="javascript: void(0);" data-stat-aid="AA12841" data-stat-pid="2_43_1_245" data-video="http://player.youku.com/embed/XMTU2NDM3NjEzMg==" data-video-title="小米Max 绝美外观视频" >
                                    <img src="//i3.mifile.cn/a4/T1v3LgBTxv1RXrhCrK.jpg" width="296" height="180" alt="小米Max 绝美外观视频">
                                    <span class="play"> <i class="iconfont"></i>
                                    </span>
                                </a>
                            </div>
                            <h3 class="title">
                                <a class="J_videoTrigger" href="javascript: void(0);" data-stat-aid="AA12841" data-stat-pid="2_43_1_245" data-video="http://player.youku.com/embed/XMTU2NDM3NjEzMg==" data-video-title="小米Max 绝美外观视频" >小米Max 绝美外观视频</a>
                            </h3>
                            <p class="desc">6.44" 大屏黄金尺寸，看什么都震撼</p>
                        </li>
                        <li class="video-item">
                            <div class="figure figure-img">
                                <a class="J_videoTrigger" href="javascript: void(0);" data-stat-aid="AA13049" data-stat-pid="2_43_2_246" data-video="http://player.youku.com/embed/XMTU5ODI2NzMyMA==" data-video-title="手机摄影，防抖绷带（教程）" title="点击播放视频" >
                                    <img src="http://i3.mifile.cn/a4/66cbfd29-8e48-4ed1-aee0-e0e46f4cdc8b" width="296" height="180" alt="手机摄影，防抖绷带（教程）">
                                    <span class="play"> <i class="iconfont"></i>
                                    </span>
                                </a>
                            </div>
                            <h3 class="title">
                                <a class="J_videoTrigger" href="javascript: void(0);" data-stat-aid="AA13049" data-stat-pid="2_43_2_246" data-video="http://player.youku.com/embed/XMTU5ODI2NzMyMA==" data-video-title="手机摄影，防抖绷带（教程）" data-stat-id="AA13049+2_43_2_246">手机摄影，防抖绷带（教程）</a>
                            </h3>
                            <p class="desc">一分钟，拍照手抖迅速见效</p>
                        </li>
                        <li class="video-item">
                            <div class="figure figure-img">
                                <a class="J_videoTrigger" href="javascript: void(0);" data-stat-aid="AA12771" data-stat-pid="2_43_3_247" data-video="http://player.youku.com/embed/XMTU2MTQ2Njg3Ng==" data-video-title="笑喷了，沈腾爆笑出演，6集联播" title="点击播放视频">
                                    <img src="//i3.mifile.cn/a4/T1k9CgB7Av1RXrhCrK.jpg" width="296" height="180" alt="笑喷了，沈腾爆笑出演，6集联播">
                                    <span class="play">
                                        <i class="iconfont"></i>
                                    </span>
                                </a>
                            </div>
                            <h3 class="title">
                                <a class="J_videoTrigger" href="javascript: void(0);" data-stat-aid="AA12771" data-stat-pid="2_43_3_247" data-video="XMTU2MTQ2Njg3Ng==" data-video-title="笑喷了，沈腾爆笑出演，6集联播" >笑喷了，沈腾爆笑出演，6集联播</a>
                            </h3>
                            <p class="desc">小米Max沈腾爆笑预告全集</p>
                        </li>
                        <li class="video-item">
                            <div class="figure figure-img">
                                <a class="J_videoTrigger" href="javascript: void(0);" data-stat-aid="AA12405" data-stat-pid="2_43_4_249" data-video="XMTUwMTEyMjk0MA==" data-video-title="15秒了解小米5 有多快" title="点击播放视频">
                                    <img src="//i3.mifile.cn/a4/T1ZOZgBmYv1RXrhCrK.jpg" width="296" height="180" alt="15秒了解小米5 有多快">
                                    <span class="play">
                                        <i class="iconfont"></i>
                                    </span>
                                </a>
                            </div>
                            <h3 class="title">
                                <a class="J_videoTrigger" href="javascript: void(0);" data-stat-aid="AA12405" data-stat-pid="2_43_4_249" data-video="XMTUwMTEyMjk0MA==" data-video-title="15秒了解小米5 有多快">15秒了解小米5 有多快</a>
                            </h3>
                            <p class="desc">华少用超快语速告诉你小米5 到底有多快</p>
                        </li>
                    </ul>
                    <!-- 视频 end -->
                </div>
            </div>
        </div>
    </div>

    <div id="J_modalVideo" class="modal modal-video fade modal-hide">
        <div class="modal-hd">
            <h3 class="title">视频播放</h3>
            <a class="close" data-dismiss="modal" href="javascript: void(0);">
                <i class="iconfont">&#xe602;</i>
            </a>
        </div>
        <div class="modal-bd">
            <div class="loading">
                <div class="loader"></div>
            </div>
        </div>
    </div>
@endsection