<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductTranslationModel extends Model
{
    protected $table = 'product_translation';

    protected $fillable = [
        'product_id', 'language_id', 'name', 'description', 'content', 'seo_title', 'seo_alias', 'seo_keyword', 'seo_description'
    ];
}
