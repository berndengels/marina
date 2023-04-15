<?php

namespace App\Http\Resources;

use App\Models\Port;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use JsonSerializable;

class PortResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array|Arrayable|JsonSerializable
     */
    public function toArray($request)
    {
        /**
         * @var $this Port
         */
        return [
            'name'  => $this->name,
            'lat'   => $this->lat,
            'lng'   => $this->lng,
            'region' => $this->region ? $this->region->name : null,
        ];
    }
}
