
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
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{route('admin.product.save')}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{$artcle->id}}" name="article_id">
                <div class="card-body">
          
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="heading" placeholder="Enter Product Title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Link</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="affiliate_link" placeholder="Enter Product Link">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Image</label>
                    <input type="file" class="form-control" id="exampleInputEmail1" name="product_img">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <textarea class="form-control" name="description"></textarea>
                  </div>
                  <div class="form-group" data-select2-id="51">
	                  <label>Status</label>
	                  <select class="form-control select2 select2-hidden-accessible" name="status" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
	                    <option selected="selected" data-select2-id="3" value="Publish">Publish</option>
	                    <option data-select2-id="53" value="UnPublish">UnPublish</option>
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

