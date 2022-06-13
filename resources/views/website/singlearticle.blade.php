@extends('website.layout.master')
@section('content')


<section class="blog pt-5 pb-5 bg-light">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="text-center">
						<h2 class="">{{$article->title}}</h2>

	                    <div class="page-location pt-0">
	                    	<br>
	                    	<p>{{$article->description}}</p>
	                    </div>
                    </div>
				</div>
			</div>
		</div>
    </section>

<section class="blog">
	<div class="container">
		@foreach($products as $product)
		<div class="tab-content" id="">
			<div class="row tab-video-area">
				<div class="col-12 col-md-12 col-lg-4">
					<img class="figure-img img-fluid" src="{{url('uploads/images/product')}}/{{$product->product_img}}" alt="Image">
				</div>
				<div class="col-12 col-md-12 col-lg-8 video-info">
					<h2 class="video-info-title">
						{{$product->heading}}
					</h2>
<!-- 
					<p><strong class="video-info-subtitle">Pros:</strong>really great keyboard, good trackpad, alcantara, stand-out design, USB-A port, great screen, great battery life, Windows Hello</p>
					<p><strong class="video-info-subtitle">Pros:</strong>really great keyboard, good trackpad, alcantara, stand-out design, USB-A port, great screen, great battery life, Windows Hello</p>
 -->

					<p class="video-info-content">
						{{$product->description}}
					</p>
					<div class="compare-btn">
						<a class="btn btn-primary btn-sm" href="{{$product->affiliate_link}}">Buy Now</a>
					</div>
				</div>
			</div>
		</div>
		<hr>
		@endforeach
	</div>
</section>
@endsection