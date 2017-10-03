<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
use Carbon\Carbon;
use App\Post;

class PostController extends Controller
{

		public function __construct()
		{
				$this->middleware('auth')->except(['frontpage','show_front']);
		}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
		 public function index()
 		{

 			$posts = Post::latest()->get();

 			return view('admin.posts.index', compact('posts'));
 		}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
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
					'title' => 'required',
					'slug' => 'required|regex:/^[a-z0-9-_]+$/|unique:posts'
				]);
				//create and save it to the database
				Post::create([
						'user_id' => auth()->id(),
						'title' => request('title'),
						'slug' => request('slug'),
						'body' => request('body')
				]);

				return redirect()->route('posts-index');
    }

		/**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
				$post = Post::find($id);
        return view('posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
				$post = Post::find($id);
        return view('admin.posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
				//Validate the form
				$this->validate(request(),[
					'title' => 'required',
					'slug' => 'required|regex:/^[a-z0-9-_]+$/|unique:posts,slug,'.$id
				]);

				//update post
				$post = Post::find($id);

				$post->update([
						'user_id' => 1,
						'title' => request('title'),
						'slug' => request('slug'),
						'body' => request('body')
				]);

				//redirect
				return redirect()->route('posts-index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
				//get the post
				$post =  Post::find($id);

				//delete it
				$post->delete();

				//show flash message

				//redirect
				return redirect()->route('posts-index');
    }

		/**
		* FRONTEND
		*/

		/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
		public function frontpage()
    {
				$posts = Post::latest()->get();

        return view('posts.index', compact('posts'));
    }

		/**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_front(Post $post)
    {
        return view('posts.show',compact('post'));
    }


}
