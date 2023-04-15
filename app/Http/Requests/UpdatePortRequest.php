<?php

namespace App\Http\Requests;

class UpdatePortRequest extends AdminRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'region_id'         => '',
            'lat'               => '',
            'lng'               => '',
            'acquired'          => '',
            'name'              => 'required',
            'contact'           => 'required',
            'web'               => 'nullable|url',
            'street'            => 'required',
            'postcode'          => 'required',
            'location'          => 'required',
            'has_caravans'      => '',
            'has_houseboats'    => '',
            'number_of_berths'  => '',
            'fon'               => '',
            'email'             => 'nullable|email',
        ];
    }
}
