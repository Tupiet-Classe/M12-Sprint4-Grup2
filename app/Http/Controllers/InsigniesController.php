<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInsigniesRequest;
use App\Http\Requests\UpdateInsigniesRequest;
use App\Models\Insignies;

class InsigniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInsigniesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInsigniesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Insignies  $insignies
     * @return \Illuminate\Http\Response
     */
    public function show(Insignies $insignies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Insignies  $insignies
     * @return \Illuminate\Http\Response
     */
    public function edit(Insignies $insignies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInsigniesRequest  $request
     * @param  \App\Models\Insignies  $insignies
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInsigniesRequest $request, Insignies $insignies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Insignies  $insignies
     * @return \Illuminate\Http\Response
     */
    public function destroy(Insignies $insignies)
    {
        //
    }
}
