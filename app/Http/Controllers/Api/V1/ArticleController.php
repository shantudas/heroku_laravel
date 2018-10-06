<?php

namespace App\Http\Controllers\Api\V1;

use App\Article;
use App\Http\Resources\ArticleResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function show ($id)
    {
        return new ArticleResource(Article::find($id));
    }
}
