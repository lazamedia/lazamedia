<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Auth\Access\Response;
use Illuminate\Auth\Middleware\Authorize;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $this->authorize('admin');

        return view('dashboard.categories.index', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            
            'name' => 'required',
            'slug'  => 'required|unique:posts'            
        ]);

        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('category-images');
        }

        
        $validatedData ['category_id'] = auth()->user()->id;

        Category::create($validatedData);

        return redirect('/dashboard/categories')->with('success', 'Berhasil Menambahkan Postingan !');
    }

    /**
     * Display the specified resource.
     */
    public function show(category $category)
    {
        return view('dashboard.categories.show', [
            'categories' => $category
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(category $category)
    
        {
            return view('dashboard.categories.edit', [
                'category' => $category,
                
            ]);
        }
    
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, category $category)
    {
        $rules = ([
            
            'name' => 'required',
            'image' => 'image|file|max:4000'
            
        ]);
        

        if($request->slug != $category->slug) {
            $rules['slug'] = 'required|unique:posts';
        }

        $validatedData = $request->validate($rules);

        if($request->file('image')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData ['user_id'] = auth()->user()->id;
        

        

        return redirect('/dashboard/categories')->with('success', 'Berhasil Update Postingan !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        if($category->image) {
        Storage::delete($category->image);
        }
        Category::destroy($category->id);

        return redirect('/dashboard/categories')->with('success', 'Berhasil Menghapus Postingan !');
    }

    public function checkSlug(Request $request) {
        $slug = SlugService::createSlug(Category::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
