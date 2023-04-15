<?php

namespace App\Http\Requests;

class StoreRegionRequest extends AdminRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'country_id'    => '',
            'sea_id'        => '',
            'name'          => 'required|unique:regions,name',
        ];
    }
}
