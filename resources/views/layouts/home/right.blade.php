<div class="xl12 xm4">
    <!--用户登录-->
    <h2 class="clearfix articlebox text-white padding"><span class="icon-user" style="color: #00bcd4">用户登录</span></h2>
    <div class="padding-big clearfix articlebox">
        <div>
            <br/>
            {{--表单--}}
            <form method="post" class="form-x form-auto">
                {{--用户名--}}
                <div class="form-group">
                    <div class="label">
                        <label for="username">
                            用户名</label>
                    </div>
                    <div class="field">
                        <input type="text" class="input input-auto" id="username" name="username" size="30" data-validate="required:必填" placeholder="手机/邮箱/账号" />
                    </div>
                </div>
                {{--密码--}}
                <div class="form-group">
                    <div class="label">
                        <label for="detail">
                            密&nbsp;&nbsp;码</label>
                    </div>
                    <div class="field">
                        <input type="text" class="input input-auto" id="username" name="username" size="30" data-validate="required:必填" placeholder="密码" />
                    </div>
                </div>
                {{--登录--}}
                <div class="form-button">
                    <button class="button articlebox" type="submit">
                        登录</button>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a class="button articlebox" href="{{url('home/register')}}">立即注册</a>
                </div>
            </form>
        </div>
        <br />
        <br /><hr/>
    </div>
    <br />
    <hr/>
    <br/>

    {{--我的书签--}}
    <div>
        <h2 class="clearfix articlebox text-white padding"><span class="icon-wrench" style="color: #00bcd4">我的书签</span></h2>
        <h4>
            <ul class="selected-inline clearfix articlebox">
                <br/>
                <ul class="selected-inline">
                    <li><a href="#">unity</a></li>
                    <li><a href="#">程序基础</a></li>
                    <li class="selected"><a href="#">3d模型</a></li>
                </ul>
                <br/>
                <br/>
                <br/>
            </ul>
        </h4>
    </div>
    <br/>
    <hr />
    <br/>

    {{--友情链接--}}
    <h2 class="clearfix articlebox text-white padding"><span class="icon-retweet" style="color: #00bcd4">友情链接</span></h2>
    <div>
        <br />
        <div class="links clearfix articlebox">
            <a href="#" target="_blank" class="button border-blue " role="button">渡游</a>&nbsp;
            <a href="#" target="_blank" class="button border-blue " role="button">unity独立开发</a>
            <a href="#" target="_blank" class="button border-blue " role="button">罗传月武</a>
            <a href="#" target="_blank" class="button border-blue " role="button">°lotus</a>
            <a href="#" target="_blank" class="button border-blue " role="button">doyourgame</a>
        </div>
    </div>
</div>


