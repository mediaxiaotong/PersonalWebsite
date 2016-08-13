<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>登录</title>
    <meta name="keywords" content="登陆" />
    <meta name="description" content="用户登录" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="{{asset('home/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('home/font-awesome/4.2.0/css/font-awesome.min.css')}}" />
    <!-- text fonts -->
    <link rel="stylesheet" href="{{asset('home/font-awesome/fonts.googleapis.com.css')}}" />
    <!-- ace styles -->
    <link rel="stylesheet" href="{{asset('home/css/ace.min.css')}}" />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
</head>

<body class="login-layout">

<div class="main-container">
    <div class="main-content">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="login-container">
                    <div class="center">
                        <h1>
                            <span class="white" id="id-text2"><img src="{{asset('home/images/logo.png')}}"> </span>
                        </h1>
                    </div>
                    <div class="position-relative">

                        <div id="login-box" class="login-box visible widget-box no-border">
                            <div class="widget-body">
                                <div class="widget-main">
                                    <h4 class="header blue lighter bigger">
                                        <i class="ace-icon fa fa-coffee green"></i>
                                        登陆
                                    </h4>

                                    <div class="space-6"></div>

                                    <form action="{{url('home/login')}}" method="post">
                                        {{csrf_field()}}
                                        <fieldset>
                                            <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="email" class="form-control" placeholder="邮箱" />
															<i class="ace-icon fa fa-user"></i>
														</span>
                                            </label>

                                            <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" name="password" class="form-control" placeholder="密码" />
															<i class="ace-icon fa fa-lock"></i>
														</span>
                                            </label>

                                            <div class="space"></div>

                                            <div class="clearfix">
                                                <label class="inline">
                                                    <input type="checkbox" class="ace" disabled="false"/>
                                                    <span class="lbl"> 记住</span>
                                                </label>

                                                <button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
                                                    <i class="ace-icon fa fa-key"></i>
                                                    <span class="bigger-110">登录</span>
                                                </button>
                                            </div>

                                            <div class="space-4"></div>
                                        </fieldset>
                                    </form>

                                    <div class="social-or-login center">
                                        <span class="bigger-110">第三方登录</span>
                                    </div>

                                    <div class="space-6"></div>
                                    {{--第三方登录，暂时注释--}}
                                    {{--<div class="social-login center">--}}
                                        {{--<a class="btn btn-primary">--}}
                                            {{--<i class="ace-icon fa fa-facebook"></i>--}}
                                        {{--</a>--}}

                                        {{--<a class="btn btn-info">--}}
                                            {{--<i class="ace-icon fa fa-twitter"></i>--}}
                                        {{--</a>--}}

                                        {{--<a class="btn btn-danger">--}}
                                            {{--<i class="ace-icon fa fa-google-plus"></i>--}}
                                        {{--</a>--}}
                                    {{--</div>--}}
                                </div><!-- /.widget-main -->

                                <div class="toolbar clearfix">
                                    {{--找回密码暂未制作--}}
                                    {{--<div>--}}
                                        {{--<a href="{{url('home/index')}}" data-target="#forgot-box" class="forgot-password-link">--}}
                                            {{--<i class="ace-icon fa fa-arrow-left"></i>--}}
                                            {{--找回密码--}}
                                        {{--</a>--}}
                                    {{--</div>--}}
                                    <div>
                                        <a href="{{url('home/index')}}" class="forgot-password-link">
                                            <i class="ace-icon fa fa-arrow-left"></i>
                                            返回主页
                                        </a>
                                    </div>

                                    <div>
                                        <a href="#" data-target="#signup-box" class="user-signup-link">
                                            注册
                                            <i class="ace-icon fa fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div><!-- /.widget-body -->
                        </div><!-- /.login-box -->
                        {{--密码找回功能暂未制作--}}
                        <div id="forgot-box" class="forgot-box widget-box no-border">
                            <div class="widget-body">
                                <div class="widget-main">
                                    <h4 class="header red lighter bigger">
                                        <i class="ace-icon fa fa-key"></i>
                                        找回密码
                                    </h4>

                                    <div class="space-6"></div>
                                    <p>
                                        输入您的电子邮件和接收指令
                                    </p>

                                    <form>
                                        <fieldset>
                                            <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="email" class="form-control" placeholder="此功能暂未制作" />
															<i class="ace-icon fa fa-envelope"></i>
														</span>
                                            </label>

                                            <div class="clearfix">
                                                <button type="button" class="width-35 pull-right btn btn-sm btn-danger">
                                                    <i class="ace-icon fa fa-lightbulb-o"></i>
                                                    <span class="bigger-110">发送邮件</span>
                                                </button>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div><!-- /.widget-main -->

                                <div class="toolbar center">
                                    <a href="#" data-target="#login-box" class="back-to-login-link">
                                        返回登录
                                        <i class="ace-icon fa fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div><!-- /.widget-body -->
                        </div><!-- /.forgot-box -->

                        <div id="signup-box" class="signup-box widget-box no-border">
                            <div class="widget-body">
                                <div class="widget-main">
                                    <h4 class="header green lighter bigger">
                                        <i class="ace-icon fa fa-users blue"></i>
                                        用户注册
                                    </h4>

                                    <div class="space-6"></div>
                                    <p>填写信息: </p>

                                    <form action="{{url('home/register')}}" method="post">
                                        {{csrf_field()}}
                                        <fieldset>
                                            <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="email" name="email" class="form-control" placeholder="邮箱" />
															<i class="ace-icon fa fa-envelope"></i>
														</span>
                                            </label>

                                            <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="name" class="form-control" placeholder="用户名" />
															<i class="ace-icon fa fa-user"></i>
														</span>
                                            </label>

                                            <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" name="password" class="form-control" placeholder="密码" />
															<i class="ace-icon fa fa-lock"></i>
														</span>
                                            </label>

                                            <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" name="password_confirmation" class="form-control" placeholder="确认密码" />
															<i class="ace-icon fa fa-retweet"></i>
														</span>
                                            </label>

                                            <label class="block">
                                                <input type="checkbox" class="ace" disabled="false" />
                                                <span class="lbl">
                                                    接受
                                                    <a>用户协议</a>
                                                </span>
                                            </label>

                                            <div class="space-24"></div>

                                            <div class="clearfix">
                                                <button type="reset" class="width-30 pull-left btn btn-sm">
                                                    <i class="ace-icon fa fa-refresh"></i>
                                                    <span class="bigger-110">重置</span>
                                                </button>

                                                <button type="submit" class="width-65 pull-right btn btn-sm btn-success">
                                                    <span class="bigger-110">注册</span>

                                                    <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                                                </button>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>

                                <div class="toolbar center">
                                    <a href="#" data-target="#login-box" class="back-to-login-link">
                                        <i class="ace-icon fa fa-arrow-left"></i>
                                        返回登录
                                    </a>
                                </div>
                            </div><!-- /.widget-body -->
                        </div><!-- /.signup-box -->
                    </div><!-- /.position-relative -->
                    <span class="lbl">
                        @if(count($errors)>0)
                            @if(is_object($errors)) {{--//这里利用到login方法登录失败后，用with传回来的一个参数，errors。它的类型是一个对象而不是字符串。如果$errors是一个对象进入foreach循环，--}}
                            @foreach($errors->all() as $error)
                                <p style="color:red;">{{ $error}}</p>
                            @endforeach
                            @else
                                {!! $errors !!}
                            @endif
                        @endif
                    </span>
                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.main-content -->
</div><!-- /.main-container -->
<!-- basic scripts -->
<!--[if !IE]> -->
<script type="text/javascript">
    window.jQuery || document.write("<script src='{{asset('home/js/jquery.min.js')}}'>"+"<"+"/script>");
</script>
<!-- <![endif]-->
<!-- inline scripts related to this page -->
<script type="text/javascript">
    jQuery(function($) {
        $(document).on('click', '.toolbar a[data-target]', function(e) {
            e.preventDefault();
            var target = $(this).data('target');
            $('.widget-box.visible').removeClass('visible');//hide others
            $(target).addClass('visible');//show target
        });
    });



    //you don't need this, just used for changing background
    jQuery(function($) {
        $('#btn-login-dark').on('click', function(e) {
            $('body').attr('class', 'login-layout');
            $('#id-text2').attr('class', 'white');
            $('#id-company-text').attr('class', 'blue');

            e.preventDefault();
        });
        $('#btn-login-light').on('click', function(e) {
            $('body').attr('class', 'login-layout light-login');
            $('#id-text2').attr('class', 'grey');
            $('#id-company-text').attr('class', 'blue');

            e.preventDefault();
        });
        $('#btn-login-blur').on('click', function(e) {
            $('body').attr('class', 'login-layout blur-login');
            $('#id-text2').attr('class', 'white');
            $('#id-company-text').attr('class', 'light-blue');

            e.preventDefault();
        });

    });
</script>
<div style="text-align:center;">
    <p>来源:<a href="http://www.mycodes.net/" target="_blank">源码之家</a></p>
</div>
<script src="{{asset('home/js/html5shiv.min.js')}}"></script>
<script src="{{asset('home/js/respond.min.js')}}"></script>
</body>
</html>
