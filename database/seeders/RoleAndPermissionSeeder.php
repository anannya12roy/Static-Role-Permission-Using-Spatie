<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class RoleAndPermissionSeeder extends Seeder
{
    public function run()
    {
            Permission::create(['name' => 'users']);
            Permission::create(['name' => 'index-users']);
            Permission::create(['name' => 'create-users']);
            Permission::create(['name' => 'edit-users']);
            Permission::create(['name' => 'delete-users']);

            Permission::create(['name' => 'category']);
            Permission::create(['name' => 'index-category']);
            Permission::create(['name' => 'create-category']);
            Permission::create(['name' => 'edit-category']);
            Permission::create(['name' => 'delete-category']);

            Permission::create(['name' => 'subcategory']);
            Permission::create(['name' => 'index-subcategory']);
            Permission::create(['name' => 'create-subcategory']);
            Permission::create(['name' => 'edit-subcategory']);
            Permission::create(['name' => 'delete-subcategory']);

            Permission::create(['name' => 'create-blog-posts']);
            Permission::create(['name' => 'edit-blog-posts']);
            Permission::create(['name' => 'delete-blog-posts']);

            $adminRole = Role::create(['name' => 'Admin']);
            $subadminRole = Role::create(['name' => 'SubAdmin']);

            $adminRole->givePermissionTo([
                'users',
                'index-users',
                'create-users',
                'edit-users',
                'delete-users',
                'category',
                'index-category',
                'create-category',
                'edit-category',
                'delete-category',
                'subcategory',
                'index-subcategory',
                'create-subcategory',
                'edit-subcategory',
                'delete-subcategory',
            ]);

            $subadminRole->givePermissionTo([
                'index-users',
                'category',
                'index-category',
                'create-category',
                'subcategory',
                'index-subcategory',
                'create-subcategory',
                'edit-subcategory',
            ]);

    }
}
