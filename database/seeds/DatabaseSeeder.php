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
        $this->call(MainpageTableSeeder::class);
   		$this->call(AboutpageTableSeeder::class);
        $this->call(ComponetTableSeeder::class);
    }
}
