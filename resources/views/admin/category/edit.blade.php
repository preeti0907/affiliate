@extends('admin.layout.master')

@section('content')
 @if ($errors->any())
  <div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h5><i class="icon fas fa-ban"></i> 
      @foreach ($errors->all() as $error)
        {{$error}}
     @endforeach
    </h5>
  </div>
 @endif
@if(session()->has('success'))
  <div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h5><i class="icon fas fa-check"></i> {{ session()->get('success') }}</h5>
  </div>
@endif
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Edit Category</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{route('admin.category.update')}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{$category->id}}" name="category_id">
                <div class="card-body">
                	<div class="form-group" data-select2-id="51">
	                  <label>Select Parent Category</label>
	                  <select name="parent_id" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
	                    <option value="">Select Parent Category</option>
                      @foreach($categories as $value)
                      <option value="{{$value->id}}" @if($value->id == $category->parent_id) selected @endif>{{$value->name}}</option>
                      @endforeach
	                    </select>
	                </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="{{$category->name}}" placeholder="Enter Name">
                  </div>
                  <div class="form-group" data-select2-id="51">
	                  <label>Status</label>
	                  <select class="form-control select2 select2-hidden-accessible" name="status" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
	                    <option selected="selected" data-select2-id="3" value="Publish" @if($category->status == 'Publish') selected @endif>Publish</option>
	                    <option data-select2-id="53" value="UnPublish" @if($category->status == 'UnPublish') selected @endif>UnPublish</option>
	                    </select>
	                </div>
                  <img width="50px" src="{{url('uploads/images/category')}}/{{$category->image}}">
                  <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                <!-- /.card-body -->
                  <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
            <!-- /.card -->
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

@endsection