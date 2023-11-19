<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'country_id'
    ];
    
    public function pharmacy()
    {
        return $this->belongsToMany(Pharmacy::class,'pharmacy_city');
    }

    
    public function coutries(){
        return $this->hasMany(Country::class);
    }
}
