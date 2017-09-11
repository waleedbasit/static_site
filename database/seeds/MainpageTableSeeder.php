<?php

use Illuminate\Database\Seeder;
use App\mainpage;
class MainpageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $main = new mainpage;
    	$main->heading = 'Enter Your Mission Statement Here';
    	$main->logo = '../images/brand/logo-1.png';
    	$main->save();
    }
}
