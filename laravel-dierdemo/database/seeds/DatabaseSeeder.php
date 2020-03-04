<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DierSoortSeeder::class);
        $this->call(DierSeeder::class);
        $this->call(AdminUserSeeder::class);
    }
}
