<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ArticlesController extends Controller {
	//
    public function index()
    {
//        return "hello ArticlesController";
        $articles = Article::all();
        dump($articles);
//        return $articles;
        return view('articles.index', compact('articles'));
    }


    public function about(){
        return "ArticlesController  about dodo";
//        $name = "dodoniao";
//        return view('pages.about')->with('name',$name);
    }


}
