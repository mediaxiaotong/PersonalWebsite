
<!DOCTYPE html>
<html lang="zh-cn">

<head>
    <title>mediaxiaotong</title>
    <meta name="keywords" content="mediaxiaotong" />
    <meta name="description" content="mediaxiaotong博客" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('home/css/pintuer.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/style.css')}}">
    <script src="{{asset('home/js/jquery.js')}}"></script>
    <script src="{{asset('home/js/pintuer.js')}}"></script>
    <script src="{{asset('home/js/respond.js')}}"></script>
    <link type="image/x-icon" href="{{asset('home/img/icon.ico')}}" rel="shortcut icon">
    <style>
        .demo-nav.fixed.fixed-top {
            z-index: 8;
            background-color:rgba(255,255,255,0.8);
            width: 100%;
            padding: 0;
            border-bottom: solid 3px #0a8;
            -webkit-box-shadow: 0 3px 6px rgba(0, 0, 0, .175);
            box-shadow: 0 3px 6px rgba(0, 0, 0, .175);
        }

         .pagination span {
             color: #333;
             padding: 8px 12px;
             line-height: 18px;
             display: block;
             transition: all 1s cubic-bezier(0.175,0.885,0.32,1) 0s;
         }
        /*background-color:rgba(255,255,255,0);*/
    </style>
</head>

<body>
<!--顶部-->
@yield('content')
</body>

</html>
