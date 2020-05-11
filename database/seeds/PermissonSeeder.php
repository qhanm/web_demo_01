<?php

use Illuminate\Database\Seeder;

class PermissonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('permission')->insert([
           ['create' => true, 'update' => true, 'delete' => true, 'read' => true, 'role_id' => 1, 'function_id' => 'HOME'],
           ['create' => true, 'update' => true, 'delete' => true, 'read' => true, 'role_id' => 1, 'function_id' => 'MEDIA'],
           ['create' => true, 'update' => true, 'delete' => true, 'read' => true, 'role_id' => 1, 'function_id' => 'MEDIA_LIBRARY'],
           ['create' => true, 'update' => true, 'delete' => true, 'read' => true, 'role_id' => 1, 'function_id' => 'MEDIA_ADD'],
           ['create' => true, 'update' => true, 'delete' => true, 'read' => true, 'role_id' => 1, 'function_id' => 'USER'],
           ['create' => true, 'update' => true, 'delete' => true, 'read' => true, 'role_id' => 1, 'function_id' => 'USER_ALL'],
           ['create' => true, 'update' => true, 'delete' => true, 'read' => true, 'role_id' => 1, 'function_id' => 'USER_ADD'],
           ['create' => true, 'update' => true, 'delete' => true, 'read' => true, 'role_id' => 1, 'function_id' => 'USER_YOUR_PROFILE'],
           ['create' => true, 'update' => true, 'delete' => true, 'read' => true, 'role_id' => 1, 'function_id' => 'USER_ROLE'],
           ['create' => true, 'update' => true, 'delete' => true, 'read' => true, 'role_id' => 1, 'function_id' => 'SETTING'],
           ['create' => true, 'update' => true, 'delete' => true, 'read' => true, 'role_id' => 1, 'function_id' => 'COMMENT'],
           ['create' => true, 'update' => true, 'delete' => true, 'read' => true, 'role_id' => 1, 'function_id' => 'PAGE'],
           ['create' => true, 'update' => true, 'delete' => true, 'read' => true, 'role_id' => 1, 'function_id' => 'PAGE_ALL'],
           ['create' => true, 'update' => true, 'delete' => true, 'read' => true, 'role_id' => 1, 'function_id' => 'PAGE_NEW'],
           ['create' => true, 'update' => true, 'delete' => true, 'read' => true, 'role_id' => 1, 'function_id' => 'POST'],
           ['create' => true, 'update' => true, 'delete' => true, 'read' => true, 'role_id' => 1, 'function_id' => 'POST_ADD'],
           ['create' => true, 'update' => true, 'delete' => true, 'read' => true, 'role_id' => 1, 'function_id' => 'POST_ALL'],
           ['create' => true, 'update' => true, 'delete' => true, 'read' => true, 'role_id' => 1, 'function_id' => 'CATEGORY'],
           ['create' => true, 'update' => true, 'delete' => true, 'read' => true, 'role_id' => 1, 'function_id' => 'CATEGORY_ADD'],
           ['create' => true, 'update' => true, 'delete' => true, 'read' => true, 'role_id' => 1, 'function_id' => 'CATEGORY_ALL'],
           ['create' => true, 'update' => true, 'delete' => true, 'read' => true, 'role_id' => 1, 'function_id' => 'PRODUCT'],
           ['create' => true, 'update' => true, 'delete' => true, 'read' => true, 'role_id' => 1, 'function_id' => 'PRODUCT_ADD'],
           ['create' => true, 'update' => true, 'delete' => true, 'read' => true, 'role_id' => 1, 'function_id' => 'PRODUCT_ALL'],
        ]);
    }
}
