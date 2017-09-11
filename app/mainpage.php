<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mainpage extends Model
{
	protected $fillable = ['heading','logo'];
	public function abouts()
    {
        return $this->hasMany('App\aboutpage');
    }
    public function componets()
    {
        return $this->hasMany('App\componet');
    }
 //    public static function archives()
	// {
	// 	$mainpage=new mainpage;
	// 	$mainpage=$mainpage->find('1');
		
	// 	return static::$mainpage;
	// }
}
