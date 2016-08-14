<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
    <link rel="shortcut icon" href="{{asset('images/frontend/icon.ico')}}" type="image/x-icon">
    @yield('info')
    <link rel="stylesheet" type="text/css" href="{{asset('css/libs.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('css/base.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/page.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/gotop.css')}}" />
    <script src="{{asset('js/libs.js')}}"></script>
</head>
<body class="login-layout">
<nav class="navbar navbar-default navbar-fixed-top navbar-qshang">
    <div class="container">
        <div class="navbar-header">
            <a href="{{url('index')}}" class="navbar-brand navlogo-qshang animated"><img src="{{url('images/frontend/logo.png')}}" alt="小童博客"></a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right nav-qshang">
                <li id="home"><a href="{{url('index')}}" class="animated"><span class="glyphicon glyphicon-home"></span> 首页</a></li>
                <li id="clas" class="dropdown">
                    <a class="dropdown-toggle animated" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-list"></span> 分类<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        @foreach($cate_nav as $cn)
                            <li><a href="{{url('category/'.$cn->id)}}" class="glyphicon glyphicon-align-justify">&nbsp;{{$cn->name}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li id="liuyan"><a href="{{url('message')}}" class="animated"><span class="glyphicon glyphicon-fire"></span> 留言板</a></li>
                {{--<li id="photo"><a href="{{url('/article')}}" class="animated"><span class="glyphicon glyphicon-picture"></span> 相册</a></li>--}}
                <li>
                    <a class="animated" href="#" data-toggle="modal" data-target="#album"><span class="glyphicon glyphicon-picture"></span> 相册</a></a>
                </li>
                <li>
                    <a class="animated" href="#" data-toggle="modal" data-target="#my"><span class="glyphicon glyphicon-question-sign"></span> 关于我</a></a>
                </li>
                {{--<li id="about"><a href="{{url('my')}}" class="animated"><span class="glyphicon glyphicon-question-sign"></span> 关于我</a></li>--}}
                {{--如果用户登录，显示用户名--}}
                {{--<li>--}}
                    {{--<a class="animated" href="#" data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-user"></span> 登陆</a></a>--}}
                {{--</li>--}}
                @if(session('userName'))
                    <li>
                        <a class="animated" href="#"><span class="glyphicon glyphicon-user"></span> {{session('userName')}}</a></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('category/'.$cn->id)}}">更改信息</a></li>
                            <li><a href="{{url('quit')}}">退出</a></li>
                        </ul>
                    </li>
                @else
                    <li>
                        <a class="animated" href="#" data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-user"></span> 登陆</a></a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

@section('content')
    <div class="col-md-4">
        {{--源码下载--}}
        <div class="col-md-12 col qshang-list" data-scroll-reveal="enter bottom over 1s and move 100px after 0.5s">
            <div class="qshang-box">
                <div class="widget">
                    <h4 class="title"><span class="glyphicon glyphicon-cloud-download"></span>&nbsp;&nbsp;项目源码</h4>
                    <div class="tagBox">
                        <strong>站点版本：</strong>mediaxiaotong v1.0.2016-08-12<br>
                        <strong>开源版本：</strong>mediaxiaotong v1.0.2016-08-08<br>
                        <strong>GitHub： <a class="label label-success animated" href="https://github.com/mediaxiaotong/PersonalWebsite.git">查看下载</a></strong> <br>
                        <strong>程&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;序：</strong>前台[ bootstrap3 ]  后台[ Laravel 5.2 ]<br>
                    </div>
                </div>
                </div>
        </div>

        {{--标签云--}}
        <div class="col-md-12 col qshang-list" data-scroll-reveal="enter bottom over 1s and move 100px after 0.5s">
            <div class="qshang-box">
                <div class="widget">
                    <h4 class="title"><span class="glyphicon glyphicon-tags"></span>&nbsp;&nbsp;标签云</h4>
                    <div class="tagBox">
                        @foreach($cate_nav as $cn)
                        <a class="label label-success animated" href="{{url('category/'.$cn->id)}}">{{$cn->name}}</a>
                        <a class="label label-warning animated" href="{{url('category/'.$cn->id)}}">{{$cn->name}}</a>
                        <a class="label label-danger animated" href="{{url('category/'.$cn->id)}}">{{$cn->name}}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        {{--最热文章--}}
        <div class="col-md-12 col qshang-list" data-scroll-reveal="enter bottom over 1s and move 100px after 0.5s">
            <div class="qshang-box">
                <div class="widget">
                    <h4 class="title"><span class="glyphicon glyphicon-fire"></span>&nbsp;&nbsp;最热文章</h4>

                    <div class=" col qshang-list" data-scroll-reveal="enter bottom over 1s and move 100px after 0.5s">
                        @foreach($hot as $k=>$h)
                        <ol class="breadcrumb chip qshang-box" style="">
                            <li><span class="tag bg-dot">{{$k}}</span></li>
                            <li style="position: relative;top:5px; overflow: hidden;text-overflow:ellipsis; white-space: nowrap;width:150px">
                                <a href="{{url('article/'.$h->id)}}" title="{{$h->title}}">{{$h->title}}</a>
                            </li>
                            <li><span class="glyphicon glyphicon-eye-open"></span> {{$h->view}}</li>
                        </ol>
                        @endforeach
                        </div>
                    </div>
            </div>
        </div>

        {{--友情链接--}}
        <div class="col-md-12 col qshang-list" data-scroll-reveal="enter bottom over 1s and move 100px after 0.5s">
            <div class="qshang-box">
                <div class="widget">
                    <h4 class="title"><span class="glyphicon glyphicon-link"></span>&nbsp;&nbsp;友情链接</h4>
                    <div class="linkBox">
                        @foreach($link as $l)
                                <a href="{{url($l->url)}}" class="btn btn-default btn-xs glyphicon glyphicon-flag" target="_blank">&nbsp;{{$l->name}}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@show
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="widget">
                    <h4 class="title">关于本站</h4>
                    <div class="tagBox">
                        <strong>域&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名：</strong>www.mediaxiaotong.com<br>
                        <strong>创建时间：</strong>2016年8月8日<br>
                        <strong>程&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;序：</strong>前台[ bootstrap3 ]  后台[ Laravel 5.2 ]<br>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="widget">
                    <h4 class="title">网站相关</h4>
                    <div class="webBox">
                        <button onclick="javascrtpt:window.location.href='{{url('index')}}'" type="button" class="btn glyphicon glyphicon-home btn-xs" data-toggle="modal" data-target="#apply">
                            返回首页
                        </button>
                        <button onclick="javascrtpt:window.location.href='{{url('login')}}'" type="button" class="btn glyphicon glyphicon-user btn-xs" data-toggle="modal" data-target="#apply">
                            注册登录
                        </button>
                        <button onclick="javascrtpt:window.location.href='{{url('message')}}'" type="button" class="btn glyphicon glyphicon-comment btn-xs" data-toggle="modal" data-target="#apply">
                            我要留言
                        </button>
                        <button onclick="javascrtpt:window.location.href='https://github.com/mediaxiaotong/PersonalWebsite.git'" type="button" class="btn glyphicon glyphicon-cloud-download btn-xs" data-toggle="modal" data-target="#apply">
                            源码下载
                        </button>
                        <button onclick="javascrtpt:window.location.href='{{url('backend/index')}}'" type="button" class="btn glyphicon glyphicon-send btn-xs" data-toggle="modal" data-target="#apply">
                            进入后台
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--<a class="toTop"><span class="glyphicon glyphicon-chevron-up"></span></a>--}}
    <div style="display: none;" id="rocket-to-top">
        <div style="opacity:0;display: block;" class="level-2"></div>
        <div class="level-3"></div>
    </div>
</footer>
    <!--注册end-->
{{--快捷登陆暂未制作，--}}
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">抱歉！</h4>
            </div>
            <div class="modal-body text-center">
                <div class="alert alert-success text-left" role="alert">，快捷登陆功能暂未制作，请点击下方图片，进行跳转页面登陆！谢谢！
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="loginBox">
                    <a href="{{url('login')}}" title="跳转登陆"><img src="{{asset('images/frontend/logo.png')}}"></a>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
            </div>
        </div>
    </div>
</div>

{{--致歉相册还未开放--}}
<div class="modal fade" id="album" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">抱歉！</h4>
            </div>
            <div class="modal-body text-center">
                <div class="alert alert-danger text-left" role="alert">由于网站还未完善，相册暂未开放。请多关注www.mediaxiaotong.com！感谢支持！
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
            </div>
        </div>
    </div>
</div>

{{--此模块还在整理中--}}
<div class="modal fade" id="my" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">抱歉！</h4>
            </div>
            <div class="modal-body text-center">
                <div class="alert alert-danger text-left" role="alert">此模块还在整理中，暂未开放。请多关注www.mediaxiaotong.com！感谢支持！
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
            </div>
        </div>
    </div>
</div>

<div class="copy">
    <div class="container">
        {!! Config::get('web_config.copyright') !!}
    </div>
</div>




<script src="{{asset('js/zzsc.js')}}"></script>
<script src="{{asset('js/base.js')}}"></script>
<script src="{{asset('layer/layer.js')}}"></script>
<script src="{{asset('js/gotop.js')}}"></script>

</body>
</html>