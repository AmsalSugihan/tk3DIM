<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Permission::create([
            'name' => 'view product' // id 1
     ]);
     \App\Models\Permission::create([
            'name' => 'create product' // id 2
     ]);
     \App\Models\Permission::create([
            'name' => 'edit product' // id 3
     ]);
     \App\Models\Permission::create([
            'name' => 'delete product' // id 4
     ]);
     \App\Models\Permission::create([
            'name' => 'checkout product' // id 5
     ]);
     
     $admin = \App\Models\Role::where('name', 'admin')->first();
     $admin->permissions()->attach([1, 2, 3, 4]);
     
     $cust = \App\Models\Role::where('name', 'customer')->first();
     $cust->permissions()->attach([1, 5]);
     
    }
}
