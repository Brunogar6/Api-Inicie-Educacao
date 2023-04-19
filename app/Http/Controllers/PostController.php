<?php

namespace App\Http\Controllers;

use App\Facades\ApiFacade;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //List Posts
    public function index()
    {
        return ApiFacade::get('/posts')->json();
    }
    //Create a Post
    public function store(Request $request)
    {
        $post = ApiFacade::post('/posts', [
            'user_id' => $request->user_id,
            'title' => $request->title,
            'body' => $request->body,
        ]);

        return $post->json();
    }

    //Show a Post

    public function show(int $post)
    {
        return ApiFacade::get('/posts', [
            'id' => $post
        ])->json();
    }

    //Delete a Post

    public function destroy(int $post)
    {
        $delete = ApiFacade::delete('/posts/' . $post);

        return $delete->json();
    }
}
