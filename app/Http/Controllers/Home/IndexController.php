<?php

namespace App\Http\Controllers\Home;

use App\Model\Article;
use App\Model\Category;
use App\Model\Link;
use Illuminate\Http\Request;

use App\Http\Requests;

class IndexController extends CommonController
{
    public function wecome()
    {
        $cate = Category::orderBy('order','asc')->get();
        $art = Article::orderBy('view','desc')->take(2)->get();
        return view('index', compact('cate','art'));
    }
    
    public function index()
    {
        //获取最新文章图文列表-3篇
        $new = Article::orderBy('created_at','desc')->paginate(4);
        return view('home.index', compact('new'));

    }

    public function category($id)
    {
//        //图文列表4篇（带分页）
        $data = Article::where('cate_id',$id)->orderBy('created_at','desc')->paginate(3);
//
//        //查看次数自增
//        Category::where('id',$id)->increment('view');
//
        $field = Category::find($id);
        return view('home.category',compact('field','data','submenu'));
    }

    public function article($id)
    {
        //$field = Article::Join('category','article.id','=','category.id')->where('id',$id)->first();
        $art = Article::find($id);

        $cate = Category::where('id',$art->cate_id)->first();
        //dd($field);
        //查看次数自增
        Article::where('id',$id)->increment('view');
//
        $article['pre'] = Article::where('id','<',$id)->orderBy('id','desc')->first();
        $article['next'] = Article::where('id','>',$id)->orderBy('id','asc')->first();
//
//        $data = Article::where('id',$field->id)->orderBy('id','desc')->take(6)->get();

        return view('home.article',compact('art','cate','article'));
       // return view('home.article',compact('field','article','data'));
    }
}
