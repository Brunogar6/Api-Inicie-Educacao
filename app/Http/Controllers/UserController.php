<?php

namespace App\Http\Controllers;

use App\Facades\ApiFacade;
use App\Http\Requests\UserPostRequest;

class UserController extends Controller
{
    public function index()
    {
       return ApiFacade::get('/users');
    }

    public function store(UserPostRequest $request)
    {

        ApiFacade::post('/users', [
            'email' => $request->email,
            'name' => $request->name,
            'gender' => $request->gender,
            'status' => $request->status,
        ]);

        return ApiFacade::get('/users');
    }
}
