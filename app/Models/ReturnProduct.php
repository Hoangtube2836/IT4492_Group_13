<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReturnProduct extends Model
{
    //

    public $table = "returnproducts";
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
