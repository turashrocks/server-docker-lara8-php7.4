<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::factory()->create([
            'name' => 'Admin'
        ]);

        Role::factory()->create([
            'name' => 'Principal'
        ]);

        Role::factory()->create([
            'name' => 'Teacher'
        ]);
        // $admin = Role::factory()->create([
        //     'name' => 'Admin'
        // ]);
        // $customer = Role::factory()->create([
        //     'name' => 'Customer'
        // ]);
        // $permissions = Permission::all();
        // $admin->permissions()->attach($permissions->pluck('id'));
        // $customer->permissions()->attach($permissions->pluck('id'));
        // $customer->permissions()->detach(4);

    }
}
