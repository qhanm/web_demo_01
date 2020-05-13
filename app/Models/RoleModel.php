<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoleModel extends Model
{
    //
    protected $table = 'role';

    protected $fillable = [
        'name', 'description'
    ];

    public function users(){
        return $this->hasMany(App\Models\UserModel::class);
    }

    public function permissions()
    {
        return $this->hasMany(App\Models\PermissionModel::class);
    }
}
