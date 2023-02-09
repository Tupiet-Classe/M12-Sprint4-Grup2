<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePublicacioRequest;
use App\Http\Requests\UpdatePublicacioRequest;
use App\Models\Publicacio;

class PublicacioController extends Controller
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
     * @param  \App\Http\Requests\StorePublicacioRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePublicacioRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Publicacio  $publicacio
     * @return \Illuminate\Http\Response
     */
    public function show(Publicacio $publicacio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Publicacio  $publicacio
     * @return \Illuminate\Http\Response
     */
    public function edit(Publicacio $publicacio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePublicacioRequest  $request
     * @param  \App\Models\Publicacio  $publicacio
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePublicacioRequest $request, Publicacio $publicacio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Publicacio  $publicacio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publicacio $publicacio)
    {
        //
    }
}
