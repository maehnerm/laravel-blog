<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    public function index()
		{
				$comments = Comment::latest()->get();
				return view('admin.comments.index', compact('comments'));
		}

		/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate the form
				$this->validate(request(),[
					'author' => 'required',
					'body' => 'required'
				]);

				//create and save it to the database
				Comment::create([
						'post_id' => request('post_id'),
						'author' => request('author'),
						'body' => request('body')
				]);
				//show flash-message
				return back();
    }
}
