<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FunctionModel extends Model
{
    protected $table = 'function';

    protected $fillable = [
        'name', 'url', 'parent_id', 'icon_css', 'sort_order'
    ];

    // get list permission with multi role
    public function permissions()
    {
        return $this->hasMany(App\Models\PermissionModel::class);
    }
}
