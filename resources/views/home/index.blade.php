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
        <h2 class="tab-h2">「最新文章<span class="hidden-xs">--这个世界充满阳光</span>」</h2>
        <p class="tab-p">小童，励志做出一款、属于自己的游戏，世界很大，到处充满阳光！</p>
        <div class="row">
            <div class="col-md-7">
                {{--开始文章--}}
                <div class="col-md-12 col qshang-list" data-scroll-reveal="enter bottom over 1s and move 100px after 0.5s">
                    <div class="qshang-box">
                        <div class="qshang-title">
                            <span class="tag bg-dot">原 创</span>&nbsp;&nbsp;
                            <a href="#">这是文章标题</a>
                            <div class="qs-icon pull-right">
                                <img src="images/tuijian.gif" alt="推荐">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 qs-pic">
                                <a href="#"><img src="images/homemoren.jpg" class="media-object animated" alt=""></a>
                            </div>
                            <div class="col-sm-6 jja">
                                <p><a href="#">这是一篇文章这是一篇文章这是一篇文章这是一篇文章这是一篇文章这是一篇文章这是一篇文章这是一篇文章这是一篇文章这是一篇文章</a></p>
                            </div>
                        </div>
                        <div class="col qshang-info">
                            <span class="glyphicon glyphicon-time"></span>
                            2016-02-03&nbsp;&nbsp;分类：[&nbsp;css&nbsp; ]
                            <span class="hidden-xs">点击：[&nbsp;9999&nbsp;]</span>
                            <div class="look-all pull-right ">
                                <a href="#" class="button border-blue" role="button">查看详细</a>
                            </div>
                        </div>
                    </div>
                </div>
                {{--文章遍历结束--}}
                <div class="col-md-12 col qshang-list" data-scroll-reveal="enter bottom over 1s and move 100px after 0.5s">
                    <div class="qshang-box">
                        <div class="qshang-title">
                            <span class="tag bg-dot">原 创</span>&nbsp;&nbsp;
                            <a href="#">这是文章标题</a>
                            <div class="qs-icon pull-right">
                                <img src="images/tuijian.gif" alt="推荐">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 qs-pic">
                                <a href="#"><img src="images/homemoren.jpg" class="media-object animated" alt=""></a>
                            </div>
                            <div class="col-sm-6 jja">
                                <p><a href="#">这是一篇文章这是一篇文章这是一篇文章这是一篇文章这是一篇文章这是一篇文章这是一篇文章这是一篇文章这是一篇文章这是一篇文章</a></p>
                            </div>
                        </div>
                        <div class="qshang-info">
                            <span class="glyphicon glyphicon-time"></span>
                            2016-02-03&nbsp;&nbsp;分类：[&nbsp;css&nbsp; ]
                            <span class="hidden-xs">点击：[&nbsp;9999&nbsp;]</span>
                            <div class="look-all pull-right">
                                <a href="#" class="button border-blue" role="button">查看详细</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col qshang-list" data-scroll-reveal="enter bottom over 1s and move 100px after 0.5s">
                    <div class="qshang-box">
                        <div class="qshang-title">
                            <span class="tag bg-dot">原 创</span>&nbsp;&nbsp;
                            <a href="#">这是文章标题</a>
                            <div class="qs-icon pull-right">
                                <img src="images/tuijian.gif" alt="推荐">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 qs-pic">
                                <a href="#"><img src="images/homemoren.jpg" class="media-object animated" alt=""></a>
                            </div>
                            <div class="col-sm-6 jja">
                                <p><a href="#">这是一篇文章这是一篇文章这是一篇文章这是一篇文章这是一篇文章这是一篇文章这是一篇文章这是一篇文章这是一篇文章这是一篇文章</a></p>
                            </div>
                        </div>
                        <div class="qshang-info">
                            <span class="glyphicon glyphicon-time"></span>
                            2016-02-03&nbsp;&nbsp;分类：[&nbsp;css&nbsp; ]
                            <span class="hidden-xs">点击：[&nbsp;9999&nbsp;]</span>
                            <div class="look-all pull-right">
                                <a href="#" class="button border-blue" role="button">查看详细</a>
                            </div>
                        </div>
                    </div>
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
        </div>
        {{--分页--}}
        <div class="col-md-12 col qshang-list" data-scroll-reveal="enter bottom over 1s and move 100px after 0.5s">
            <div class="qshang-box">
                分页
            </div>
        </div>
    </div>
</div>
<script>
    $(function(){
        $("#home").addClass('active');
    })
</script>
@endsection