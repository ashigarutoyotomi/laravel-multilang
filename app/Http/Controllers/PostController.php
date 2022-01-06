<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Article;
class PostController extends Controller
{
    public function store(Request $request, Article $article){
        $article = new Article();
        $article->text_ru =$request->text_ru;
        $article->text_en =$request->text_en;
        $article->text_kg =$request->text_kg;
        $article->title_ru =$request->title_ru;
        $article->title_en =$request->title_en;
        $article->title_kg =$request->title_kg;
        $article->save();
        redirect()->back();
    }
}
