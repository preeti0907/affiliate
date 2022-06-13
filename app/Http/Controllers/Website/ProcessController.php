<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ArticleModel;
use App\Models\ProductModel;

class ProcessController extends Controller
{
   public function category($category_id)
    {
        $articles = ArticleModel::where('status', 'Publish')->where('category_id', $category_id)->get();
        return view('website.singlecategory',compact('articles'));
    }
    public function article($article_id)
    {
        $article = ArticleModel::where('id', $article_id)->first();
        $products = ProductModel::where('status', 'Publish')->where('article_id', $article_id)->get();
        return view('website.singlearticle',compact('article', 'products'));
    }
}
