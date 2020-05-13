<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductTagModel extends Model
{
    protected $table = 'product_tag';

    protected $fillable = [
        'name', 'product_id'
    ];
}
