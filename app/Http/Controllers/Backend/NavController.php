<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\CreateNavRequest;
use App\Http\Requests\Backend\UpdateNavRequest;
use App\Model\Nav;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class NavController extends CommonController
{
    //
    //get.admin/navs  全部自定义导航列表
    public function index()
    {
        $data = Nav::orderBy('order','asc')->get();
        return view('backend.navs.index',compact('data'));
    }

    public function changeOrder()
    {
        $input = Input::all();
        $navs = Nav::find($input['id']);
        $navs->order = $input['order'];
        $re = $navs->update();
        if($re){
            $data = [
                'status' => 0,
                'msg' => '自定义导航排序更新成功！',
            ];
        }else{
            $data = [
                'status' => 1,
                'msg' => '自定义导航排序更新失败，请稍后重试！',
            ];
        }
        return $data;
    }

    //get.admin/navs/create   添加自定义导航
    public function create()
    {
        return view('backend.navs.add');
    }

    //post.admin/navs  添加自定义导航提交
    public function store(CreateNavRequest $request)
    {
        if($input = $request->except('_token'))
        {
            $re = Nav::create($input);
            if($re)
            {
                return redirect('backend/nav');
            }
            else
            {
                return back()->with('errors','自定义导航失败，请稍后重试！');
            }
        }
        else
        {
            return back()->with('errors','自定义导航失败，请稍后重试！');
        }
    }

    //get.admin/navs/{navs}/edit  编辑自定义导航
    public function edit($id)
    {
        $field = Nav::find($id);
        return view('backend.navs.edit',compact('field'));
    }

    //put.admin/navs/{navs}    更新自定义导航
    public function update(UpdateNavRequest $request ,$id)
    {
        if($input = $request->except('_token','_method'))
        {
            $re = Nav::where('id',$id)->update($input);
            if($re)
            {
                return redirect('backend/nav');
            }
            else
            {
                return back()->with('errors','自定义导航更新失败，请稍后重试！');
            }
        }
        else
        {
            return back()->with('errors','自定义导航更新失败，请稍后重试！');
        }
    }

    //delete.admin/navs/{navs}   删除自定义导航
    public function destroy($id)
    {
        $re = Nav::where('id',$id)->delete();
        if($re){
            $data = [
                'status' => 0,
                'msg' => '自定义导航删除成功！',
            ];
        }else{
            $data = [
                'status' => 1,
                'msg' => '自定义导航删除失败，请稍后重试！',
            ];
        }
        return $data;
    }

    //get.admin/category/{category}  显示单个分类信息
    public function show()
    {

    }

}
