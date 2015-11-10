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
        $articles = Article::latest('published_at')->get();
//        $articles = Article::all();
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
        return view('articles.show', compact('article'));
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
        $input['published_at'] = Carbon::now();
        Article::create($input);
        return redirect('article');

//        $input = Request::all();
//        return $input;
    }

}
