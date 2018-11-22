<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Article;
class Article extends Model
{
    //ini yg boleh diisi

    use SoftDeletes;

	protected $fillable = ['category_id', 'title','body'];

	//ini yg gaboleh diisi
	protected $guarded=[];

	//Query scope , scope[Nama] => this case Search
	public function scopeSearch($query, $key){
		$query->where('title','like','%'.$key.'%');
	}

	//relation
	public function category(){
		return $this->belongsToMany('App\Category');
	}
}
