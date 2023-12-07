<?php
namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ConferenceResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            "date" => $this->date,
	        "time" => $this->time,
            'delete_url' => route('conferences.delete', $this->id)
        ];
    }
}