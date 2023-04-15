<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSeaRequest;
use App\Http\Requests\UpdateSeaRequest;
use App\Models\Sea;
use Illuminate\Http\Response;

class AdminSeaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Sea $sea
     * @return Response
     */
    public function show(Sea $sea)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreSeaRequest $request
     * @return Response
     */
    public function store(StoreSeaRequest $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Sea $sea
     * @return Response
     */
    public function edit(Sea $sea)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateSeaRequest $request
     * @param Sea $sea
     * @return Response
     */
    public function update(UpdateSeaRequest $request, Sea $sea)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Sea $sea
     * @return Response
     */
    public function destroy(Sea $sea)
    {
        //
    }
}
