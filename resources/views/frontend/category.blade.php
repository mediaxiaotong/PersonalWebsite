@extends('layouts.frontend')
@section('info')
    <title>{{$field->name}} - {{Config::get('web_config.web_title')}}</title>
    <meta name="keywords" content="{{$field->keyword}}" />
    <meta name="description" content="{{$field->description}}" />
@endsection
@section('content')
    <div class="swiper-container banner" id="myCarousel">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background:rgb(110,149,153)">
                <img src="{{asset('frontend/images/banner/banner1.png')}}" alt="">
            </div>
            <div class="swiper-slide" style="background:rgb(184,183,162)">
                <img src="{{asset('frontend/images/banner/banner2.png')}}" alt="">
            </div>
            <div class="swiper-slide" style="background-color:rgb(117,199,197)">
                <img src="{{asset('frontend/images/banner/banner3.png')}}" alt="">
            </div>
        </div>
        <div class="swiper-pagination "></div>
        <div class="swiper-button-prev hidden-xs"><span class="glyphicon glyphicon-menu-left"></span></div>
        <div class="swiper-button-next hidden-xs"><span class="glyphicon glyphicon-menu-right"></span></div>
    </div>
    <div class="tab1">
        <div class="container">
            <ol class="breadcrumb chip qshang-box">
                <li><a href="{{url('frontend/index')}}" class="glyphicon glyphicon-home">首页</a></li>
                <li class="active"><span class="glyphicon glyphicon-align-justify"></span>{{$field->name}}</li>
            </ol>
            <div class="row">
                <div class="col-md-7">
                    {{--开始文章--}}
                    @foreach($data as $d)
                    <div class="col-md-12 col qshang-list" data-scroll-reveal="enter bottom over 1s and move 100px after 0.5s">
                        <div class="qshang-box">
                            <div class="qshang-title">
                                <span class="tag bg-dot">原 创</span>&nbsp;&nbsp;
                                <a href="{{url('frontend/article/'.$d->id)}}">{{$d->title}}</a>
                                <div class="qs-icon pull-right">
                                    <img src="{{asset('home/images/tuijian.gif')}}" alt="推荐">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 qs-pic">
                                    <a href="{{url('frontend/article/'.$d->id)}}"><img src="{{url($d->thumb)}}" class="media-object animated" alt=""></a>
                                </div>
                                <div class="col-sm-6 jja">
                                    <p><a href="{{url('frontend/article/'.$d->id)}}">{{$d->description}}</a></p>
                                </div>
                            </div>
                            <div class="col qshang-info">
                                <span class="glyphicon glyphicon-time"></span>
                                时间【{{$d->created_at}}】&nbsp;&nbsp;
                                <span class="glyphicon glyphicon-edit"></span>
                                分类【{{$field->name}}】
                                <span class="hidden-xs glyphicon glyphicon-play-circle">点击【{{$d->view}}】</span>
                                <div class="look-all pull-right ">
                                    <a href="{{url('frontend/article/'.$d->id)}}" class="button border-blue" role="button">查看详细</a>
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