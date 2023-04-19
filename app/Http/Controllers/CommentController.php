<?php

namespace App\Http\Controllers;

use App\Facades\ApiFacade;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    // List Comments
    public function index()
    {
        return ApiFacade::get('/comments')->json();
    }

    // Create a Comment
    public function store(Request $request){

        $comment = ApiFacade::post('/comments', [
            'post_id' => $request->post_id,
            'name' => $request->name,
            'email' => $request->email,
            'body' => $request->body,
        ]);

        return $comment->json();
    }

    //Show a Comment
    public function show(int $comment)
    {
        return ApiFacade::get('/comments', [
            'id' => $comment
        ])->json();

    }

    // Delete a Comment
    public function destroy(int $comment)
    {
        $delete = ApiFacade::delete('/comments/' . $comment);

        return $delete->json();
    }
}
