<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\CreateCategoryRequest;
use App\Http\Requests\Backend\UpdateCategoryRequest;
use App\Model\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class CategoryController extends CommonController
{

    //get admin/category    全部分类列表
    public function index()
    {
       $category = Category::all();

        return view('backend.category.index')->with('data',$category);
    }

    //分类排序ajax异步提交
    public function changeorder()
    {
        $input = Input::all();
        $cate = Category::find($input['id']);
        $cate->order = $input['order'];
        $re = $cate->update();
        if($re)
        {
            $data = [
                'status' => 0,
                'msg' => '分类排序更新成功!'
            ];
        }
        else
        {
            $data = [
                'status' => 1,
                'msg' => '分类排序更新失败,请稍后重试!'
            ];
        }
        return $data;
    }

    // GET admin/category/create    添加分类页面
    public function create()
    {
        $data = Category::get();
        return view('backend.category.add',compact('data'));
    }

    // POST admin/category  添加分类提交
    public function store(CreateCategoryRequest $request)
    {
        if($input = $request->except('_token'))
        {
            $re = Category::create($input);
            if($re)
            {
                return redirect('backend/category');
            }
            else
            {
                return back()->with('errors','数据填充失败，未知错误!');
            }
        }
        else
        {
            return back();
        }
    }

    // PUT admin/category/{category}    更新分类
    public function update(UpdateCategoryRequest $request, $id)
    {
        if($input = $request->except('_token','_method'))
        {
            $re = Category::where('id',$id)->update($input);
            if($re)
            {
                return redirect('backend/category');
            }
            else
            {
                return back()->with('errors','分类信息更新失败，稍后重试');
            }
        }
        else
        {
            return back()->with('errors','分类信息更新失败，稍后重试');
        }
    }

    // GET admin/category/{category}/edit   编辑分类
    public function edit ($id)
    {
        $field = Category::find($id);
        $data = Category::get();
        return view('backend.category.edit',compact('field','data'));
    }

    // DELETE admin/category/{category} 删除单个分类
    public function destroy($id)
    {
        $re = Category::where('id',$id)->delete();
        if($re)
        {
            $data = [
                'status' => 0,
                'msg' => '分类删除成功'
            ];
        }
        else
        {
            $data = [
                'status' => 1,
                'msg' => '分类删除失败，请稍后重试'
            ];
        }
        return $data;
    }

    // GET admin/category/{category}    显示单个分类
    public function show()
    {

    }
}
