<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Articles\Requests\CreateArticleRequest;
use App\Articles\Repositories\Interfaces\ArticleRepositoryInterface;

use App\Articles\Article;

class ArticlesApiController extends Controller
{

    private $articleRepo;

    public function __construct(ArticleRepositoryInterface $articleRepository)
    {
        $this->articleRepo = $articleRepository;
    }

  /**
  * @param CreateArticleRequest $request
  */
    public function store(CreateArticleRequest $request) {

      $article = $this->articleRepo->create($request->all());

      return response()->json($article, 200);
    }
}
