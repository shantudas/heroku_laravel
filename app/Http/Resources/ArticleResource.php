<?php

namespace App\Http\Resources;

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
        dd($request);
//        return parent::toArray($request);
        /*return [
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body,
            'posted_at' => (string)$this->created_at,
            'posted_by' => $this->user->name,
            'comments' => CommentsResource::collection($this->whenLoaded('comments'))
        ];*/
    }
}
