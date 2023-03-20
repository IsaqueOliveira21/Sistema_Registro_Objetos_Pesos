<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PesoResource extends JsonResource
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
            'id' => (integer) $this->id,
            'item' => (string) $this->item,
            'peso' => (integer) $this->peso,
            'tipo_peso' => (string) $this->tipo_peso,
        ];
    }
}
