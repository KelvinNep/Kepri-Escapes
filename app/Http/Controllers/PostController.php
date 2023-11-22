<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response\json;
use Cviebrock\EloquentSluggable\Services\SlugService;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        
        $post = Post::all();
        $category = Category::all();
        return view("posts.index", compact("post","category")); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {    $post = Post::all();
        $category = Category::all();
        return view("post.create", compact('category','post')); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { try{
            // dd($request->all());
                // Validasi data
                $validatedData = $request->validate([
                    "creator" => 'required',
                    "id_category" => 'required',
                    "post_title" => 'required|unique:tb_post',
                    "post_content" => 'required',
                    "post_picture" => 'image',
                ], [
                    'required' => 'Column :attribute must filled.',
                    'unique' => 'Post is alreaady exist, choose another post title.',
                    'image' => 'File must be picture.',
                ]);
            
                // Simpan gambar baru dan dapatkan path-nya
                $validatedData['post_picture'] = $request->file('post_picture')->store('public/post-images');
            
                // Buat post baru
                Post::create($validatedData);
            
                // Redirect ke halaman index dengan membawa data post yang baru dibuat
                return redirect('/dashboard/post')->with('success', 'Post saved successfully!');

            } catch (\Illuminate\Validation\ValidationException $e) {
                // Tangkap exception dan tampilkan notifikasi error
                return redirect()->back()
                    ->withInput()
                    ->withErrors($e->errors());
            } catch (\Exception $e) {
                // Tangkap exception dan tampilkan notifikasi error
                return redirect()->back()
                    ->withInput()
                    ->withErrors(['error', 'Error. ' . $e->getMessage()]);
                   
            }
           
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
    public function edit(Post $post)
    {   
        $categories = Category::all();
        return view("posts.edit", compact('category','post')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        // $rules = [
        //     "creator" => 'required',
        //     "id_category" => 'required',
        //     "post_title" => 'required|unique:tb_post',
        //     "post_content" => 'required',
        //     "post_picture" => 'image',
        
        // ];

        // if($request->slug != $post->slug) {
        //     $rules['slug'] = 'required|unique:post';
        // }

        // $validatedData = $request->validate($rules);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {   
        $post::destroy($post->id);
        return redirect('/dashboard/post')->with('success', 'Post has been deleted!'); 
        
    }

    public function autoSlug (Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->post_title);
        return response()->json(['slug' => $slug]);
    }
}
