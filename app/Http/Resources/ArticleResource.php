<?php

namespace App\Http\Resources;

use App\Http\Resources\articles\ArticleWithRatingResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
//        return parent::toArray($request);
        return [
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body,
            'posted_at' => (string)$this->created_at,
            'posted_by' => $this->user->name,
            'comments' => CommentsResource::collection($this->comments),
            'avg_rating' => $this->ratings->avg('rating'),
            'rating_info' => ArticleWithRatingResource::collection($this->ratings),
        ];
    }
}
