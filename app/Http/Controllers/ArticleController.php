<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function liste_article(){
        $articles = Article::all();
        return view('/article.article' , compact('articles'));
    }

    public function ajouter_article(){
        return view('/article.ajouter');
        }

    
        public function ajouter_article_traitement(Request $request){
            $article= new Article();
            $article->image = $request->image;
            $article->nom = $request->nom;
            $article->description = $request->description;
            $article->a_la_une = $request->a_la_une;
            $article->save();
     
     
            return redirect('/ajouter')->with('status','l"article a étè ajouter avec succes');
     
     
        }    

        public function delete_article($id){
            $article= Article::find($id);
            $article->delete();
    
            return redirect('/article');
        }  


     public function update_article($id){
        $article= Article::find($id);
        return view('/article.update', compact('article'));
    
     }

     public function update_article_traitement(Request $request){

        $article= Article::find($request->id);
        $article->image = $request->image;
        $article->nom = $request->nom;
        $article->description = $request->description;
        $article->a_la_une = $request->a_la_une;

        $article->update();

        return redirect('/article');
     }
}
