@extends('layouts.header_f')
@section('content')
<div class="page-container">
    <h1>登录</h1>
    <div class="connect">
        {{--{{ $errors->has('email') ? ' has-error' : '' }}--}}
        {{--@if ($errors->has('email'))--}}
        {{--<p style="color:red;">{{ $errors->first('email') }}</p>--}}
        {{--@endif--}}
        {{--{{ $errors->has('password') ? ' has-error' : '' }}--}}
        {{--@if ($errors->has('password'))--}}
            {{--<p style="color:red;">{{ $errors->first('password') }}</p>--}}
        {{--@endif--}}
        {{--{{$msg}}--}}

        @if(count($errors)>0)
                @if(is_object($errors)) {{--//这里利用到login方法登录失败后，用with传回来的一个参数，errors。它的类型是一个对象而不是字符串。如果$errors是一个对象进入foreach循环，--}}
                    @foreach($errors->all() as $error)
                    <p style="color:red;">{{ $error}}</p>
                    @endforeach
                @else
                <p style="color:red;">{{ $errors}}</p>
                @endif
        @endif

    </div>
    <form action="{{url('/login')}}" method="post">
        {{ csrf_field() }}
        <input type="text" name="email" class="username" placeholder="邮箱">
        <input type="password" name="password" class="password" placeholder="密码">
        <button type="submit">提交</button>
    </form>
    <div class="connect">
        <p>
            <button type="button" style="max-width: 130px" onclick="javascrtpt:window.location.href='{{url('/')}}'">返回主页</button>
            <button type="button" style="max-width: 130px" onclick="javascrtpt:window.location.href='{{url('/register')}}'">立即注册</button>
        </p>
    </div>
</div>

<!-- Javascript -->
@endsection




