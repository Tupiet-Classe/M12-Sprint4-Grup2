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
        $user = User::find(1);
        $user->avatar = $this->get_from_reference($user->avatar);
        return $user;
    }

    private function get_from_reference($reference) {
        $data = json_decode(file_get_contents(storage_path('app/references.json')), true);
        return $data[$reference];
    }

}
