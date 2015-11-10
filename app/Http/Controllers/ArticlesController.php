<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

//use Illuminate\Http\Request;
use Request;

class ArticlesController extends Controller {
	//
    public function index()
    {
//        return "hello ArticlesController";

//        $articles = Article::all();           //所有的数据
//        $articles = Article::latest('published_at')->get();   //时间最新排序
//        $articles = Article::latest('published_at')->where('published_at', '<=', Carbon::now())->get();//现在以前的
        $articles = Article::latest('published_at')->published()->get();    //把对应的查询，放在Model的scope中

//        dump($articles);
//        return $articles;
        return view('articles.index', compact('articles'));
    }

    public function show($id){
        $article = Article::find($id);
        // 找不到文章，抛出404
        if(is_null($article)){
            abort(404);
        }
//        dd($article->published_at);
        $this->showHelp($article);
        return view('articles.show', compact('article'));
    }

    function showHelp($article){
        //打印对应的published_at
        dd($article->published_at);
//        dd($article->created_at);
        // 返回当前日期加8天
//        dd($article->created_at->addDays(8));
//        // 对日期进行格式化
//        dd($article->created_at->addDays(8)->format('Y-m'));
//        // 返回距离当前的时间，如： "3 day from now"， "1 week from now"
//        dd($article->created_at->addDays(18)->diffForHumans());
    }

//    public function show($id){
//        $article = Article::findOrFail($id);
//        return view('articles.show', compact('article'));
//    }

    public function about(){
        return "ArticlesController  about dodo";
//        $name = "dodoniao";
//        return view('pages.about')->with('name',$name);
    }

    public function create(){
//        return "create";
        return view('articles.create');
    }

    public function store(){
//        return "ddd";

        $input = Request::all();
//        $input['published_at'] = Carbon::now();   //当时把publish_at设置为当前时间， 现在用view中提交的时间
        Article::create($input);
        return redirect('articles');

//        $input = Request::all();
//        return $input;
    }

}
