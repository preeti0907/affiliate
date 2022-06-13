<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CategoryModel;
use App\Models\ArticleModel;
use App\Models\ProductModel;

class HomeController extends Controller
{
    //
     public function index()
    {
        $categories = CategoryModel::with('subcategory')->where('status','Publish')->whereRaw('parent_id != id')->get();
        $parent_categories = CategoryModel::where('status','Publish')->whereRaw('parent_id = id')->get();
        $articles = ArticleModel::where('status','Publish')->get();
        $products = ProductModel::where('status', 'Publish')->get();
        return view('website.home',compact('categories','parent_categories','products','articles'));
    }
 
}
