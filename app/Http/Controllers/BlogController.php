<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('posts.blog.index', [
        //     "post_title" => "Posts",
        //     "posts" => Post::all()
        // ]);
        
        $posts=Post::all();
        return view('posts.blog.index',compact('posts'))->with([
        'category'=>Category::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
       $detail = Post::where('slug', $slug)->first();
       return view('posts.blog.show', [
        'detail' => $detail
       ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
