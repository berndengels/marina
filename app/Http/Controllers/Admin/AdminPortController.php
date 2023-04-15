<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePortRequest;
use App\Http\Requests\UpdatePortRequest;
use App\Models\Port;
use Illuminate\Http\Response;

class AdminPortController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = Port::paginate($this->paginationLimit);
        return view('admin.ports.index', compact('data'));
    }

    /**
     * Display the specified resource.
     *
     * @param Port $port
     * @return Response
     */
    public function show(Port $port)
    {
        return view('admin.ports.show', compact('port'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.ports.create', [
            'regionOptions' => $this->regionOptions,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StorePortRequest $request
     * @return Response
     */
    public function store(StorePortRequest $request)
    {
        Port::create($request->validated());
        return redirect()->route('admin.ports.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Port $port
     * @return Response
     */
    public function edit(Port $port)
    {
        return view('admin.ports.edit', [
            'port'    => $port,
            'regionOptions' => $this->regionOptions,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdatePortRequest $request
     * @param Port $port
     * @return Response
     */
    public function update(UpdatePortRequest $request, Port $port)
    {
        $port->update($request->validated());
        return redirect()->route('admin.ports.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Port $port
     * @return Response
     */
    public function destroy(Port $port)
    {
        $port->delete();
        return redirect()->route('admin.ports.index');
    }
}
