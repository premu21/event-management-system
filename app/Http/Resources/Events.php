<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Events extends JsonResource
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
            'id'            =>  $this->id,
            'title'         =>  $this->title,
            'description'   =>  $this->description,
            'venue'         =>  $this->venue,
            'times'          =>  $this->times,
            'fee'           =>  $this->fee,
            'photo'         =>  $this->photo,
            'video'         =>  $this->video,
            'created_at'    =>  $this->created_at,
            'updated_at'    =>  $this->updated_at,
            'user_id'       =>  $this->user_id
        ];
    }
}
