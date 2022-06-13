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
                <h3 class="card-title">Edit Product</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{route('admin.product.update')}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{$product->id}}" name="product_id">
                <div class="card-body">
                	<div class="form-group" data-select2-id="51">
	                  <label>Select Article</label>
	                  <select name="article_id" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
	                    <option value="">Select Article</option>
                      @foreach($articles as $value)
                      <option value="{{$value->id}}" @if($value->id == $product->article_id) selected @endif>{{$value->title}}</option>
                      @endforeach
	                    </select>
	                </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="{{$product->heading}}" name="heading" placeholder="Enter Product Title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Link</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="{{$product->affiliate_link}}" name="affiliate_link" placeholder="Enter Product Link">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Image</label>
                    <input type="file" class="form-control" id="exampleInputEmail1" name="product_img">
                    <img width="100px" src="{{url('uploads/images/product')}}/{{$product->product_img}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <textarea class="form-control" name="description">{{$product->description}}</textarea>
                  </div>
                  <div class="form-group" data-select2-id="51">
                    <label>Status</label>
                    <select class="form-control select2 select2-hidden-accessible" name="status" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                      <option selected="selected" data-select2-id="3" value="Publish" @if($product->status == 'Publish') selected @endif>Publish</option>
                      <option data-select2-id="53" value="UnPublish" @if($product->status == 'UnPublish') selected @endif>UnPublish</option>
                      </select>
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