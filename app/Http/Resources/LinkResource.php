<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LinkResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'title' => $this->title,
            'content' => $this->content,
            'url' => $this->url,
            'permalink' => $this->permalink,
            'is_private' => $this->post->is_private,
            'tags' => $this->post->tags->pluck('name')->toArray()
        ];
    }
}