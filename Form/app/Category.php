<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
class Category extends Model
{
    //
    public function articles(){
    	return $this->belongsToMany('App\Article');
    }
}
