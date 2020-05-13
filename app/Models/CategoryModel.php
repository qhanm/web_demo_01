<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    protected $table = 'category';

    protected $fillable = [
        'parent_id', 'name', 'image_thumbnail', 'slug'
    ];
}
