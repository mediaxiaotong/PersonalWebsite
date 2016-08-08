@extends('layouts.header')
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
                <li class="active">关于我</li>
            </ol>
            <div class="line-big">
                <div class="xl12 xm8">
                    <div class="line-small clearfix">
                        关于我
                        关于我
                        关于我

                        关于我
                        关于我
                        关于我
                        关于我
                        <hr>
                        关于我
                        <hr>
                        关于我
                        <hr>
                        关于我
                        <hr>
                        关于我
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection