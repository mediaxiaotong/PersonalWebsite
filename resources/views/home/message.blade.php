@extends('layouts.home.header')
@section('content')
<div class="swiper-container banner" id="myCarousel">
    <div class="swiper-wrapper">
        <div class="swiper-slide" style="background: #223240">
            <img src="images/slide1.png" alt="">
        </div>
        <div class="swiper-slide" style="background: #f4e3da">
            <img src="images/slide2.png" alt="">
        </div>
        <div class="swiper-slide" style="background: #dd292c">
            <img src="images/slide3.png" alt="">
        </div>
    </div>
    <div class="swiper-pagination "></div>
    <div class="swiper-button-prev hidden-xs"><span class="glyphicon glyphicon-menu-left"></span></div>
    <div class="swiper-button-next hidden-xs"><span class="glyphicon glyphicon-menu-right"></span></div>
</div>
<div class="tab1">
    <div class="container">
        <ol class="breadcrumb chip qshang-box">
            <li><a href="{{url('home/index')}}">首页</a></li>
            <li class="active">留言板</li>
        </ol>
        <div class="row">
            {{--留言板--}}
            <div class="col-md-7">
                <div class="liuyan message-text clearfix">
                    {{--session检测登陆状态信息--}}
                    {{--@if(session('msg'))--}}
                        {{--<div class="alert alert-success liuyanTip" style="background-color:rgba(255,255,255,0.8);;" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
                            {{--<p style="color: red">{{session('msg')}}</p>--}}
                        {{--</div>--}}
                    {{--@endif--}}
                    {{--内容发送检测信息--}}
                    {{--@if ($errors->has('content'))--}}
                        {{--<strong>{{ $errors->first('content') }}</strong>--}}
                    {{--@endif--}}

                    {{--留言发送成功--}}
                    {{--@if(session('msg'))--}}
                    {{--<div class="alert alert-success liuyanTip" style="background-color:rgba(255,255,255,0.8);;" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
                    {{--<p style="color: red">{{session('msg')}}</p>--}}
                    {{--</div>--}}

                    <div class="alert alert-success liuyanTip" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>温馨提示：</strong>请文明留言，</div>
                    <form action="{{url('/message')}}" method="post" class="form-inline" id="LiuForm">
                        {{csrf_field()}}
                        <textarea name="content" id="myEditor" style="width:100%;height:120px;" rows="5" name="content" cols="50"></textarea>
                        <input type="submit" value="提交" id="btn-submit" class="btn btn-default message-btn pull-right">
                    </form>
                </div>
                <div class="row">
                    {{--@foreach($messages as $message)--}}
                        <div class="col-md-12 qshang-list liuyanList" data-scroll-reveal="enter bottom over 1s and move 100px after 0.5s">

                            <div class="qshang-box lyList">

                                <div class="said_img">
                                    <img src="images/logo.png" class="radius-circle" width="60px" height="60px" />
                                    <div class="liuyan_t">
                                        <span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;<a>
                                            {{--{{$message->user->name}}--}}
                                        </a>&nbsp;&nbsp;
                                        <span class="glyphicon glyphicon-time"></span>&nbsp;
                                        {{--{{$message->created_at}}&nbsp;--}}
                                        <span class="tag bg-dot">会员</span>&nbsp
                                    </div>
                                    <div class="liuyan_c">
                                        {{--{!! $message->content !!}--}}
                                    </div>
                                </div>
                                {{--回复--}}
                                <div class="f_liuyan">
                                    <hr />
                                    <div class="liuyan_a">
                                    </div>
                                    <div class="said_img">
                                        <img src="images/logo.png" class="radius-circle" width="60px" height="60px" />
                                        <div class="liuyan_t">
                                            <span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;小童哥哥&nbsp;&nbsp;
                                            <span class="glyphicon glyphicon-time"></span>&nbsp;&nbsp;2016-06-12&nbsp;&nbsp;
                                            {{--<span>回复 @<a>{$vo.username}</a> 中说到：</span>--}}
                                        </div>
                                        <div class="liuyan_c">
                                            嘿嘿
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    {{--@endforeach--}}
                </div>
            </div>
            {{--右边--}}
            <div class="col-md-4">

                {{--标签云--}}
                <div class="col-md-12 col qshang-list" data-scroll-reveal="enter bottom over 1s and move 100px after 0.5s">
                    <div class="qshang-box">
                        <div class="widget">
                            <h4 class="title">标签云</h4>
                            <div class="tagBox">
                                <a class="label label-success animated" href="#">css</a>
                                <a class="label label-warning animated" href="#">tab</a>
                                <a class="label label-danger animated" href="#">php</a>
                                <a class="label label-info animated" href="#">123</a>
                                <a class="label label-warning animated" href="#">scroll</a>
                                <a class="label label-danger animated" href="#">随意</a>
                                <a class="label label-success animated" href="#">css</a>
                                <a class="label label-warning animated" href="#">tab</a>
                                <a class="label label-danger animated" href="#">php</a>
                                <a class="label label-info animated" href="#">123</a>
                                <a class="label label-warning animated" href="#">scroll</a>
                                <a class="label label-danger animated" href="#">随意</a>
                                <a class="label label-success animated" href="#">css</a>
                                <a class="label label-warning animated" href="#">tab</a>
                                <a class="label label-danger animated" href="#">php</a>
                                <a class="label label-info animated" href="#">123</a>
                                <a class="label label-warning animated" href="#">scroll</a>
                                <a class="label label-danger animated" href="#">随意</a>
                                <a class="label label-success animated" href="#">css</a>
                                <a class="label label-warning animated" href="#">tab</a>
                                <a class="label label-danger animated" href="#">php</a>
                                <a class="label label-info animated" href="#">123</a>
                                <a class="label label-warning animated" href="#">scroll</a>
                                <a class="label label-danger animated" href="#">随意</a>
                            </div>
                        </div>
                    </div>
                </div>

                {{--最新文章--}}
                <div class="col-md-12 col qshang-list" data-scroll-reveal="enter bottom over 1s and move 100px after 0.5s">
                    <div class="qshang-box">
                        <div class="widget">
                            <h4 class="title">查看最多</h4>
                            <div class="tagBox">
                                {{--开始遍历查看次数最多的文章--}}
                                <div class="view-title">
                                    <span class="tag bg-dot">1</span>&nbsp;&nbsp;
                                    <a href="#">这是文章标题</a>
                                    <div class="qs-icon pull-right">
                                        <img src="images/tuijian.gif" alt="推荐">
                                    </div>
                                </div>
                                <div class="view-title">
                                    <span class="tag bg-dot">1</span>&nbsp;&nbsp;
                                    <a href="#">这是文章标题</a>
                                    <div class="qs-icon pull-right">
                                        <img src="images/tuijian.gif" alt="推荐">
                                    </div>
                                </div>
                                <div class="view-title">
                                    <span class="tag bg-dot">1</span>&nbsp;&nbsp;
                                    <a href="#">这是文章标题</a>
                                    <div class="qs-icon pull-right">
                                        <img src="images/tuijian.gif" alt="推荐">
                                    </div>
                                </div>
                                <div class="view-title">
                                    <span class="tag bg-dot">1</span>&nbsp;&nbsp;
                                    <a href="#">这是文章标题</a>
                                    <div class="qs-icon pull-right">
                                        <img src="images/tuijian.gif" alt="推荐">
                                    </div>
                                </div>
                                <div class="view-title">
                                    <span class="tag bg-dot">1</span>&nbsp;&nbsp;
                                    <a href="#">这是文章标题</a>
                                    <div class="qs-icon pull-right">
                                        <img src="images/tuijian.gif" alt="推荐">
                                    </div>
                                </div>
                                <div class="view-title">
                                    <span class="tag bg-dot">1</span>&nbsp;&nbsp;
                                    <a href="#">这是文章标题</a>
                                    <div class="qs-icon pull-right">
                                        <img src="images/tuijian.gif" alt="推荐">
                                    </div>
                                </div>
                                <div class="view-title">
                                    <span class="tag bg-dot">1</span>&nbsp;&nbsp;
                                    <a href="#">这是文章标题</a>
                                    <div class="qs-icon pull-right">
                                        <img src="images/tuijian.gif" alt="推荐">
                                    </div>
                                </div>
                                <div class="view-title">
                                    <span class="tag bg-dot">1</span>&nbsp;&nbsp;
                                    <a href="#">这是文章标题</a>
                                    <div class="qs-icon pull-right">
                                        <img src="images/tuijian.gif" alt="推荐">
                                    </div>
                                </div>
                                {{--结束遍历--}}


                            </div>
                        </div>
                    </div>
                </div>

                {{--友情链接--}}
                <div class="col-md-12 col qshang-list" data-scroll-reveal="enter bottom over 1s and move 100px after 0.5s">
                    <div class="qshang-box">
                        <div class="widget">
                            <h4 class="title">友情链接</h4>
                            <div class="linkBox">
                                <a href="http://www.mediaxiaotong.cn" class="btn btn-default btn-xs" target="_blank">小童博客</a>
                                <a href="http://www.mediaxiaotong.cn" class="btn btn-default btn-xs" target="_blank">小童博客</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div>

    </div>
</div>
<script>
    $(function(){
        $("#liuyan").addClass('active');
        var editor = UM.getEditor('myEditor',{
            toolbar:
                    [
                        'emotion'
                    ],
            autoHeightEnabled : true,
            autoFloatEnabled :false
            //emotionLocalization : true
        });
    })
</script>
@endsection