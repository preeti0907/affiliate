@extends('admin.layout.master')

@section('content')

@if(session()->has('success'))
  <div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h5><i class="icon fas fa-check"></i> {{ session()->get('success') }}</h5>
  </div>
    @endif
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Category</h3>
                <span style="float:right;"><a href="{{route('admin.category.create')}}" class="btn btn-block btn-outline-dark btn-flat">Add New</a></span>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                	<div class="row">
                		<div class="col-sm-12">
                			<table id="category" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="example2_info">
			                  <thead>
			                  <tr>
			                  	<th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Name</th>
			                  	<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Parent Category</th>
			                  	<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Status(s)</th>
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

    <script>
$(function () {
    
    var table = $('#category').DataTable({
      "bInfo": false,
      "autoWidth": false,
        processing: true,
        serverSide: true,
        responsive: true,

        ajax: "{{ route('admin.category.index') }}",
        columns: [
            {data: 'name', name: 'name'},
            {data: 'parent_id', name: 'parent_id'},
            {data: 'status', name: 'status'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ],
    });
    
  });
</script>

@endsection