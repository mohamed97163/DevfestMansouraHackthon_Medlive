<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pharmacy extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'address',
        'image',
        'available_time_start',
        'available_time_end'
    ];

    public function city()
    {
        return $this->belongsToMany(City::class,'pharmacy_city');
    }

    public function medicines()
    {
        return $this->belongsToMany(Medicine::class,'pharmacy_medicines');
    }

    public function pharmacist(){
        return $this->hasMany(pharmacist::class);
    }
}
