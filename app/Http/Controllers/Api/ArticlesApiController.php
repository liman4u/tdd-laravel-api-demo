<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Articles\Requests\CreateArticleRequest;

use App\Articles\Article;

class ArticlesApiController extends Controller
{
  /**
  * @param CreateArticleRequest $request
  */
    public function store(CreateArticleRequest $request) {
        return Article::create($request->all());
    }
}
