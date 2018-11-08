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

        return View::make('tugas1.result')
            ->with('nama',$data->nama)
            ->with('tempatlahir',$data->tempatlahir)
            ->with('tanggallahir',$data->tanggallahir)
            ->with('gender',$data->radio)
            ->with('email',$data->email)
            ->with('alamat',$data->alamat);
    }
    public function showpost_2(Request $request){
    	$data=$request;
    	// return $data->alamat;

    	return View::make('tugas2.forms.result')
    		->with('nama',$data->nama)
    		->with('tempatlahir',$data->tempatlahir)
    		->with('tanggallahir',$data->tanggallahir)
    		->with('gender',$data->radio)
    		->with('email',$data->email)
    		->with('alamat',$data->alamat);
    }

    public function showpost_3(Request $request){
        $data=$request;

        $rules=array(
                'nama'=>'required|between:4,16',
                'gender'=>'required',
                'email'=>'required|email',
                'tempatlahir'=>'required|between:4,16',
                'tanggallahir'=>'required|date',
                'alamat'=>'nullable|between:4,64',
                'motto'=>'nullable|max:128'
            );

        $messages=array(
                'nama.required'=>'Masukkan Nama Anda!',
                'gender.required' =>'Pilih Gender Anda!',
                'email.required' => 'Masukkan E-mail Anda!',
                'tempatlahir.required' =>'Masukkan Tempat Lahir Anda!',
                'tanggallahir.required' =>'Masukkan Tanggal Lahir Anda!',
                'nama.between' =>'Nama minimal 4 karakter dan maksimal 16 karakter',
                'tempatlahir.between' =>'Tempat Lahir minimal 4 karakter dan maksimal 16 karakter',
                'alamat.between' =>'Alamat minimal 4 karakter dan maksimal 64 karakter',
                'email.email'=>'Masukkan email yang valid',
                'tanggallahir.date'=>'Masukkan tanggal lahir yang valid',
                'motto.max'=>'Motto maksimal 128 karakter'
            );

        $validator=\Validator::make($request->all(),$rules,$messages);

        if($validator->fails()){
            return redirect()->back()
                ->withErrors($validator)
                ->withInput($request->all());
        }
        else{
            return View::make('tugas3.forms.result')
                ->with('nama',$data->nama)
                ->with('tempatlahir',$data->tempatlahir)
                ->with('tanggallahir',$data->tanggallahir)
                ->with('gender',$data->radio)
                ->with('email',$data->email)
                ->with('alamat',$data->alamat)
                ->with('motto',$data->motto);

        }
    }
}
