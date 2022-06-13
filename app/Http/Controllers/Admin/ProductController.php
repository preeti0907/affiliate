<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ArticleModel;
use App\Models\ProductModel;
use DataTables;

class ProductController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($article_id = null, Request $request)
    {

       if ($request->ajax()) {
        if ($article_id != null){
            $data = ProductModel::with('article')->where('article_id', $article_id)->get();
        }else{
            $data = ProductModel::with('article')->get();
        }
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('article_id', function($row){
                           if ($row->article) {
                           $btn5 = $row->article->title;
                           return $btn5;
                           }
    
                            
                    })
                    ->addColumn('image', function($row){
                        $url = url('uploads/images/product').'/'.$row->product_img;
                               $btn1 = '<img style="width:200px;"src="'.$url.'">';
                            return $btn1;
                    })
                    ->addColumn('action', function($row){
                            $url = route('admin.product.edit',$row->id);
                           $btn = '<a href="'.$url.'" type="button" style="padding: 7px;margin-right:5px;"><i class="fas fa-edit"></i></a>';

                            return $btn;
                    })

                    ->rawColumns(['action','article_id', 'image'])
                    ->make(true);
        }

        return view('admin.product.index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {
        $articles = ArticleModel::where('status','Publish')->get();
        return view('admin.product.create',compact('articles'));
    }

     public function save(Request $request)
    {

        $request->validate(
            [
                'article_id' => 'required',
                'heading' => 'required',
            ]
          );

        $product = new ProductModel;
        $product->article_id=$request->article_id;
        $product->heading= $request->heading;
        $product->affiliate_link=$request->affiliate_link;
        $product->description= $request->description;
        $product->status= $request->status;
        $product->save();

        if ($request->hasFile('product_img')) {
        $file = $request->file('product_img');
        $extension = $file->getClientOriginalExtension(); // getting image extension
          $filename = time().'.'.$extension;
          $file->move('uploads/images/product', $filename);
         $product->product_img = $filename;
         $product->save();
         }
 
         return redirect('admin-backend/article/edit'.'/'.$product->article_id)->with('success', 'Product created Successfully');  

    }

    public function edit($product_id)
    {
        $articles = ArticleModel::where('status','Publish')->get();
        $product = ProductModel::find($product_id);
        return view('admin.product.edit',compact('articles','product'));
    }

     public function update(Request $request)
    {

        $request->validate(
            [
                'article_id' => 'required',
                'heading' => 'required',
            ]
          );

        $product = ProductModel::find($request->product_id);
        $product->article_id=$request->article_id;
        $product->heading= $request->heading;
        $product->affiliate_link=$request->affiliate_link;
        $product->description= $request->description;
        $product->status= $request->status;
        $product->save();

        if ($request->hasFile('product_img')) {
        $file = $request->file('product_img');
        $extension = $file->getClientOriginalExtension(); // getting image extension
          $filename = time().'.'.$extension;
          $file->move('uploads/images/product', $filename);
         $product->product_img = $filename;
         $product->save();
         }

         return redirect()->back()->with('success', 'Product updated Successfully');   

    }

}
