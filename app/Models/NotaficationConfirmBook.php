<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotaficationConfirmBook extends Model
{
    use HasFactory;

    protected $fillable=[
        'tilte',
        'content'
    ];
}
