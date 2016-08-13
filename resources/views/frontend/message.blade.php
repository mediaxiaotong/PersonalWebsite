@extends('layouts.frontend')
@section('info')
    <title>{{Config::get('web_config.web_title')}} - {{Config::get('web_config.web_message')}}</title>
    <meta name="keywords" content="{{Config::get('web_config.message_keywords')}}" />
    <meta name="description" content="{{Config::get('web_config.message_description')}}" />
@endsection
@section('content')
<div class="swiper-container banner" id="myCarousel">
    <div class="swiper-wrapper">
        <div class="swiper-slide" style="background:rgb(110,149,153)">
            <img src="{{asset('home/images/banner/banner1.png')}}" alt="">
        </div>
        <div class="swiper-slide" style="background:rgb(184,183,162)">
            <img src="{{asset('home/images/banner/banner2.png')}}" alt="">
        </div>
        <div class="swiper-slide" style="background-color:rgb(117,199,197)">
            <img src="{{asset('home/images/banner/banner3.png')}}" alt="">
        </div>
    </div>
    <div class="swiper-pagination "></div>
    <div class="swiper-button-prev hidden-xs"><span class="glyphicon glyphicon-menu-left"></span></div>
    <div class="swiper-button-next hidden-xs"><span class="glyphicon glyphicon-menu-right"></span></div>
</div>
<div class="tab1">
    <div class="container">
        <ol class="breadcrumb chip qshang-box">
            <li><a href="{{url('home/index')}}" class="glyphicon glyphicon-home">首页</a></li>
            <li class="active"><span class=" glyphicon glyphicon-comment"></span> 留言板</li>
        </ol>
        <div class="row">
            {{--留言板--}}
            <div class="col-md-7">
                <div class="liuyan message-text clearfix">
                    @if(count($errors)>0)
                        @if(is_object($errors)) {{--//这里利用到login方法登录失败后，用with传回来的一个参数，errors。它的类型是一个对象而不是字符串。如果$errors是一个对象进入foreach循环，--}}
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger liuyanTip" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                {{ $error}}
                            </div>
                        @endforeach
                        @else
                            <div class="alert alert-danger liuyanTip" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                {!! $errors !!}
                            </div>
                        @endif
                    @endif

                    <div class="alert alert-success liuyanTip" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>温馨提示：</strong>请文明留言，</div>
                    <form action="{{url('home/message')}}" method="post" class="form-inline" id="LiuForm">
                        {{csrf_field()}}
                        <textarea name="content" id="myEditor" style="width:100%;height:120px;" rows="5" name="content" cols="50"></textarea>
                        <input type="submit" value="提交" id="btn-submit" class="btn btn-default message-btn pull-right">
                    </form>
                </div>
                <div class="row">
                    @foreach($message as $m)
                        <div class="col-md-12 qshang-list liuyanList" data-scroll-reveal="enter bottom over 1s and move 100px after 0.5s">

                            <div class="qshang-box lyList">

                                <div class="said_img">
                                    <img src="{{url('home/images/user_head.jpg')}}" class="radius-circle" width="60px" height="60px" />
                                    <div class="liuyan_t">
                                        <span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;
                                            {{$m->user->name}}
                                            <span class="tag bg-dot">会员</span>&nbsp
                                        &nbsp;&nbsp;
                                        <span class="glyphicon glyphicon-time"></span>&nbsp;
                                        {{$m->created_at}}&nbsp;
                                    </div>
                                    <div class="liuyan_c">
                                        {!! $m->content !!}
                                    </div>
                                </div>
                                {{--回复--}}
                                {{--<div class="f_liuyan">--}}
                                    {{--<hr />--}}
                                    {{--<div class="liuyan_a">--}}
                                    {{--</div>--}}
                                    {{--<div class="said_img">--}}
                                        {{--<img src="images/logo.png" class="radius-circle" width="60px" height="60px" />--}}
                                        {{--<div class="liuyan_t">--}}
                                            {{--<span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;小童哥哥&nbsp;&nbsp;--}}
                                            {{--<span class="glyphicon glyphicon-time"></span>&nbsp;&nbsp;2016-06-12&nbsp;&nbsp;--}}
                                            {{--<span>回复 @<a>{$vo.username}</a> 中说到：</span>--}}
                                        {{--</div>--}}
                                        {{--<div class="liuyan_c">--}}
                                            {{--嘿嘿--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            {{--右边--}}
            @parent
            <div class="col-md-12 col qshang-list " style="text-align:center" data-scroll-reveal="enter bottom over 1s and move 100px after 0.5s">
                {{--{{$message->links()}}--}}
                {{$message->links()}}
            </div>
        </div>

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