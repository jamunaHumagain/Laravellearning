<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "i am in index page";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|min:2|max:100',
            'url' => 'required|alpha_dash|min:2|max:100'
        ]);

        $post = new Post; //post vanni class ko object banako so $post vanni aauta object ho
//here the post simply represtnt the table of database
        $post->title = $request->title;
        $post->url = $request->url;
        $post->save();

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "i am in show page";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "i am in update page";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "i am in destroy page";
    }
}
