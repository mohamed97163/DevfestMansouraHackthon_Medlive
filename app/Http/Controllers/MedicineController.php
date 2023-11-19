<?php

namespace App\Http\Controllers;

use App\Http\Resources\MedicineResource;
use App\Models\Medicine;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;


class MedicineController extends Controller
{
    public function index(){
        $medicines=Medicine::query()->get();
        return MedicineResource::collection($medicines);
        }
        public function store(Request $request){
                        // $created=Medicine::create($request->only([
                        //         'id' => $request->id,
                        //         'name' => $request->name,
                        //         'price' => $request->price,
                        //         'exp' => $request->exp,
                        //         'usage' => $request->usage,
                        //         'image'=>$request->image,
                        //         'category_id'=>$request->category_id,
                        // ]));

                        // return new MedicineResource($created);

                        $medicines=Medicine::query()->get();
                        return MedicineResource::collection($medicines);
        }
                public function show(Medicine $medicine){
                                return new MedicineResource($medicine);
                }
        public function update(Request $request ,Medicine $medicine){
                        $updated=$medicine->update($request->only([
                            'name' => $request->name,
                            'price' => $request->price,
                            'exp' => $request->exp,
                            'usage' => $request->usage,
                            'image'=>$request->image,
                            'category_id'=>$request->category_id,
                        ]));
                        if (!$updated){
                                return new JsonResponse([
                                        'errors' => 'failed to update the medicine'
                                ]);
                        }
                        return new MedicineResource($medicine);
        }
        public function destroy(Medicine $medicine){
                
                        $deleted = $medicine->forceDelete();
                        if (!$deleted){ 
                                return new JsonResponse([
                                'errors' => 'failed to delete the creditcard'
                                ]);
                        }
                        return new JsonResponse([
                                'errors' => 'the creditcard is deleted successfully'
                        ]);
                        
        }

        public function search($name){
                return Medicine::where("name",$name)->get();
        }
}
