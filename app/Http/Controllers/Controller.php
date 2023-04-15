<?php

namespace App\Http\Controllers;

use App\Models\Region;
use App\Models\Sea;
use App\Models\Country;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $seaOptions;
    protected $countryOptions;
    protected $regionOptions;
    protected $paginationLimit = 50;

    public function __construct()
    {
        $this->seaOptions = collect(Sea::orderBy('name')->get()->keyBy('id')->map->name)
            ->prepend('Bitte wählen', null);
        $this->countryOptions = collect(Country::orderBy('de')->get()->keyBy('id')->map->de)
            ->prepend('Bitte wählen', null);
        $this->regionOptions = collect(Region::orderBy('name')->get()->keyBy('id')->map->name)
            ->prepend('Bitte wählen', null);
    }
}
