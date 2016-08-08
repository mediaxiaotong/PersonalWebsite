@extends('layouts.home.login_header')
@section('content')
    <div class="page-container">
        <h1>小童博客注册</h1>
        <div class="connect">
            @if(count($errors)>0)
                @foreach($errors->all() as $error)
                    <p style="color:red;">{{ $error}}</p>
                @endforeach
            @endif
        </div>
        <form action="{{url('/register')}}" method="post">
            {{ csrf_field()}}
            <input type="text" name="name" class="username" placeholder="用户名">
            <input type="text" name="email" class="username" placeholder="邮箱">
            <input type="password" name="password" class="password" placeholder="密码">
            <input type="password" name="password_confirmation" class="password" placeholder="确认密码">
            <button type="submit">提交</button>
            <div class="error"><span>+</span></div>
        </form>
        <div class="connect">
            <p>Or connect with:</p>
            <p>
                <button type="button" style="max-width: 130px" onclick="javascrtpt:window.location.href='{{url('/')}}'">返回主页</button>
                <button type="button" style="max-width: 130px" onclick="javascrtpt:window.location.href='{{url('/login')}}'">立即登陆</button>
            </p>
        </div>
    </div>

    <!-- Javascript -->
    <script src="{{asset('assets/js/jquery-1.8.2.min.js')}}"></script>
    <script src="{{asset('assets/js/supersized.3.2.7.min.js')}}"></script>
    <script src="{{asset('assets/js/supersized-init.js')}}"></script>
    <script src="{{asset('assets/js/scripts.js')}}"></script>
@endsection
