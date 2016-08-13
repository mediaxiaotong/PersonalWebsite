@extends('layouts.backend')
@section('content')
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="{{url('backend/info')}}">首页</a> &raquo; 友情链接管理
    </div>
    <!--面包屑导航 结束-->

    <!--结果页快捷搜索框 结束-->

    <!--搜索结果页面 列表 开始-->
    <form action="#" method="post">
        <div class="result_wrap">
            <!--快捷导航 开始-->
            <div class="result_title">
                <h3>友情链接列表</h3>
            </div>
            <div class="result_content">
                <div class="short_wrap">
                    <a href="{{url('backend/link/create')}}"><i class="fa fa-plus"></i>添加链接</a>
                    <a href="{{url('backend/link')}}"><i class="fa fa-recycle"></i>全部链接</a>
                </div>
            </div>
            <!--快捷导航 结束-->
        </div>

        <div class="result_wrap">
            <div class="result_content">
                <table class="list_tab">
                    <tr>
                        <th class="tc" width="5%">排序</th>
                        <th class="tc" width="5%">ID</th>
                        <th>链接名称</th>
                        <th>链接标题</th>
                        <th>链接地址</th>
                        <th>操作</th>
                    </tr>
                    @foreach($data as $v)
                    <tr>
                        <td class="tc">
                            <input type="text" name="ord[]" onchange="changeOrder(this,'{{$v->id}}')" value="{{$v->order}}">
                        </td>
                        <td class="tc">{{$v->id}}</td>
                        <td>
                            <a href="#">{{$v->name}}</a>
                        </td>
                        <td>{{$v->title}}</td>
                        <td>{{$v->url}}</td>
                        <td>
                            <a href="{{url('backend/link/'.$v->id.'/edit')}}">修改</a>
                            <a href="javascript:;" onclick="delLinks({{$v->id}})">删除</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </form>
    <!--搜索结果页面 列表 结束-->
<script>
    function changeOrder(obj,id)
    {
        var link_order = $(obj).val();
        $.post('{{url('backend/link/changeorder')}}',{'_token':'{{csrf_token()}}','link_id':id,'link_order':link_order},function (data) {
            if(data.status == 0)
            {
                layer.msg(data.msg,{icon:6})
            }
            else
            {
                layer.msg(data.msg,{icon:5})
            }

        })
    }

    //删除分类
    function delLinks(id)
    {
        layer.confirm('您确定要删除这个链接吗？', {
            btn: ['确定','取消'] //按钮
        }, function(){
            $.post("{{url('backend/link')}}/"+id,{'_method':'delete','_token':"{{csrf_token()}}"},function (data) {
                if(data.status == 0)
                {
                    location.href = location.href;
                    layer.msg(data.msg,{icon:6});
                }
                else
                {
                    layer.msg(data.msg,{icon:5});
                }
            })
        }, function(){

        });
    }
</script>

@endsection