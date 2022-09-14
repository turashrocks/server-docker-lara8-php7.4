<?php

namespace Database\Seeders;

// use App\Models\Permission;
use Illuminate\Database\Seeder;
use RolePermissionSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            RoleSeeder::class,
            PermissionSeeder::class,
            // RolePermissionSeeder::class,
            UserSeeder::class,
            DepartmentSeeder::class,
            StudentSeeder::class
        ]);
    }
}
