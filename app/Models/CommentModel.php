<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CommentModel extends Model
{
    protected $table = 'comment';

    protected $fillable = [
        'product_id', 'email', 'name', 'image_thumbnail', 'content', 'level', 'is_edit'
    ];
}
