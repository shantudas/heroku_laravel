<?php

namespace App\Http\Controllers\Api\V1;


use App\Blog;
use App\Http\Resources\BlogResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogsController extends Controller
{
    public function show ($id)
    {
        return new BlogResource(Blog::find($id));
    }
}
