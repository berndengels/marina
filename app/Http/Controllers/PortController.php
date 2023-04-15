<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePortRequest;
use App\Http\Requests\UpdatePortRequest;
use App\Http\Resources\PortGeojsonResource;
use App\Http\Resources\PortResource;
use App\Models\Port;
use Illuminate\Http\Response;

class PortController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = Port::paginate($this->paginationLimit);
        return view('public.ports.index', compact('data'));
    }

    /**
     * Display the specified resource.
     *
     * @param Port $port
     * @return Response
     */
    public function show(Port $port)
    {
        return view('public.ports.show', compact('port'));
    }

    /**
     * Display the specified resource.
     *
     * @param Port $port
     * @return Response
     */
    public function map()
    {
        $data = PortGeojsonResource::collection(Port::with('region')->get())->toJson();
        return view('public.ports.map', compact('data'));
    }
}
