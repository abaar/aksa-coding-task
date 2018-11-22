<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Article;
use App\Category;
class tugas5Controller extends Controller
{
    //

    public function showform(){
    	$categories= Category::all();
    	return View::make('tugas5.formArticle')->with('categories',$categories);
    }

    public function inputarticle(Request $request){
    	$rules = array('title'=>'required','category'=>'required','body'=>'required');

        $message = array(
            'required'=>":attribute is required!"
        );

        $validation = \Validator::make($request->all(),$rules,$message);

        if($validation->fails()){
            return redirect()->back()->withErrors($validation)->withInput($request->all());
        }

        $article = new Article();
    	$article->title=$request->title;
    	$article->body=$request->body;
        $article->save();



        $article->category()->attach($request->category);

    	return $this->showarticle();
    }

    public function showarticle(){
    	$articles = Article::with('category')->get();


    	 return View::make('tugas5.tableArticle')->with('datas',$articles);
    }

    public function showcategory(){
        $category = Category::with('articles')->get();
        // dd($category);
        return View::make('tugas5.tableCategory')->with('datas',$category);
    }

}
