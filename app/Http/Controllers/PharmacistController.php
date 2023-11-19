<?php

namespace App\Http\Controllers;

use App\Http\Resources\PharmacistResource;
use App\Models\pharmacist;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;

class PharmacistController extends Controller
{
    public function index(){
        $pharmacists=pharmacist::query()->get();
        return PharmacistResource::collection($pharmacists);
        
    }
    public function store(Request $request){
            
        //     $created=Pharmacist::create([
        //             'name'=>$request->name,
        //             'about'=>$request->about,
        //             'image'=>$request->image,
        //             'experience'=>$request->experience,
        //             'job'=>$request->job

        //     ]);
        //     return new PharmacistResource($created);

        $pharmacists=pharmacist::query()->get();
        return PharmacistResource::collection($pharmacists);
    }
    public function show(Pharmacist $pharmacist){
            return new PharmacistResource($pharmacist);
    }
    public function update(Request $request ,Pharmacist $user){
            //         $image = $user->image;
            //         if ($request->hasFile('image'))
            //         {
            //                 Storage::delete($user->image);
            //                 $image = $request->file('image')->store('users','public');
            //         }
            // $updated=$user->update($request->only([
            //         'name'=>$request->name ?? $user->name,
            //         'email'=>$request->email,
            //         'image'=>$request->$image ,
            //         'phone'=>$request->phone,
            //         'address'=>$request->address,
            //         'password'=>bcrypt($request->password)??$user->password
            // ]));
            // if (!$updated){
            //         return new JsonResponse([
            //                 'errors' => 'failed to update the user'
            //         ]);
            // }
            // return new UserResource($user);
    }
    public function destroy(Pharmacist $pharmacist){
            if($pharmacist->image != null){
                    Storage::delete($pharmacist->image);
            }
            $deleted = $pharmacist->forceDelete();
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
