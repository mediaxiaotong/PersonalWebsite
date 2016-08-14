@extends('layouts.frontend')
@section('info')
    <title>{{Config::get('web_config.web_title')}} - {{Config::get('web_config.seo_title')}}</title>
    <meta name="keywords" content="{{Config::get('web_config.keywords')}}" />
    <meta name="description" content="{{Config::get('web_config.description')}}" />
@endsection
@section('content')
<div class="swiper-container banner" id="myCarousel">
    <div class="swiper-wrapper">
        <div class="swiper-slide" style="background:rgb(110,149,153)">
            <img src="{{asset('images/frontend/banner/banner1.png')}}" alt="">
        </div>
        <div class="swiper-slide" style="background:rgb(184,183,162)">
            <img src="{{asset('images/frontend/banner/banner2.png')}}" alt="">
        </div>
        <div class="swiper-slide" style="background-color:rgb(117,199,197)">
            <img src="{{asset('images/frontend/banner/banner3.png')}}" alt="">
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
                {{--开始文章遍历--}}
                @foreach($new as $n)
                <div class="col-md-12 col qshang-list" data-scroll-reveal="enter bottom over 1s and move 100px after 0.5s">
                    <div class="qshang-box">
                        <div class="qshang-title">
                            <span class="tag bg-dot">原 创</span>
                            &nbsp;&nbsp;
                            <a href="{{url('article/'.$n->id)}}">{{$n->title}}</a>
                            <div class="qs-icon pull-right">
                                <img src="{{url('images/frontend/tuijian.gif')}}" alt="推荐">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 qs-pic">
                                <a href="{{url('article/'.$n->id)}}"><img src="{{url($n->thumb)}}" class="media-object animated" alt=""></a>
                            </div>
                            <div class="col-sm-6 jja">
                                <p><a href="{{url('article/'.$n->id)}}">{{$n->description}}</a></p>
                            </div>
                        </div>
                        <div class="col qshang-info">
                            <span class="glyphicon glyphicon-time"></span>
                            时间【{{$n->created_at}}】&nbsp;&nbsp;
                            <span class="glyphicon glyphicon-edit"></span>
                            分类【{{$n->category->name}}】
                            <span class="hidden-xs glyphicon glyphicon-play-circle">点击【{{$n->view}}】</span>
                            <div class="look-all pull-right ">
                                <a href="{{url('article/'.$n->id)}}" class="button border-blue" role="button">查看详细</a>
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
            {{$new->links()}}
        </div>

</div>
</div>
<script>
$(function(){
$("#home").addClass('active');
})
</script>
@endsection