@extends('admin.layout.master')

@section('content')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
 @if ($errors->any())
     @foreach ($errors->all() as $error)
         <div>{{$error}}</div>
     @endforeach
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
            <h3 class="card-title">Edit Article</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form method="POST" action="{{route('admin.article.update')}}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="article_id" value="{{$artcle->id}}">
            <div class="card-body">
            	<div class="form-group" data-select2-id="51">
                <label>Select Category</label>
                <select name="category_id" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                  <option value="">Select Category</option>
                  @foreach($categories as $value)
                  <option value="{{$value->id}}" @if($artcle->category_id == $value->id) selected @endif>{{$value->name}}</option>
                  @endforeach
                  </select>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" value="{{$artcle->title}}" class="form-control" id="exampleInputEmail1" name="title" placeholder="Enter Title">
              </div>
               <img width="50px" src="{{url('uploads/images/article')}}/{{$artcle->image}}">
              <div class="form-group">
                <label for="exampleInputFile">Image</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="image" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Slug</label>
                <input type="text" class="form-control" id="exampleInputEmail1" value="{{$artcle->slug}}" name="slug" placeholder="Enter Slug">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Tag</label>
                <input type="text" class="form-control" id="exampleInputEmail1" value="{{$artcle->tag}}" name="tag" placeholder="Enter Article Tag">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Description</label>
                <textarea class="form-control" name="description">{{$artcle->description}}</textarea>
              </div>
              <div class="form-group" data-select2-id="51">
                <label>Status</label>
                <select class="form-control select2 select2-hidden-accessible" name="status" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                  <option selected="selected" data-select2-id="3" value="Publish" @if($artcle->status == 'Publish') selected @endif>Publish</option>
                  <option data-select2-id="53" value="UnPublish" @if($artcle->status == 'UnPublish') selected @endif>UnPublish</option>
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
    <br>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Products</h3>
            <span style="float:right;">  <button type="button" class="btn btn-primary" style="display:inline-block;width: fit-content;" data-toggle="modal" data-target="#myModal">Add Products</button></span>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
              <div class="row">
                <div class="col-sm-12">
                  <table id="category" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="example2_info">
                    <thead>
                    <tr>
                      <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Image</th>
                      <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Heading</th>
                      <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Article</th>
                      <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Status</th>
                      <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Action</th>
                    </thead>
                    <tbody>
                     
                    </tbody>
                  </table>
              </div>
          </div>
          </div>
          <!-- /.card-body -->
        </div>
   
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>

<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Create Products</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         @include('admin.product.create')
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>


<script type="text/javascript">
      $(function () {
    
    var table = $('#category').DataTable({
      "bInfo": false,
      "autoWidth": false,
        processing: true,
        serverSide: true,
        responsive: true,

        ajax: "{{ route('admin.product.index', $artcle->id) }}",
        columns: [
            {data: 'image', name: 'image'},
            {data: 'heading', name: 'heading'},
            {data: 'article_id', name: 'article_id'},
            {data: 'status', name: 'status'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ],
    });
    
  });
    </script>



@endsection