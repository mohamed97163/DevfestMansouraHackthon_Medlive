<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;


class CategoryController extends Controller
{
    
    public function index()
    {
        $categories=Category::query()->get();
        return CategoryResource::collection($categories);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    //     $created=Category::create($request->only([
    //         'id' => $request->id,
    //         'name' => $request->name,
    // ]));
    
    $categories=Category::query()->get();

    return CategoryResource::collection($categories);
}

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return new CategoryResource($category);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $updated=$category->update($request->only([
            'name' => $request->name,
    ]));
    if (!$updated){
            return new JsonResponse([
                    'errors' => 'failed to update the medicine'
            ]);
    }
    return new CategoryResource($category);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $deleted = $category->forceDelete();
                if (!$deleted){ 
                        return new JsonResponse([
                        'errors' => 'failed to delete the creditcard'
                        ]);
                }
                return new JsonResponse([
                        'errors' => 'the creditcard is deleted successfully'
                ]);
                        
    }
}
