<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;
use Auth;

class PostController extends Controller
{

    //Only Authenticate User Have The Entry to PostController
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);


        $post = new Post();

        $post->title = $request->title;
        $post->description = $request->description;
        $post->category_id = $request->category_id;
        $post->user_id = Auth::id();    // Authenticate user id

        $post->save();

        return redirect('/home');
    }

    public function category($id)
    {
        $category = Category::find($id);
        return view('category', compact('category'));
    }
}
