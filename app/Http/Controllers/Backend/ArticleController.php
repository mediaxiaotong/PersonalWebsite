<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\CreateArticleRequest;
use App\Http\Requests\Backend\UpdateArticleRequest;
use App\Model\Article;
use App\Model\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class ArticleController extends CommonController
{
    //
    //全部文章列表
    public function index()
    {
        $article = Article::orderBy('id','desc')->paginate(5);
        return view('backend.article.index',compact('article'));
    }

    // GET admin/article/create    添加文章
    public function create()
    {
        $data = Category::all();
        return view('backend.article.add',compact('data'));
    }

    // POST admin/article  添加文章提交
    public function store(CreateArticleRequest $request)
    {
        if($input = $request->all())
        {
            $re = Article::create($input);
            if($re)
            {
                return redirect('backend/article');
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

    // GET admin/category/{article}/edit   编辑文章
    public function edit ($id)
    {
        $field = Article::find($id);
        $data = Category::all();
        return view('backend.article.edit',compact('data','field'));
    }

    // PUT admin/article/{category}    更新分类
    public function update(UpdateArticleRequest $request, $id)
    {
        if($input = $request->except('_token','_method'))
        {
            $re = Article::where('id',$id)->update($input);
            if($re)
            {
                return redirect('backend/article');
            }
            else
            {
                return back()->with('errors','文章更新失败，稍后重试');
            }
        }
        else
        {
            return back()->with('errors','文章更新失败，稍后重试');
        }

    }

    // DELETE admin/article/{article} 删除单个文章
    public function destroy($id)
    {
        $art = Article::where('id',$id)->first();
        $re = $art->delete();
        if($re)
        {
            $data = [
                'status' => 0,
                'msg' => '文章删除成功'
            ];
        }
        else
        {
            $data = [
                'status' => 1,
                'msg' => '文章删除失败，请稍后重试'
            ];
        }
        return $data;
    }

    //图片上传
    public function upload()
    {
        $file = Input::file('Filedata');
        if($file->isValid())
        {
            $realPath = $file->getRealPath();   //临时文件的绝对路径
            $entension = $file->getClientOriginalExtension();    //上传文件的后缀
            $newName = date('YmdHis').mt_rand(100,999).'.'.$entension;
            $path = $file->move(public_path().'/uploads',$newName);
            $filepath = 'uploads/'.$newName;
            return $filepath;
        }
    }

}
