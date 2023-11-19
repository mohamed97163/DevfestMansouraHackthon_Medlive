<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine_ActiveIngredient extends Model
{
    use HasFactory;
    protected $fillable=[
        'medicine_id',
        'activeingredient_id'
    ];
}
