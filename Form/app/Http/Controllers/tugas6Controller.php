<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Article;
use App\Category;
class tugas6Controller extends Controller
{
    //

    public function showform(){
    	$categories= Category::all();
    	return View::make('tugas6.formArticle')->with('categories',$categories);
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


    	 return View::make('tugas6.tableArticle')->with('datas',$articles);
    }

    public function showcategory(){
        $category = Category::with('articles')->get();
        // dd($category);
        return View::make('tugas6.tableCategory')->with('datas',$category);
    }


    public function editarticle($id){
        $article = Article::with('category')->find($id);
        // return $article->category
        // dd($article);
        $categories = Category::get();
        // return $categories[0]->id;
        return View::make("tugas6.editFormArticle")->with('article',$article)->with('categories',$categories);
    }

    public function saveeditedarticle(Request $request,$id){
        $article = Article::with('category')->find($id);
        $article->category()->detach($article->category);

        $article->title=$request->title;
        $article->body=$request->body;

        $article->Category()->attach($request->category);
        $article->save();

        return redirect()->route('tugas6.show.article');
    }

    public function deletearticle($id){
        $article = Article::with('category')->find($id);
        $article->category()->detach($article->category);
        $article->delete();



        return redirect()->route('tugas6.show.article');
    }
}
