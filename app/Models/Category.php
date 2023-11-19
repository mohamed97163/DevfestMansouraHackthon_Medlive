<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    use HasFactory;
    protected $fillable=[
        'name',
        'image',
    ];

    public function medicine(){
        return $this->hasMany(Medicine::class);
    }
}
