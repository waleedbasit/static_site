<?php

use Illuminate\Database\Seeder;
use App\aboutpage;
class AboutpageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$about = new aboutpage;
    	$about->heading = 'Get in Touch';
        $about->mainpage_id='1';
    	$about->subtext = 'Feel free to drop us a line to contact us';
    	$about->save();
    }
}
