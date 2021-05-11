<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Agency extends JsonResource
{
    /**
     * The "data" wrapper that should be applied.
     *
     * @var string
     */
    public static $wrap = 'agency';

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'code' => $this->code,
            'address' => $this->address,
            'postalCode' => $this->postal_code,
            'city' => $this->city,
            'fax' => $this->fax,
            'phone' => $this->phone,
            'actionZone' => $this->action_zone,
        ];
    }
}
