<?php

namespace App\Http\Controllers;

use App\Http\Resources\NotaficationConfirmBookResource;
use App\Models\NotaficationConfirmBook;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class NotaficationConfirmBookController extends Controller
{
    public function index(){
        $note=NotaficationConfirmBook::query()->get();
        return NotaficationConfirmBookResource::collection($note);
}


public function store(Request $request){
        // $created=ActiveIngerdient::create($request->only([
        //         'id' => $request->id,
        //         'name' => $request->name,
        // ]));

        // return new ActiveIngerdientResource($created);

        $note=NotaficationConfirmBook::query()->get();
        return NotaficationConfirmBookResource::collection($note);
}


public function show(NotaficationConfirmBook $note){
        return new NotaficationConfirmBookResource($note);
}


public function update(Request $request ,NotaficationConfirmBook $note){
        $updated=$note->update($request->only([
                'name' => $request->name,
        ]));
        if (!$updated){
                return new JsonResponse([
                        'errors' => 'failed to update the medicine'
                ]);
        }
        return new NotaficationConfirmBookResource($note);
}


public function destroy(NotaficationConfirmBook $note){
        
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
