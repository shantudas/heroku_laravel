<?php

namespace App\Http\Resources\user;

use App\Http\Resources\ArticleResource;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
//        return parent::toArray($request);
        return [
            'id'=> $this->id,
            'name'=> $this->name,
            'articles'=> UserWithArticles::collection($this->articles),
        ];
    }
}
