<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@com.com',
            'role_id' => 1
        ]);

        User::factory()->create([
            'name' => 'Turash',
            'email' => 'turash@com.com',
            'role_id' => 1
        ]);

        User::factory()->create([
            'name' => 'customer',
            'email' => 'customer@app.com',
            'role_id' => 2
        ]);

        User::factory()->create([
            'name' => 'Peter',
            'email' => 'peter@app.com',
            'role_id' => 2
        ]);
    }
}
