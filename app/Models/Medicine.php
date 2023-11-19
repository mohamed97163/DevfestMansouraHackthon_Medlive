<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'usage',
        'image',
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    public function active_ingredient()
    {
        return $this->belongsToMany(ActiveIngerdient::class);
    }
    
    public function Pharmacies()
    {
        return  $this->belongsToMany(Pharmacy::class,'pharmacy_medicines');
    }
}
