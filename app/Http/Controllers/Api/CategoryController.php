<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        // return Category::all(); this will return everything 

        // return Category::select('id', 'name')->get;  this will only display the json with the id and name only-------this specifies which columns will be displayed  
        $categories = Category::select('id', 'name')->paginate(9);
        
        return CategoryResource::collection($categories );
    }

    public function show(Category  $category) //this method use route model binding to display all the categories
    {
        return new CategoryResource($category);
    }

    public function store(StoreCategoryRequest $request) //this stores the category 
    {
        $category= Category::create($request->all());

        return new CategoryResource($category);

    }

    public function update(Category $category, StoreCategoryRequest $request) //this method updates the category 
    {
        $category->update($request->all());

        return new CategoryResource($category);
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return response(null, 404); //this is what is returned if method destroy is called but no category is found 
    }
}
