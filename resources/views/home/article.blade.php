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
                <li><a href="{{url('/')}}">首页</a></li>
                <li><a>分类</a></li>
                <li class="active">文章正文</li>
            </ol>
            <div class="line-big">
                <div class="xl12 xm8">
                    <div class="line-small clearfix">
                        <div class="xs12">
                            <h2 class="a_title text-center">Laravel多图片上传uploadify</h2>
                            <div class="writeBox">
                                <div class="a-write">
                                    <div class="info-w">
                                        时间：&nbsp;2016-08-08 18:47&nbsp;&nbsp;
                                        作者：<a>小童</a>&nbsp;&nbsp;
                                        <span class="hidden-xs">阅读：（138）</span>
                                    </div>
                                    <div class="bdsharebuttonbox fenxiang hidden-xs bdshare-button-style1-16" data-bd-bind="1470646952370">
                                        <span class="pull-left">分享到：</span>
                                        <a title="分享到QQ空间" class="bds_qzone" href="#" data-cmd="qzone"></a>
                                        <a title="分享到腾讯微博" class="bds_tqq" href="#" data-cmd="tqq"></a>
                                        <a title="分享到新浪微博" class="bds_tsina" href="#" data-cmd="tsina"></a>
                                        <a title="分享到微信" class="bds_weixin" href="#" data-cmd="weixin"></a>
                                        <a title="分享到百度贴吧" class="bds_tieba" href="#" data-cmd="tieba"></a>
                                        <a title="分享到百度云收藏" class="bds_bdysc" href="#" data-cmd="bdysc"></a>
                                        <a title="分享到QQ好友" class="bds_sqq" href="#" data-cmd="sqq"></a>
                                        <a class="bds_more" href="#" data-cmd="more"></a>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="a-content">
                                qqq
                            </div>
                            <hr>
                            <div class="a-write hidden-xs">
                                本文为原创，转载请注明出处:&nbsp;&nbsp;<a href="http://www.mediaxiaotong.com">http://www.mediaxiaotong.com</a>
                            </div>
                        </div>

                        <div class="a-up">
                            <p>上一篇：
                                <a title="Swiper强大的移动端触摸滑动插件" href="/article/index/a_id/71">xxxxxxxxxxxxxxxxxxxx</a>						</p>
                        </div>
                        <div class="a-down">
                            <p>下一篇：
                                <a title="情殇博客留言板分享" href="/article/index/a_id/68">xxxxxxxxxxxxxxx</a>						</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection