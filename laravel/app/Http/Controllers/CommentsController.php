<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests\StoreComment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function index()
    {
        $comments = Comment::all();

        return view('comments.index', compact('comments'));
    }

    public function store(StoreComment $request) //// используется Form Request
    {
        Comment::create([
            'body' => $request->body
        ]);

        return back();
    }
}
