<?php

namespace App\Http\Controllers\Api\V1;

use App\Article;
use App\Http\Resources\ArticleResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index(Article $article)
    {
        $articles = $article
            ->orderBy('id', 'Desc')
            ->with(['comments','ratings'])
            ->paginate(10);

        return ArticleResource::collection($articles);
//        return ArticleResource::collection($article->with('comments')->paginate(10));
    }


    public function show($id)
    {
        return new ArticleResource(Article::find($id));
    }
}
