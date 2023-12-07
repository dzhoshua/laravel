<?php
namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'lastname' => $this->lastname,
            'city' => $this->city,
            'email' => $this->email,
            "conference_id" => $this->conference,
            'delete_url' => route('users.delete', $this->id)
        ];
    }
}