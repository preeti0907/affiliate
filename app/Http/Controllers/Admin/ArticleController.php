<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ArticleModel;
use App\Models\CategoryModel;
use App\Models\ProductModel;
use DataTables;
use Auth;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $category = ArticleModel::all();

        if ($request->ajax()) {
            $data = ArticleModel::with('category')->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('category_id', function($row){
                           if ($row->category) {
                           $btn = $row->category->name;
                           return $btn;
                           }
    
                            
                    })
                     ->addColumn('image', function($row){
                        $url = url('uploads/images/article').'/'.$row->image;
                               $btn1 = '<img style="width:200px;"src="'.$url.'">';
                            return $btn1;
                    })
                    ->addColumn('action', function($row){
     
                           $btn = '<a href="article/edit/'.$row->id.'" type="button" style="padding: 7px;margin-right:5px;"><i class="fas fa-edit"></i></a>';
    
                            return $btn;
                    })

                    ->rawColumns(['action','category_id','image'])
                    ->make(true);
        }

        return view('admin.article.index');
    }

    public function create()
    {
        $categories = CategoryModel::where('Status','Publish')->get();
        return view('admin.article.create',compact('categories'));
    }

    public function save(Request $request)
    {

        $request->validate(
            [
                'title' => 'required',
                'status' => 'required',
            ]
          );

        $artcle = new ArticleModel;
        $artcle->title= $request->title;
        $artcle->category_id=$request->category_id;
        $artcle->status= $request->status;
        $artcle->tag= $request->tag;
        $artcle->slug= $request->slug;
        $artcle->posted_by= Auth::user()->id;
        $artcle->description= $request->description;
        $artcle->save();

        if ($request->hasFile('image')) {
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension(); // getting image extension
          $filename = time().'.'.$extension;
          $file->move('uploads/images/article', $filename);
         $artcle->image = $filename;
         $artcle->save();
         }


         return redirect('admin-backend/article/edit'.'/'.$artcle->id)->with('success', 'article Updated Successfully');  

    }

    public function edit($article_id,Request $request)
    {
        $artcle = ArticleModel::find($article_id);
        $categories = CategoryModel::where('Status','Publish')->get();
        $articles = ArticleModel::where('status','Publish')->get();

        

        return view('admin.article.edit',compact('categories','artcle','articles'));

    }

    public function update(Request $request)
    {

        $request->validate(
            [
                'title' => 'required',
                'status' => 'required',
            ]
          );

        $artcle = ArticleModel::find($request->article_id);
        $artcle->title= $request->title;
        $artcle->category_id=$request->category_id;
        $artcle->status= $request->status;
        $artcle->tag= $request->tag;
        $artcle->slug= $request->slug;
        $artcle->posted_by= Auth::user()->id;
        $artcle->description= $request->description;
        $artcle->save();

         if ($request->hasFile('image')) {
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension(); // getting image extension
          $filename = time().'.'.$extension;
          $file->move('uploads/images/article', $filename);
         $artcle->image = $filename;
         $artcle->save();
         }

         return redirect()->back()->with('success', 'article Added Successfully');   

    }
}
