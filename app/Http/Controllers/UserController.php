<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUsuariRequest;
use App\Http\Requests\UpdateUsuariRequest;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::find(1);
    }

}
