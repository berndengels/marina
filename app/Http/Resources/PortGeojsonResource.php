<?php

namespace App\Http\Resources;

use App\Models\Port;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use JsonSerializable;

class PortGeojsonResource extends JsonResource
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
            "type" => "Feature",
            "properties" => [
                "url" => route('public.ports.show', $this),
                "name" => $this->name,
                "region" => $this->region ? $this->region->name : null,
            ],
            "geometry" => [
                "type" => "Point",
                "coordinates" => [$this->lng, $this->lat]
            ],
        ];
    }
}
