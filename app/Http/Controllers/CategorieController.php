<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('categorie.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
            return view('categorie.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valcategories = $request->validate([
            'name' => 'required|max:25',
            'slug' => 'required|max:30',
            'description' => 'nullable',
        ]);

        Category::create($valcategories);
        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
     
    return view('categorie.edit', compact('category'));
            
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
            $valcategories = $request->validate([
            'name' => 'required|max:50',
            'slug' => 'required|max:50|unique:categories,slug,' . $category->id ,
            'description' => 'nullable',
        ]);

        $category->update($valcategories);

            return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('category.index');
    }
}
