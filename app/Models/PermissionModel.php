<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PermissionModel extends Model
{
    protected $table = 'permission';

    protected $fillable = [
        'create', 'update', 'delete', 'read', 'role_id', 'function_id'
    ];

    public function role()
    {
        return $this->hasOne(App\Models\RoleModel::class);
    }

    public function _function()
    {
        return $this->hasOne(App\Models\FunctionModel::class);
    }
}
