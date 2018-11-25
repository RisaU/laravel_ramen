<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use App\Http\Controllers\Controller;
use App\Article;
use Carbon\Carbon;

class ArticlesController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth')
        ->except(['index', 'show']);
  }

  public function index()
  {
    // $articles = Article::all();
    $articles = Article::latest('published_at')
              ->latest('created_at')
              ->published()
              ->get();

    return view('articles.index', compact('articles'));
  }

  public function show($id)
  {
    $article = Article::findOrFail($id);

    return view('articles.show', compact('article'));
  }

  public function create()
  {
    return view('articles.create');
  }
  public function store(ArticleRequest $request)
  {
    Article::create($request->validated());
    \Flash::success('New article has been posted');

    // return redirect('articles');
    return redirect()->route('articles.index');
  }

  public function edit($id)
  {
    $article = Article::findOrFail($id);

    return view('articles.edit', compact('article'));
  }

  public function update(ArticleRequest $request, $id)
  {
    $article = Article::findOrfail($id);
    $article->update($request->validated());
    \Flash::success('The article has been updated.');

    // return redirect(url('articles', [$article->id]));
    return redirect()->route('articles.show', [$article->id]);
  }

  // delete article
  public function destroy($id)
  {
    $article = Article::findOrfail($id);
    $article->delete();
    \Flash::success('The article has been deleted.');

    // return redirect('articles');
    return redirect()->route('articles.index');
  }

}
