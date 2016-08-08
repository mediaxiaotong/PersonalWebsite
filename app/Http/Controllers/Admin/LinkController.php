<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateLinkRequest;
use App\Http\Requests\UpdateLinkRequest;
use App\Model\Category;
use App\Model\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class LinkController extends CommonController
{
    //
    //全部友情链接列表
    public function index()
    {
        $data = Link::orderBy('order','asc')->get();
        return view('admin.links.index',compact('data'));
    }

    public function changeorder()
    {
        $input = Input::all();
        $Link = Category::find($input['id']);
        $Link->order = $input['order'];
        $re = $Link->update();
        if($re)
        {
            $data = [
                'status' => 0,
                'msg' => '友情链接排序更新成功!'
            ];
        }
        else
        {
            $data = [
                'status' => 1,
                'msg' => '友情链接排序更新失败,请稍后重试!'
            ];
        }
        return $data;
    }

    public function show()
    {

    }

    // GET admin/category/create    添加链接
    public function create()
    {
        return view('admin.links.add',compact('data'));
    }
    // POST admin/category  添加分类提交
    public function store(CreateLinkRequest $request)
    {
        if($input = $request->except('_token'))
        {
            $re = Link::create($input);
            if($re)
            {
                return redirect('admin/link');
            }
            else
            {
                return back()->with('errors','友情链接添加失败，未知错误!');
            }
        }
        else
        {
            return back();
        }
    }

    // GET admin/category/{category}/edit   编辑分类
    public function edit ($id)
    {
        $field = Link::find($id);
        $data = Link::where('id',0)->get();
        return view('admin.links.edit',compact('field','data'));
    }

    // PUT admin/category/{category}    更新分类
    public function update(UpdateLinkRequest $request, $id)
    {
        if($input = $request->except('_token','_method'))
        {
            $re = Link::where('id',$id)->update($input);
            if($re)
            {
                return redirect('admin/link');
            }
            else
            {
                return back()->with('errors','友情链接更新失败，稍后重试');
            }
        }
        else
        {
            return back()->with('errors','友情链接更新失败，稍后重试');
        }
    }

    // DELETE admin/category/{category} 删除单个分类
    public function destroy($id)
    {
        $re = Link::where('id',$id)->delete();;
        if($re)
        {
            $data = [
                'status' => 0,
                'msg' => '友情链接删除成功'
            ];
        }
        else
        {
            $data = [
                'status' => 1,
                'msg' => '友情链接删除失败，请稍后重试'
            ];
        }
        return $data;
    }
}
