<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    protected $table = 'product';

    protected $fillable = [
        'image_thumbnail', 'view_count', 'time'
    ];

    protected $cats = [
        'time' => 'd-m-Y'
    ];
}
