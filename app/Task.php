<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public static function myfunc(){
		return static::where('my', NULL)->get();
	}
}
