<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
    <title>小童博客</title>
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/animate.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('extend/umeditor/themes/default/css/umeditor.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/swiper.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/base.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/page.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/login.css')}}" />

    {{--<script type="text/javascript" src="{{asset()}}js/jquery-1.9.0.min.js"></script>--}}

    <script src="{{asset('home/js/jquery.min.js')}}"></script>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top navbar-qshang">
    <div class="container">
        <div class="navbar-header">
            <a href="#" class="navbar-brand navlogo-qshang animated"><img src="{{url('home/images/logo.png')}}" alt="小童博客"></a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right nav-qshang">
                <li id="home"><a href="{{url('home/index')}}" class="animated"><span class="glyphicon glyphicon-home"></span> 首页</a></li>
                <li id="clas" class="dropdown">
                    <a class="dropdown-toggle animated" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-list"></span> 分类<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">css</a></li>
                        <li><a href="#">javascript</a></li>
                        <li><a href="#">php</a></li>
                        <li><a href="#">随笔</a></li>
                    </ul>
                </li>
                <li id="liuyan"><a href="{{url('home/message')}}" class="animated"><span class="glyphicon glyphicon-fire"></span> 留言板</a></li>
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
                <li>
                    <a class="animated" href="#" data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-user"></span> 登陆</a></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="widget">
                    <h4 class="title">关于本站</h4>
                    <div class="tagBox">
                        <strong>域&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名：</strong>www.mediaxiaotong.cn<br>
                        <strong>创建时间：</strong>2016年8月8日<br>
                        <strong>程&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;序：</strong>前台[ bootstrap3 ]  后台[ Laravel 5.2 ]<br>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="widget">
                    <h4 class="title">网站相关</h4>
                    <div class="webBox">
                        <button type="button" class="btn glyphicon-text-color btn-xs" data-toggle="modal" data-target="#apply">
                            申请友链
                        </button>
                        <button type="button" class="btn glyphicon-text-color btn-xs" data-toggle="modal" data-target="#wz">
                            关于本站
                        </button>
                        <button type="button" class="btn glyphicon-text-color btn-xs" data-toggle="modal" data-target="#wz">
                            登陆后台
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="toTop"><span class="glyphicon glyphicon-chevron-up"></span></a>
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
                    <a href="{{url('home/login')}}" title="跳转登陆"><img src="{{asset('home/images/logo.png')}}"></a>
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
        Copyright © 2016 小童博客 & 版权所有   渝ICP备000000号
    </div>
</div>
<script src="{{asset('home/js/bootstrap.min.js')}}"></script>
<script src="{{asset('home/js/zzsc.js')}}"></script>
<script src="{{asset('home/js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('home/js/scrollReveal.js')}}"></script>
<script src="{{asset('extend/umeditor/umeditor.config.js')}}"></script>
<script src="{{asset('extend/umeditor/umeditor.min.js')}}"></script>
<script src="{{asset('home/js/swiper.min.js')}}"></script>
<script src="{{asset('home/js/base.js')}}"></script>
<script src="{{asset('home/layer/layer.js')}}"></script>
<script src="{{asset('home/js/login.js')}}"></script>
</body>
</html>