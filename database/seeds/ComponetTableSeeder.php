<?php

use Illuminate\Database\Seeder;
use App\componet;
class ComponetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $componet = new componet;
        
    	$componet->heading = 'Torah Reading';
    	$componet->subtext ='Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.';
    	$componet->image = '../images/torah reading.jpg';
    	$componet->pageHeading='Torah Reading';
    	$componet->mainpage_id='1';
    	$componet->save();

    	$componet = new componet;
    	$componet->heading = 'Bar Mitzvah';
    	$componet->subtext ='Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.';
    	$componet->image = '../images/bar mitzvah.jpg';
    	$componet->pageHeading="Bar Mitzvah";
    	$componet->mainpage_id='1';
    	$componet->save();


        $componet = new componet;
        $componet->heading = 'Please Enter Your Text Here';
        $componet->subtext ='Please Enter Your Text Here';
        $componet->image = '../images/1400x900.png';
        $componet->pageHeading="Please Enter Your Text Here";
        $componet->mainpage_id='1';
        $componet->save();
    }
}
