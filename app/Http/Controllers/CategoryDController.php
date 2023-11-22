<?php

namespace App\Http\Controllers;

use App\Models\CategoryD;
use Illuminate\Http\Request;

class CategoryDController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categoryd = CategoryD::all();
        return view("destination.categoryd.index", compact("categoryd")); 
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
        try{
            $validatedData = $request->validate([
                "category_name" => 'required|unique:tb_categoryd',
            ], [
                'required' => 'Column :attribute must filled.',
                'unique' => 'Category is already exist, choose another category.',
            ]);
        
        
            
            CategoryD::create($validatedData);
        
            
            return redirect('/dashboard/destcategory')->with('success', 'Category saved successfully!');

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
    public function show(CategoryD $categoryD)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CategoryD $categoryD)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CategoryD $categoryD)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CategoryD $destcategory)
    {
        $destcategory::destroy($destcategory->id);
        return redirect('/dashboard/destcategory')->with('success', 'Category has been deleted!'); 
    }
}
