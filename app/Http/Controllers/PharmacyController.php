<?php

namespace App\Http\Controllers;

use App\Http\Resources\PharmacyResource;
use App\Models\Medicine;
use App\Models\Pharmacy;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;


class PharmacyController extends Controller
{
        public function index(){
                $pharmacies=Pharmacy::query()->get();
                return PharmacyResource::collection($pharmacies);
        }
        public function store(Request $request){
                
                // $created=Pharmacy::create([
                //         'name'=>$request->name,
                //         'address'=>$request->address,
                //         'image'=>$request->image,
                //         'available_time_start'=>$request->available_time_start,
                //         'available_time_end'=>$request->available_time_end,

                // ]);
                // return new PharmacyResource($created);
                $pharmacies=Pharmacy::query()->get();
                return PharmacyResource::collection($pharmacies);
        }
        public function show(Pharmacy $pharmacy){
                return new PharmacyResource($pharmacy);
        }
        public function destroy(Pharmacy $pharmacy){
                if($pharmacy->image != null){
                        Storage::delete($pharmacy->image);
                }
                $deleted = $pharmacy->forceDelete();
                if (!$deleted){
                        return new JsonResponse([
                        'errors' => 'failed to delete the user'
                        ]);
                }
                return new JsonResponse([
                        'errors' => 'the user is deleted successfully'
                ]);
                
        }

        

}
