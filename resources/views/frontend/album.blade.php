@extends('layouts.frontend')
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
            <ol class="breadcrumb">
                <li><a href="/index/index">首页</a></li>
                <li><a href="/photo/index">相册</a></li>
                <li class="active">生活照</li>
            </ol>
            <div class="row">
                <div class="col photoName clearfix">
                    <div class="pic pull-left">
                        <img src="/Uploads//covers/2016-06-11/575b6a35468f2.jpg">
                    </div>
                    <div class="txt pull-left">
                        <p class="xcName">生活照</p>
                        <p class="xcNum">11张&nbsp;&nbsp;/&nbsp;&nbsp;壮壮和安安的日常生活，不服不行！</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-sm-3 col-xs-6 col qshang-list" data-scroll-reveal="enter bottom over 1s and move 100px after 0.5s" data-scroll-reveal-id="1" style="-webkit-transform: translatey(0);transform: translatey(0);opacity: 1;-webkit-transition: -webkit-transform 1s ease-in-out 0.5s,  opacity 1s ease-in-out 0.5s;transition: transform 1s ease-in-out 0.5s, opacity 1s ease-in-out 0.5s;-webkit-perspective: 1000;-webkit-backface-visibility: hidden;" data-scroll-reveal-initialized="true">
                    <div class="img-box">
                        <div class="clearfix">
                            <a class="fancybox-button" rel="fancybox-button" href="#" title="这家伙睡的">
                                <div class="pic">
                                    <img src="#" class="animated">
                                </div>
                                <p class="text-center">这家伙睡的</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="pager">
                <div><span class="rows">第<b>1</b>页/共<b>1</b>页</span></div>		</div>
        </div>
    </div>

@endsection