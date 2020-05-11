<?php

use Illuminate\Database\Seeder;

class FunctionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('function')->insert([
           [
               'id' => 'HOME',
               'name' => 'Home',
               'url' => '/',
               'parent_id' => '',
               'icon_css' => '',
               'sort_order' => 1
           ],
            [
                'id' => 'MEDIA',
                'name' => 'Media',
                'url' => '/media',
                'parent_id' => '',
                'icon_css' => '',
                'sort_order' => 2
            ],
            [
                'id' => 'MEDIA_LIBRARY',
                'name' => 'Library',
                'url' => '/media',
                'parent_id' => 'MEDIA',
                'icon_css' => '',
                'sort_order' => 2
            ],
            [
                'id' => 'MEDIA_ADD',
                'name' => 'Add New',
                'url' => '/media',
                'parent_id' => 'MEDIA',
                'icon_css' => '',
                'sort_order' => 2
            ],
            [
                'id' => 'USER',
                'name' => 'Users',
                'url' => '/user',
                'parent_id' => '',
                'icon_css' => '',
                'sort_order' => 3
            ],
            [
                'id' => 'USER_ALL',
                'name' => 'All Users',
                'url' => '/user',
                'parent_id' => 'USER',
                'icon_css' => '',
                'sort_order' => 3
            ],
            [
                'id' => 'USER_ADD',
                'name' => 'Add New',
                'url' => '/user/add',
                'parent_id' => 'USER',
                'icon_css' => '',
                'sort_order' => 3
            ],
            [
                'id' => 'USER_YOUR_PROFILE',
                'name' => 'Your Profile',
                'url' => '/user/your-profile',
                'parent_id' => 'USER',
                'icon_css' => '',
                'sort_order' => 3
            ],
            [
                'id' => 'USER_ROLE',
                'name' => 'Role',
                'url' => '/user/role',
                'parent_id' => 'USER',
                'icon_css' => '',
                'sort_order' => 3
            ],
            [
                'id' => 'SETTING',
                'name' => 'Setting',
                'url' => '/setting',
                'parent_id' => '',
                'icon_css' => '',
                'sort_order' => 4
            ],
            [
                'id' => 'COMMENT',
                'name' => 'Comment',
                'url' => '/comment',
                'parent_id' => '',
                'icon_css' => '',
                'sort_order' => 5
            ],
            [
                'id' => 'PAGE',
                'name' => 'Pages',
                'url' => '/page',
                'parent_id' => '',
                'icon_css' => '',
                'sort_order' => 6
            ],
            [
                'id' => 'PAGE_ADD',
                'name' => 'Add New',
                'url' => '/page/add',
                'parent_id' => 'PAGE',
                'icon_css' => '',
                'sort_order' => 6
            ],
            [
                'id' => 'PAGE_ALL',
                'name' => 'All Page',
                'url' => '/page',
                'parent_id' => 'PAGE',
                'icon_css' => '',
                'sort_order' => 6
            ],
            [
                'id' => 'POST',
                'name' => 'Post',
                'url' => '/post',
                'parent_id' => '',
                'icon_css' => '',
                'sort_order' => 7
            ],
            [
                'id' => 'POST_ADD',
                'name' => 'Add New',
                'url' => '/post/add',
                'parent_id' => 'POST',
                'icon_css' => '',
                'sort_order' => 7
            ],
            [
                'id' => 'POST_ALL',
                'name' => 'All Post',
                'url' => '/post',
                'parent_id' => 'POST',
                'icon_css' => '',
                'sort_order' => 7
            ],
            [
                'id' => 'CATEGORY',
                'name' => 'Category',
                'url' => '/category',
                'parent_id' => '',
                'icon_css' => '',
                'sort_order' => 8
            ],
            [
                'id' => 'CATEGORY_ADD',
                'name' => 'Add New',
                'url' => '/category/add',
                'parent_id' => 'CATEGORY',
                'icon_css' => '',
                'sort_order' => 8
            ],
            [
                'id' => 'CATEGORY_ALL',
                'name' => 'All Category',
                'url' => '/category',
                'parent_id' => 'CATEGORY',
                'icon_css' => '',
                'sort_order' => 8
            ],
            [
                'id' => 'PRODUCT',
                'name' => 'Product',
                'url' => '/product',
                'parent_id' => '',
                'icon_css' => '',
                'sort_order' => 9
            ],
            [
                'id' => 'PRODUCT_ADD',
                'name' => 'Add New',
                'url' => '/product/add',
                'parent_id' => 'PRODUCT',
                'icon_css' => '',
                'sort_order' => 9
            ],
            [
                'id' => 'PRODUCT_ALL',
                'name' => 'All Product',
                'url' => '/product',
                'parent_id' => 'PRODUCT',
                'icon_css' => '',
                'sort_order' => 9
            ],
        ]);
    }
}
