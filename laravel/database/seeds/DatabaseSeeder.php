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
        $this->call([
            EmployeeSeeder::class, //va prima la tab senza la foreign key
            TaskSeeder::class,
            TypologySeeder::class, //va messo dove voglio
        ]);
    }
}
