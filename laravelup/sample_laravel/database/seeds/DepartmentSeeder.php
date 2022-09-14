<?php

use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Permission::insert([
            ['name' => 'Physics'],
            ['name' => 'Chemistry'],
            ['name' => 'Biology'],
            ['name' => 'Business'],
            ['name' => 'Accounting'],
            ['name' => 'Commerce'],
            ['name' => 'Economics'],
            ['name' => 'English'],
        ]);
    }
}
