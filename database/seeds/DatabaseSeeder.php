<?php

use Illuminate\Database\Seeder;
 
class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            ArticlesTableSeeder::class, // ①
            // OtherTableSeeder::class, // ②
        ]);
    }
}