<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TokenResource extends JsonResource
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
            'id' => $this->id,
            'client' => $this->client->name,
            'address' => $this->client->address,
            'meter_number' => $this->client->meter_number,
            'token_number' => $this->token_number,
            'amount_paid' => $this->amount_paid,
            'power_bought' => $this->power_bought,
            'date' => $this->created_at,
            'status' => $this->status,
        ];
    }
}
