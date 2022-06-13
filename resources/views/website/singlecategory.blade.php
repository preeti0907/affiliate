@extends('website.layout.master')
@section('content')

<section class="blog-section">
    	<div class="container">
			<div class="row four-grid">
				@foreach($articles as $article)
				<div class="col-sm-6 col-lg-4 col-xl-4">
					<div class="blog-box">
						<div class="blog-img">
							<div class="imgFill2" style="background-image:url('{{url("uploads/images/article")}}/{{$article->image}}')"></div>
							
						</div>
						
						<div class="blog-content-box">
							<a href="{{url('article')}}/{{$article->id}}"><h4 class="blog-title">
								{{$article->title}}
							</h4></a>
							<p class="blog-content">
								{{$article->description}}
							</p>
							<div class="raed-more">
								<a class="btn btn-link" href="{{url('article')}}/{{$article->id}}">
									READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i>
								</a>
							</div>
						</div>
					</div>
			    </div>
			    @endforeach
			</div>
		</div>
</section>
@endsection