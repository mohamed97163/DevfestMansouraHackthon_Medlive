<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActiveIngerdient extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'description'
    ];
    
    public function medicine(){
        return $this->belongsToMany(Medicine::class,'medicine__active_ingredients');
    }
}
