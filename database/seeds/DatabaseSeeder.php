<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(TextfieldsTableSeeder::class);
         $this->call(TestsTableSeeder::class);
//         $this->call(StudentTableSeeder::class);
    }
}
