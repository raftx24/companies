<?php

namespace LaravelEnso\Companies\app\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Contact extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'position' => $this->position,
            'name' => $this->whenLoaded('person', $this->person->name),
            'phone' => $this->whenLoaded('person', $this->person->phone),
            'email' => $this->whenLoaded('person', $this->person->email),
            'createdAt' => $this->created_at->toDatetimeString(),
        ];
    }
}
