<?php

namespace App\Http\Controllers;

use App\Facades\ApiFacade;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //List Users
    public function index()
    {
       return ApiFacade::get('/users')->json();
    }

    //Create a User
    public function store(Request $request)
    {

        $user = ApiFacade::post('/users', [
            'email' => $request->email,
            'name' => $request->name,
            'gender' => $request->gender,
            'status' => $request->status,
        ]);

        return $user->json();
    }

    //List a user
    public function show(int $user)
    {
        return ApiFacade::get('/users', [
            'id' => $user
        ])->json();
    }

    //Delete a User

    public function destroy(int $user)
    {
        $delete = ApiFacade::delete('/users/' . $user);

        return $delete->json();
    }
}
