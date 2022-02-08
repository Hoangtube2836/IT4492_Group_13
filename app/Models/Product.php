<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    //

    public $table = "products";
    public $timestamps = false;

    public $fillable = [
        'product_id',
        'customer_id',
        'quantity',
        'price',
        'description',
        'form',
        'to',
        'state',
    ];
}
