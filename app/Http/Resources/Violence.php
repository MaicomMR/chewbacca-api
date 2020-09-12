<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Violence extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'slug' => $this->slug,
            'description' => $this->description,
            'media_link' => $this->media_link,
        ];
    }
}
