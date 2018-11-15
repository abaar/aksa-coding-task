<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;


class tugas4Controller extends Controller
{
    //

    public function showform(){
    	$categories=DB::table('category')->select('id','name')->get();
    	return View::make('tugas4.formProduct')->with('categories',$categories);
    }

    public function inputform(Request $request){
    	$category_id = $request->category_id;
    	$name = $request->name;
    	$desc = $request->desc;
    	$price = $request->price;

    	$rules = array(
    		'category_id'=>'required|between:1,2',
    		'name'=>'required',
    		'desc'=>'nullable',
    		'price'=>'required|numeric'
    	);

    	$message = array(
    		'category_id.required' =>'Choose the proper category',
    		'category_id.between' => 'Choose the proper category',
    		'name.required' => "Product's name required",
    		'price.required' => "Product's price required",
    		'price.numeric' => "Product's price must be integer value!"
    	);

    	$validation = \Validator::make($request->all(),$rules,$message);

    	if($validation->fails()){
    		return redirect()->back()->withErrors($validation)->withInput($request->all());
    	}

    	DB::table('product')->insert([
    		'category_id'=>$category_id,
    		'name'=>$name,
    		'description'=>$desc,
    		'price'=>$price
    	]);

    	return $this->showproduct();
    }

    public function showproduct(){
    	$datas = DB::table('product')->selectRaw('product.id as id , category.name as category , product.name as name , product.price as price , product.description as description')
            ->join('category','category.id','=','product.category_id')
            ->get();
    	return View::make('tugas4.tableProduct')->with('datas',$datas);
    }
}
