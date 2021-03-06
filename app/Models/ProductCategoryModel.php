<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategoryModel extends Model
{
    protected $table = 'category_product';

    protected $fillable = [
        'product_id', 'category_id'
    ];
}
