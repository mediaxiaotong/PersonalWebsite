<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>抱歉！您要找的页面不存在</title>
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/pintuer.css')}}" />
    <script src="{{asset('home/js/jquery.min.js')}}"></script>
    <script src="{{asset('home/js/pintuer.js')}}"></script>
</head>
<body>
<div class="container">
    <div class="panel margin-big-top">
        <div class="text-center">
            <br>
            <h2  class="padding-top">
                <stong>抱歉！您要找的页面不存在</stong>
            </h2>
            <div class="">
                <div class="float-left">
                    <img src="http://www.pintuer.com/images/ds-1.gif">
                    <div class="alert">
                        卧槽！页面不见了！
                    </div>
                </div>
                <div class="float-right">
                    <img src="http://www.pintuer.com/images/ds-2.png" width="260">
                </div>
            </div>
            <div class="padding-big">
                <a href="{{url('home/index')}}" class="button bg-yellow">返回首页</a>
                <a href="{{asset('home/images/bg1.png')}}"  target="view_window" class="button">保证不打死管理员</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>