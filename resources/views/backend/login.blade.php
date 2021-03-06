@extends('layouts.backend')
@section('content')
	<div class="login_box" style="background:#F3F3F4;">
		<h1>Blog</h1>
		<h2>小童博客管理</h2>
		<div class="form">
			@if(count($errors)>0)
				@if(is_object($errors)) {{--//这里利用到login方法登录失败后，用with传回来的一个参数，errors。它的类型是一个对象而不是字符串。如果$errors是一个对象进入foreach循环，--}}
				@foreach($errors->all() as $error)
					<p style="color:red">{{$error}}</p>
				@endforeach
				@else
					<p style="color:red;">{{$errors}}</p>
				@endif
			@endif
			<form action="{{url('backend/login')}}" method="post">
				{{csrf_field()}}
				<ul>
					<li>
						<input type="text" name="name" class="text"/>
						<span><i class="fa fa-user"></i></span>
					</li>
					<li>
						<input type="password" name="password" class="text"/>
						<span><i class="fa fa-lock"></i></span>
					</li>
					<li>
						<input type="text" class="code" name="code"/>
						<span><i class="fa fa-check-square-o"></i></span>
						<img src="{{url('backend/code')}}" alt="" onclick="this.src='{{url('backend/code')}}?'+Math.random()">
					</li>
					<li>
						<input type="submit" value="立即登陆"/>
					</li>
				</ul>
			</form>
			<p><a href="{{url('frontend/index')}}">返回首页</a> &copy; 2016 Powered by <a href="http://www.mediaxiaotong.com" target="_blank">http://www.mediaxiaotong.com</a></p>
		</div>
	</div>
@endsection
