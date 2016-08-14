<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <title>{{Config::get('web_config.web_title')}} - {{Config::get('web_config.seo_title')}}</title>
    <meta name="keywords" content="{{Config::get('web_config.keywords')}}" />
    <meta name="description" content="{{Config::get('web_config.description')}}" />

    <link rel="stylesheet" type="text/css" href="{{asset('css/libs.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/landing.css')}}">

</head>
<body>
<div class="navbar navbar-default navbar-fixed-top navbar-qshang hidden-xs">
    <div class="container">
        <div class="navbar-header">
            <a href="{{url('home/index')}}" class="navbar-brand navlogo-qshang animated"><img src="home/images/logo.png" alt="小童博客"></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul id="menu" class="nav navbar-nav navbar-right nav-qshang">
                <li data-menuanchor="page1" class="active"><a href="#page1" style="color:deepskyblue"   >博客简介</a></li>
                <li data-menuanchor="page2"><a href="#page2" style="color:deepskyblue">最新文章</a></li>
                <li data-menuanchor="page3"><a href="#page3" style="color:deepskyblue">最新图片</a></li>
                <li data-menuanchor="page4"><a href="#page4" style="color:deepskyblue">网站相关</a></li>
            </ul>
        </div>
    </div>
</div>
<div id="dowebok">
    <div class="section section1">
        <div class="container">
            <h1>小童博客欢迎您</h1>
            <p class="fbt">扁平化设计，响应式设计，适应全部设备，小童博客正式上线！</p>
            <div class="row applyBox">
                <div class="midd col-md-6 col-xs-12">
                    <img src="{{asset('home/images/response/pc.png')}}" alt="pc响应">
                    <img src="{{asset('home/images/response/pad.png')}}" alt="pad响应" class="apply03">
                    <img src="{{asset('home/images/response/phone.png')}}" alt="phone响应" class="apply02">
                </div>
                <div class="col-md-6 txt hidden-xs hidden-sm">
                    <p>小童博客，历时学习laravel5.2一个月时间，在2016年08月8日正式上线，包括文章，留言，相册，关于我，等4大模块，前端框架Bootstrap3.2，后台框架Laravel5.2，
                        前端借鉴了一些前辈的相关内容。欠缺的知识，我会去学习到手，由于即将面临实习，时间匆忙，很多功能暂未完善，博客源码可进入网站下载，最后！喜欢本博客的朋友可以给本人留言。</p>
                    <a href="{{url('home/message')}}" target="_blank" class="lyBtn">直击进入留言模块>></a>
                    <a href="{{url('home/index')}}" class="homeBtn" target="_blank">进入官网<span>>></span></a>
                </div>
            </div>
            <a href="{{url('home/message')}}" class="homeBtn visible-xs-block visible-sm-block homeBtn2" target="_blank">进入官网<span>>></span></a>
            <a class="btn_down" href="#page2">
                <div class="sign signImg1"></div>
                <div class="sign signImg2"></div>
                <div class="sign signImg3"></div>
            </a>
        </div>
    </div>
    <div class="section section2">
        <div class="container">
            @if(count($art)>0)
            <h1>最新文章</h1>
            <p class="fbt">闲来无事，把工作中的内容记录下来分享给大家，同时充实下博客内容</p>
            <div class="arBox">
                <ul class="arlist">
                    @foreach($cate as $c)
                        <li><a href="{{url('home/category/'.$c->id)}}">{{$c->name}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="row">
                @foreach($art as $n)
                    <div class="col-md-6 col qshang-list" data-scroll-reveal="enter bottom over 1s and move 100px after 0.5s">
                        <div class="qshang-box">
                            <div class="qshang-title">
                                <span class="tag bg-dot">原 创</span>&nbsp;&nbsp;
                                <a href="{{url('/home/article/'.$n->id)}}">{{$n->title}}</a>
                                <div class="qs-icon pull-right">
                                    <img src="{{asset('home/images/tuijian.gif')}}" alt="推荐">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 qs-pic">
                                    <a href="{{url('/home/article/'.$n->id)}}"><img src="{{url($n->thumb)}}" class="media-object animated" alt=""></a>
                                </div>
                                <div class="col-sm-6 jja">
                                    <p><a href="{{url('/home/article/'.$n->id)}}">{{$n->description}}</a></p>
                                </div>
                            </div>
                            <div class="col qshang-info">
                                <span class="glyphicon glyphicon-time"></span>
                                时间【{{$n->created_at}}】&nbsp;&nbsp;
                                <span class="glyphicon glyphicon-edit"></span>
                                分类【{{$n->category->name}}】
                                <span class="hidden-xs glyphicon glyphicon-play-circle">点击【{{$n->view}}】</span>
                                <div class="look-all pull-right ">
                                    <a href="{{url('home/article/'.$n->id)}}" class="button border-blue" role="button">查看详细</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                @else
                    <h1>暂无文章</h1>
                @endif
            </div>
            <a class="btn_down" href="#page3">
                <div class="sign signImg1"></div>
                <div class="sign signImg2"></div>
                <div class="sign signImg3"></div>
            </a>
        </div>
    </div>
    <div class="section section3">
        <div class="container">
            <h1>最新图片</h1>
            <p class="fbt">精彩图片，唯美瞬间，生活照片，尽在图库中</p>
            {{--<div class="row">--}}
                {{--<div class="col-md-3 col-xs-6 photobox">--}}
                    {{--<div class="img-box">--}}
                        {{--<img src="images/homemoren.jpg" />--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-3 col-xs-6 photobox">--}}
                    {{--<div class="img-box">--}}
                        {{--<img src="images/homemoren.jpg" />--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-3 col-xs-6 photobox">--}}
                    {{--<div class="img-box">--}}
                        {{--<img src="images/homemoren.jpg" />--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-3 col-xs-6 photobox">--}}
                    {{--<div class="img-box">--}}
                        {{--<img src="images/homemoren.jpg" />--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            <a class="photoBtn photoBtn2" target="_blank">进入图库<span>>></span></a>
            <a class="btn_down" href="#page4">
                <div class="sign signImg1"></div>
                <div class="sign signImg2"></div>
                <div class="sign signImg3"></div>
            </a>
        </div>
    </div>
    <div class="section section4">
        <div class="container">
            <h1>网站相关</h1>
            <p class="fbt">小童，励志做出一款、属于自己的游戏，世界很大，到处充满阳光！！</p>
            <div class="btnBox">
                <a href="{{url('home/index')}}" target="_blank">进入官网<span>>></span></a>
                <a href="{{url('home/message')}}" target="_blank">点击留言<span>>></span></a>
            </div>
            <p class="cody"> {!! Config::get('web_config.copyright') !!}</p>
        </div>
    </div>
</div>




<script src="{{asset('js/libs.js')}}"></script>

<script src="{{asset('js/landing.js')}}"></script>
</body>
</html>