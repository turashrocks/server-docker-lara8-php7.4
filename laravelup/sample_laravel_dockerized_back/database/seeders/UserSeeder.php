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
            'name' => 'admin',
            'email' => 'admin@app.com',
            'role_id' => 1
        ]);

        User::factory()->create([
            'name' => 'principal',
            'email' => 'principal@app.com',
            'role_id' => 2
        ]);

        User::factory()->create([
            'name' => 'teacher',
            'email' => 'teacher@app.com',
            'role_id' => 3
        ]);

    }
}
