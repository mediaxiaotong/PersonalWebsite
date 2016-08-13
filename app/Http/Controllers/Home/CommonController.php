<?php

namespace App\Http\Controllers\Home;

use App\Model\Article;
use App\Model\Category;
use App\Model\Link;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class CommonController extends Controller
{
    //
    public function __construct()
    {
        //查看最多的文章
        $hot = Article::orderBy('view','desc')->take(8)->get();
        //友情链接
        $link = Link::orderBy('order','asc')->get();
        //分类导航
        $cate = Category::orderBy('order','asc')->get();

        View::share('hot',$hot);
        View::share('link',$link);
        View::share('cate_nav',$cate);
    }

}
