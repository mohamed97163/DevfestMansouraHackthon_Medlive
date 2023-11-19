<?php

namespace App\Http\Controllers;

use App\Http\Resources\CityResource;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;


class CityController extends Controller
{
    public function index(){
        $activeingredients=City::query()->get();
        return CityResource::collection($activeingredients);
}


public function store(Request $request){
        // $created=ActiveIngerdient::create($request->only([
        //         'id' => $request->id,
        //         'name' => $request->name,
        // ]));

        // return new ActiveIngerdientResource($created);

        $cities=City::query()->get();
        return CityResource::collection($cities);
}


public function show(City $cities){
        return new CityResource($cities);
}


public function update(Request $request ,City $cities){
        $updated=$cities->update($request->only([
                'name' => $request->name,
        ]));
        if (!$updated){
                return new JsonResponse([
                        'errors' => 'failed to update the medicine'
                ]);
        }
        return new CityResource($cities);
}


public function destroy(City $cities){
        
        $deleted = $cities->forceDelete();
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
