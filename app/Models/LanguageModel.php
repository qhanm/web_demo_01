<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LanguageModel extends Model
{
    protected $table = 'language';

    protected $fillable = [
        'name', 'code'
    ];
}
