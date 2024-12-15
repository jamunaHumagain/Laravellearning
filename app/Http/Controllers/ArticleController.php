<?php

namespace App\Http\Controllers;


use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::orderby('id', 'desc')->get();
        // $articles = Article::find(2);


        // return view('admin.article.index',compact("articles"));
        return view('admin.article.index')->with('articles', $articles);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        $validatedData = $request->validate([
            'title' => 'required|string|min:2|max:100',
            'description' => 'required|string|min:2|max:100',
            'tags' => 'required|alpha_dash|min:2|max:50'
        ]);
        // Article::create($validatedData);

        $article = new Article();
        $article->title = $request->title;
        $article->description = $request->description;
        $article->tags = $request->tags;
        $article->user_id = auth()->user()->id; //Auth::user()->id, $request->user()->id
        $article->save();

        return redirect()->route('article.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "i am in show page";
    }



    public function edit(string $id)
    {
        $article = Article::find($id);

        if (!$article) {
            return redirect()->route('admin.article.index')->with('error', 'Article not found!');
        }


        return view('admin.article.edit', compact('article'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $validated = $request->validate([
            'title' => 'required|string|min:2|max:100',
            'description' => 'required|string|min:2|max:100',
            'tags' => 'required|alpha_dash|min:2|max:50'
        ]);
        // return $validated;
        $article = Article::find($id);
        $article->update($validated);

        return redirect()->route('article.index')->with('success', 'Article updated successfully!');
    }


    /**
     * Remove the specified resource from storage.
     */
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $article = Article::find($id);

        if (!$article) {
            return redirect()->route('article.index')->with('error', 'Article not found!');
        }

        $article->delete();

        return redirect()->route('article.index')->with('success', 'Article deleted successfully!');
    }

}
