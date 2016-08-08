<!--导航-->
<div class="demo-nav padding-big-bottom fixed bg-white">
    <div class="container padding-top padding-bottom">

        <div class="line">
            <div class="xl12 xs3 xm3 xb2">
                <button class="button icon-navicon float-right" data-target="#header-demo"></button>
                <a href="http://www.mediaxiaotong.com"><img src="{{asset('home/img/logo.png')}}" alt="mediaxiaotong" /></a>
            </div>
            <div class=" xl12 xs9 xm9 xb10 nav-navicon" id="header-demo">

                <div class="xs8 xm6 xb5 padding-small">
                    <ul class="nav nav-menu nav-inline nav-big">
                        <li><a href="{{url('/')}}">首页</a></li>
                        <li class="active">
                            <a href="http://www.mediaxiaotong.com">分类<span class="arrow"></span></a>
                            <ul class="drop-menu">
                                @foreach($nav as $f)
                                <li><a href="{{$f->cate_id}}">{{$f->cate_name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="{{url('home/message')}}">留言板</a></li>
                        <li><a href="http://www.mediaxiaotong.com">关于我</a></li>
                    </ul>
                </div>
                {{--搜索框--}}
                <div class="xs4 xm3 xb4">
                    <form>
                        <div class="input-group padding-little-top">
                            <input type="text" class="input border-blue" name="keywords" size="30" placeholder="关键词" />
                            <span class="addbtn"><button type="button" class="button bg-blue icon-search"></button></span>
                        </div>
                    </form>
                </div>
                {{--设为首页--}}
                <div class="hidden-l hidden-s xm3 xb3">
                    <div class="text-red text-big height-large text-right">
                        <button class="button win-homepage icon-home float-right">设为首页</button>
                    </div>
                </div>

            </div>

        </div>

    </div>

</div>