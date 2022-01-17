<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MedicineResource extends JsonResource
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
            'type' => "medicines",
            'id' => $this->id,
            'attributes' => [
                'name' => $this->name,
                'price' => $this->price,
            ],
            'relationships' => [
                'active_substance' => [
                    'id' => $this->activeSubstance->id,
                    'name' => $this->manufacturer->name,
                ],
                'manufacturer' => [
                    'id' => $this->manufacturer->id,
                    'name' => $this->manufacturer->name,
                    'url' => $this->manufacturer->url,
                ],
            ],
        ];
    }
}
