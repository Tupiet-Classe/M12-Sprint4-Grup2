<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMagradaRequest;
use App\Http\Requests\UpdateMagradaRequest;
use App\Models\Magrada;

class MagradaController extends Controller
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
     * @param  \App\Http\Requests\StoreMagradaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMagradaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Magrada  $magrada
     * @return \Illuminate\Http\Response
     */
    public function show(Magrada $magrada)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Magrada  $magrada
     * @return \Illuminate\Http\Response
     */
    public function edit(Magrada $magrada)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMagradaRequest  $request
     * @param  \App\Models\Magrada  $magrada
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMagradaRequest $request, Magrada $magrada)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Magrada  $magrada
     * @return \Illuminate\Http\Response
     */
    public function destroy(Magrada $magrada)
    {
        //
    }
}
