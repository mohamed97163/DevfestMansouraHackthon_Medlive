<?php

namespace App\Http\Controllers;

use App\Http\Resources\ActiveIngerdientResource;
use App\Models\ActiveIngerdient;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;


class ActiveIngerdientController extends Controller
{
    public function index(){
        $activeingredients=ActiveIngerdient::query()->get();
        return ActiveIngerdientResource::collection($activeingredients);
}


public function store(Request $request){
        // $created=ActiveIngerdient::create($request->only([
        //         'id' => $request->id,
        //         'name' => $request->name,
        // ]));

        // return new ActiveIngerdientResource($created);

        $activeingredients=ActiveIngerdient::query()->get();
        return ActiveIngerdientResource::collection($activeingredients);
}


public function show(ActiveIngerdient $activeingredient){
        return new ActiveIngerdientResource($activeingredient);
}


public function update(Request $request ,ActiveIngerdient $activeingredient){
        $updated=$activeingredient->update($request->only([
                'name' => $request->name,
        ]));
        if (!$updated){
                return new JsonResponse([
                        'errors' => 'failed to update the medicine'
                ]);
        }
        return new ActiveIngerdientResource($activeingredient);
}


public function destroy(ActiveIngerdient $activeingredient){
        
        $deleted = $activeingredient->forceDelete();
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
