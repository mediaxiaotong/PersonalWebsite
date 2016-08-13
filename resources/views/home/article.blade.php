@extends('layouts.home.header')
@section('info')
    <title>{{$art->title}} - {{Config::get('web_config.web_title')}}</title>
    <meta name="keywords" content="{{$art->tag}}" />
    <meta name="description" content="{{$art->description}}" />
@endsection
@section('content')
    <div class="swiper-container banner" id="myCarousel">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background: #223240">
                <img src="{{asset('home/images/banner/banner01.jpg')}}" alt="">
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
                <li><a>分类</a></li>
                <li><a href="{{url('home/category/'.$cate->id)}}">{{$cate->name}}</a></li>
                <li class="active">文章正文</li>
            </ol>
            <div class="line-big">
                <div class="xl12 xm8">
                    <div class="line-small clearfix">
                        <div class="xs12">
                            <h2 class="a_title text-center">{{$art->title}}</h2>
                            <div class="writeBox">
                                <div class="a-write">
                                    <div class="info-w">
                                        时间：{{$art->created_at}}
                                        作者：<a>{{$art->editor}}</a>&nbsp;&nbsp;
                                        <span class="hidden-xs">阅读：{{$art->view}}</span>
                                        &nbsp;
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
                                        <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>

                                    </div>
                                </div>
                            </div>
                            <br/>
                            <br/>
                            <br>
                            <div class="a-content">
                                {!! $art->content !!}
                            </div>
                            <br/>
                            <br/>
                            <br>
                            <div class="a-write hidden-xs">
                                本文为原创，转载请注明出处:&nbsp;&nbsp;<a href="http://www.mediaxiaotong.com">http://www.mediaxiaotong.com</a>
                            </div>
                        </div>

                        <div class="a-up" >
                                 <p>上一篇：
                                @if($article['pre'])
                                    <a title="{{$article['pre']->title}}" href="{{url('home/article/'.$article['pre']->id)}}">{{$article['pre']->title}}</a>
                                </p>
                                @else
                                    <span>没有上一篇了</span>
                                @endif
                        </div>
                        <div class="a-down">
                            <p>下一篇：
                                @if($article['next'])
                                    <a title="{{$article['next']->title}}" href="{{url('home/article/'.$article['next']->id)}}" >{{$article['next']->title}}</a>

                            </p>
                                 @else
                                <span>没有下一篇了</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection