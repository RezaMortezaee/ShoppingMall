<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'description',
        'phone_number',
        'city',
        'policies',
        'shipping',
        'payment_options',
        'cancellation',
        'returns'
    ];

    protected $cast = [
        'payment_options'=> 'array',
    ];
}
