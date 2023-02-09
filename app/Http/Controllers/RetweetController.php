<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRetweetRequest;
use App\Http\Requests\UpdateRetweetRequest;
use App\Models\Retweet;

class RetweetController extends Controller
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
     * @param  \App\Http\Requests\StoreRetweetRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRetweetRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Retweet  $retweet
     * @return \Illuminate\Http\Response
     */
    public function show(Retweet $retweet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Retweet  $retweet
     * @return \Illuminate\Http\Response
     */
    public function edit(Retweet $retweet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRetweetRequest  $request
     * @param  \App\Models\Retweet  $retweet
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRetweetRequest $request, Retweet $retweet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Retweet  $retweet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Retweet $retweet)
    {
        //
    }
}
