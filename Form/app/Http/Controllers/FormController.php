<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
class FormController extends Controller
{
    //

    public function showpost(Request $request){
    	$data=$request;
    	// return $data->alamat;

    	return View::make('result')
    		->with('nama',$data->nama)
    		->with('tempatlahir',$data->tempatlahir)
    		->with('tanggallahir',$data->tanggallahir)
    		->with('gender',$data->radio)
    		->with('email',$data->email)
    		->with('alamat',$data->alamat);
        }
}
