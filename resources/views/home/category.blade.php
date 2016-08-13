@extends('layouts.home.header')
@section('info')
    <title>{{$field->name}} - {{Config::get('web_config.web_title')}}</title>
    <meta name="keywords" content="{{$field->keyword}}" />
    <meta name="description" content="{{$field->description}}" />
@endsection
@section('content')
    <div class="swiper-container banner" id="myCarousel">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background: #223240">
                <img src="{{asset('home/images/slide1.png')}}" alt="">
            </div>
            <div class="swiper-slide" style="background: #f4e3da">
                <img src="{{asset('home/images/slide2.png')}}" alt="">
            </div>
            <div class="swiper-slide" style="background: #dd292c">
                <img src="{{asset('home/images/slide3.png')}}" alt="">
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
                <li> <a>分类</a></li>
                <li class="active"><a>{{$field->name}}</a></li>
            </ol>
            <div class="row">
                <div class="col-md-7">
                    {{--开始文章--}}
                    @foreach($data as $d)
                    <div class="col-md-12 col qshang-list" data-scroll-reveal="enter bottom over 1s and move 100px after 0.5s">
                        <div class="qshang-box">
                            <div class="qshang-title">
                                <span class="tag bg-dot">原 创</span>&nbsp;&nbsp;
                                <a href="{{url('home/article/'.$d->id)}}">{{$d->title}}</a>
                                <div class="qs-icon pull-right">
                                    <img src="{{asset('home/images/tuijian.gif')}}" alt="推荐">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 qs-pic">
                                    <a href="{{url('home/article/'.$d->id)}}"><img src="{{url($d->thumb)}}" class="media-object animated" alt=""></a>
                                </div>
                                <div class="col-sm-6 jja">
                                    <p><a href="{{url('home/article/'.$d->id)}}">{{$d->description}}</a></p>
                                </div>
                            </div>
                            <div class="col qshang-info">
                                <span class="glyphicon glyphicon-time"></span>
                                {{$d->created_at}}&nbsp;&nbsp;分类：{{$field->name}}
                                <span class="hidden-xs">点击：{{$d->view}}</span>
                                <div class="look-all pull-right ">
                                    <a href="{{url('home/article/'.$d->id)}}" class="button border-blue" role="button">查看详细</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{--文章遍历结束--}}
                </div>
                {{--右边--}}
                @parent
            </div>
            {{--分页--}}
            <div class="col-md-12 col qshang-list " style="text-align:center" data-scroll-reveal="enter bottom over 1s and move 100px after 0.5s">
                {{$data->links()}}
            </div>
        </div>
    </div>
    <script>
        $(function(){
            $("#home").addClass('active');
        })
    </script>
@endsection