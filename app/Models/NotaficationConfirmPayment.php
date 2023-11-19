<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotaficationConfirmPayment extends Model
{
    use HasFactory;
    protected $fillable=[
        'tilte',
        'content'
    ];
}
