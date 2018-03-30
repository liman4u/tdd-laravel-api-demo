<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Articles\Requests\CreateArticleRequest;

class ArticlesApiController extends Controller
{
    public function store(CreateArticleRequest $request) {
        dd('success!');
    }
}
