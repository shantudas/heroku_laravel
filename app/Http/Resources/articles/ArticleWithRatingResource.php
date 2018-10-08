<?php

namespace App\Http\Resources\articles;

use Illuminate\Http\Resources\Json\JsonResource;

class ArticleWithRatingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
            'rating'=> $this->rating,
            'rated_by'=> $this->user->name,
        ];
    }
}
