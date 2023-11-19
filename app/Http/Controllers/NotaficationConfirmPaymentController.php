<?php

namespace App\Http\Controllers;

use App\Http\Resources\NotaficationConfirmPaymentResource;
use App\Models\NotaficationConfirmPayment;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;


class NotaficationConfirmPaymentController extends Controller
{
    public function index(){
        $note=NotaficationConfirmPayment::query()->get();
        return NotaficationConfirmPaymentResource::collection($note);
}


public function store(Request $request){
        // $created=ActiveIngerdient::create($request->only([
        //         'id' => $request->id,
        //         'name' => $request->name,
        // ]));

        // return new ActiveIngerdientResource($created);

        $note=NotaficationConfirmPayment::query()->get();
        return NotaficationConfirmPaymentResource::collection($note);
}


public function show(NotaficationConfirmPayment $note){
        return new NotaficationConfirmPaymentResource($note);
}


public function update(Request $request ,NotaficationConfirmPayment $note){
        $updated=$note->update($request->only([
                'name' => $request->name,
        ]));
        if (!$updated){
                return new JsonResponse([
                        'errors' => 'failed to update the medicine'
                ]);
        }
        return new NotaficationConfirmPaymentResource($note);
}


public function destroy(NotaficationConfirmPayment $note){
        
        $deleted = $note->forceDelete();
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
