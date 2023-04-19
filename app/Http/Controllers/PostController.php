<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request)
    {
        ApiFacade::post('/posts', [
            'user_id' => $request->user_id,
            'title' => $request->title,
            'body' => $request->body,
        ]);
    }
}
