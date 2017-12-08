<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use Illuminate\HttpResponse;
use App\Http\Controllers\Controller;

// use Illuminate\Http\Request;
// use Request;

class ArticlesController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth', ['only' => 'create']);
    }

    public function index(){

      // return \Auth::user();
      // return $articles returns json
      // return $articles;
      $articles = Article::latest('published_at')->published()->get(); // the latest() is equivalent to order_by('published_at', 'desc')->get();


      return view('articles.index', compact('articles'));
    }

    public function show($id){

      $article = Article::findOrFail($id);

      // die dump or dd allows you to debug the contents of a variable
      // dd($article->published_at);

      if(is_null($article)){
        // if there are nulls then show a 404 page since there is no data available for the article with this nonexistent id
        abort(404);
      }

      return view('articles.show', compact('article'));
    }

    public function create(){

      return view('articles.create');
    }

    // Requests\CreateArticleRequest can be imported above
    public function store(ArticleRequest $request){
      // We want to make sure the user_id => Auth::id()
      $article = new Article($request->all());

      \Auth::user()->articles()->save($article); // find the articles for the user that's logged in and save the new one

      // Article::create($request->all());

      return redirect('articles');
    }

    public function edit($id){

      $article = Article::findOrFail($id);

      return view('articles.edit', compact('article'));
    }

    public function update($id, ArticleRequest $request){

      $article = Article::findOrFail($id);

      $article->update($request->all());

      return redirect('articles');
    }
}
