<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use PhpParser\Node\Scalar\String_;

class CommentsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'commented_by' => $this->user->name,
            'commented_at' => (String)$this->created_at,
            'comments' => $this->body,
        ];
    }
}
