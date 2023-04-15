<?php

namespace App\Http\Controllers\Admin;

use App\Models\Region;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRegionRequest;
use App\Http\Requests\UpdateRegionRequest;
use Illuminate\Http\Response;

class AdminRegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = Region::paginate($this->paginationLimit);
        return view('admin.regions.index', compact('data'));
    }

    /**
     * Display the specified resource.
     *
     * @param Region $region
     * @return Response
     */
    public function show(Region $region)
    {
        return view('admin.regions.show', compact('region'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.regions.create', [
            'countryOptions' => $this->countryOptions,
            'seaOptions' => $this->seaOptions,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreRegionRequest $request
     * @return Response
     */
    public function store(StoreRegionRequest $request)
    {
        Region::create($request->validated());
        return redirect()->route('admin.regions.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Region $region
     * @return Response
     */
    public function edit(Region $region)
    {
        return view('admin.regions.edit', [
            'region'    => $region,
            'countryOptions' => $this->countryOptions,
            'seaOptions' => $this->seaOptions,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateRegionRequest $request
     * @param Region $region
     * @return Response
     */
    public function update(UpdateRegionRequest $request, Region $region)
    {
        $region->update($request->validated());
        return redirect()->route('admin.regions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Region $region
     * @return Response
     */
    public function destroy(Region $region)
    {
        $region->delete();
        return redirect()->route('admin.regions.index');
    }
}
