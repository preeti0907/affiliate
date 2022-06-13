<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CategoryModel;
use DataTables;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $category = CategoryModel::all();

        if ($request->ajax()) {
            $data = CategoryModel::with('parent')->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('parent_id', function($row){
                           if ($row->parent) {
                           $btn = $row->parent->name;
                           return $btn;
                           }
    
                            
                    })
                    ->addColumn('action', function($row){
     
                           $btn = '<a href="category/edit/'.$row->id.'" type="button" style="padding: 7px;margin-right:5px;"><i class="fas fa-edit"></i></a>';
    
                            return $btn;
                    })

                    ->rawColumns(['action','parent_id'])
                    ->make(true);
        }

        return view('admin.category.index');
    }

    public function create()
    {
        $category = CategoryModel::where('Status','Publish')->get();
        return view('admin.category.create',compact('category'));
    }

    public function save(Request $request)
    {

        $request->validate(
            [
                'name' => 'required',
                'status' => 'required',
            ]
          );

        $category = new CategoryModel;
        $category->name= $request->name;
        $category->parent_id=$request->parent_id;
        $category->status= $request->status;
        $category->save();

        if ($request->parent_id == null) {
           $category->parent_id=$category->id;
           $category->save();
        }

        if ($request->hasFile('image')) {
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension(); // getting image extension
          $filename = time().'.'.$extension;
          $file->move('uploads/images/category', $filename);
         $category->image = $filename;
         $category->save();
         }

         return redirect('admin-backend/category')->with('success', 'Category Updated Successfully');  

    }

    public function edit($category_id)
    {
        $category = CategoryModel::find($category_id);
        $categories = CategoryModel::where('Status','Publish')->get();

        return view('admin.category.edit',compact('category','categories'));

    }

    public function update(Request $request)
    {
        $category = CategoryModel::find($request->category_id);
        $category->name= $request->name;
        $category->status= $request->status;
        $category->parent_id=$request->parent_id;
        $category->save();

        if ($request->parent_id == null) {
           $category->parent_id=$category->id;
           $category->save();
        }

         if ($request->hasFile('image')) {
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension(); // getting image extension
          $filename = time().'.'.$extension;
          $file->move('uploads/images/category', $filename);
         $category->image = $filename;
         $category->save();
         }

         return redirect()->back()->with('success', 'Category Added Successfully');   

    }
}
