<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'age'=> $this->age,
            'chats'=> $this->chats,
            'interests'=> $this->interests,
            'sex' => $this-> sex,
            'likes_recived' => $this-> likes_recived,
            'photo' => $this -> photo,
            
            
        ];
    }
}
