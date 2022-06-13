@extends('website.layout.master')
@section('content')

  <!-- =========================
        Slider Section
    ============================== -->
<section id="main-slider-section">
	<div class="wrapper">
		<div class="content">
		    <div class="product-img">
		      <div class="product-img__item" id="img1">
		      	<img src="{{url('affiliate/img/some-product.png')}}" alt="star wars" class="product-img__img">
		      </div>

		      <div class="product-img__item" id="img2">
		      	<img src="{{url('affiliate/img/some-product-2.png')}}" alt="star wars" class="product-img__img">
		      </div>
	    	</div>

	    	<div class="product-slider">
		      <button class="prev">
		        <span class="icon">
		          <svg class="icon icon-arrow-right"><use xlink:href="#icon-arrow-left"></use></svg>
		        </span>
		      </button>
		      <button class="next">
		        <span class="icon">
		          <svg class="icon icon-arrow-right"><use xlink:href="#icon-arrow-right"></use></svg>
		        </span>
		      </button>
		    	<div class="product-slider__wrp swiper-wrapper">
			        <div class="product-slider__item swiper-slide" data-target="img1">
			          <div class="product-slider__card">
			            <img src="https://www.2danimation101.com/IMG/06-BG-2DA101.jpg" alt="star wars" class="product-slider__cover">
			            <div class="product-slider__content">
			              <h1 class="product-slider__title">
			               Best Body Care Products
			              </h1>
			              <span class="product-slider__price">Top Trending Body care products</span>

			              <div class="product-slider__bottom">
			                <button class="product-slider__cart">
			                  View Now
			                </button>

			                
			              </div>
			            </div>
			          </div>
			        </div>

			        <div class="product-slider__item swiper-slide" data-target="img2">
			          <div class="product-slider__card">
			            <img src="https://www.2danimation101.com/IMG/06-BG-2DA101.jpg" alt="star wars" class="product-slider__cover">
			            <div class="product-slider__content">
			              <h1 class="product-slider__title">
			               Name Here 2
			              </h1>
			              <span class="product-slider__price">Some Text</span>

			              <div class="product-slider__bottom">
			                <button class="product-slider__cart">
			                  View Now
			                </button>

			                
			              </div>
			            </div>
			          </div>
			        </div>
			    </div>
	    	</div>

	  </div>



	</div>
	<svg class="hidden" hidden>
	  <symbol id="icon-arrow-left" viewBox="0 0 32 32">
	    <path d="M0.704 17.696l9.856 9.856c0.896 0.896 2.432 0.896 3.328 0s0.896-2.432 0-3.328l-5.792-5.856h21.568c1.312 0 2.368-1.056 2.368-2.368s-1.056-2.368-2.368-2.368h-21.568l5.824-5.824c0.896-0.896 0.896-2.432 0-3.328-0.48-0.48-1.088-0.704-1.696-0.704s-1.216 0.224-1.696 0.704l-9.824 9.824c-0.448 0.448-0.704 1.056-0.704 1.696s0.224 1.248 0.704 1.696z"></path>
	  </symbol>
	  <symbol id="icon-arrow-right" viewBox="0 0 32 32">
	    <path d="M31.296 14.336l-9.888-9.888c-0.896-0.896-2.432-0.896-3.328 0s-0.896 2.432 0 3.328l5.824 5.856h-21.536c-1.312 0-2.368 1.056-2.368 2.368s1.056 2.368 2.368 2.368h21.568l-5.856 5.824c-0.896 0.896-0.896 2.432 0 3.328 0.48 0.48 1.088 0.704 1.696 0.704s1.216-0.224 1.696-0.704l9.824-9.824c0.448-0.448 0.704-1.056 0.704-1.696s-0.224-1.248-0.704-1.664z"></path>
	  </symbol>
	</svg>
    
</section>

    <section id="product-amazon" class="style-fd">
    	<div class="container-fluid custom-width">
    		<div class="row">
    			<div class="col-12">
    				<div class="section-title-center text-left">
    					<h2 class="title pl-0">Top Deals</h2>
    				</div>
    			</div>
    		</div>
    	</div>
    	<section class="full-carousel bg-white">
        <div class="fullwidth-carousel owl-carousel owl-theme">
           @foreach($categories as $category)

            <div class="sin-fw-carousel item">
            	<a href="{{url('category')}}/{{$category->id}}"><div class="imgFill" style="background-image:url('{{url("uploads/images/category")}}/{{$category->image}}')"></div>
<!--                 <img src="{{url('uploads/images/category')}}/{{$category->image}}" alt=""> -->
                <div class="full-width-con">
                  <!--  <div class="bot-cont">
                        <a href="#">{{$category->created_at}}</a>
                    </div> -->
                    <div class="bottom-line">
                        <h2><a href="{{url('category')}}/{{$category->id}}">{{$category->name}}</a></h2>
                    </div>
                </div>
            </div></a>
                   
             @endforeach       
        </div>
    </section>
    </section>


<!-- =========================
        Amazon Top Deals
    ============================== -->
	<section id="recent-product" class="recent-pro-2">
    	<div class="container-fluid custom-width">
    		<div class="row">
    			<div class="col-md-12 text-center">
    				<h2 class="recent-product-title">Find what you like</h2>
    			</div>

				<div class="col-md-12">
					<div class="row">
						<div class="col-12 col-md-12 col-lg-4 col-xl-2">
							<div class="wd-amazon-product">
								<!-- <h4>Amazon Top Deals</h4> -->
							</div>
						</div>
						<div class="col-md-12 col-lg-8">
							<ul class="nav nav-tabs wd-amazon-product-tabs " id="myTab-recent" role="tablist">
								@foreach($parent_categories as $key=>$category)
								<li class="nav-item">
									<a class="nav-link @if($key == 0) active @endif" id="Tapacti_{{$category->id}}-tab" data-toggle="tab" href="#Tapacti_{{$category->id}}" role="tab" aria-controls="Beauty" aria-expanded="true">{{$category->name}}</a>
								</li>
								@endforeach
							</ul>
						</div>
					</div>
					<div class="tab-content" id="myTabContent-recent">
						@foreach($parent_categories as $key=>$child)
						<div class="tab-pane fade show @if($key == 0) active @endif" id="Tapacti_{{$child->id}}" role="tabpanel" aria-labelledby="Beauty-tab">
							<div class="wd-amazon-product tab-inner-title">
								<h4>{{$child->name}}</h4>
							</div>
							<div class="row">
								@foreach($child->subcategory as $bachha)
								
				    			<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
				    				<div class="recent-product-box wow fadeInUp animated" data-wow-delay="0ms">
				    					<div class="recent-product-img">
											<div class="product-img" style="overflow: hidden;">												
												<div class="imgFill2" style="background-image:url('{{url("uploads/images/category")}}/{{$bachha->image}}');"></div>
												<!-- <img src="" class="img-fluid" alt="recent-product img"> -->
												<div class="recent-product-overlay text-center">
													<div class="compare-btn">
														<button type="button" class="btn btn-primary btn-sm third-home-quick-viwe" data-toggle="modal" data-target=".bd-example-modal-lg-product-1"><i class="fa fa-eye" aria-hidden="true"></i> Quick view</button>
													</div>
													<div class='countdown' data-date="2018-12-31"></div>
												</div>
											</div>

				    						@if($bachha->id == '1')
				    						<span class="badge badge-secondary wd-badge text-uppercase">New</span>
				    						@endif
				    						<div class="recent-product-info">
					    						<div class="d-flex justify-content-between">
					    							<div class="recent-price">
					    								{{$child->name}}
					    							</div>
					    						</div>
					    						<div class="recente-product-content">
													<a href="{{url('category')}}/{{$bachha->id}}">See Now <i class="fa fa-chevron-right"></i></a>
					    						</div>
				    						</div>
				    					</div>
				    				</div>
				    			</div>
				    			@endforeach
				    			
							</div>

						</div>
						@endforeach
					</div>
				</div>
    		</div>
    	</div>
    </section>


    <!-- =========================
        Review Section
    ============================== -->
    <section id="review">
    	<div class="container-fluid custom-width">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="section-title-center text-center">
    					<h2 class="title bg-white">Best Products</h2>
    				</div>
    			</div>
    			<div class="col-md-12 col-lg-6">
					<div id="product-review" class="owl-carousel owl-theme product-review wow fadeInLeft animated" data-wow-delay="0ms">
					    @foreach($articles as $article)
					    <div class="item wd-item">
					    	<div class="imgFill3" style="background-image:url('{{url("uploads/images/article")}}/{{$article->image}}')"></div>
					    	
							<figure class="figure w-100">
								<figcaption class="figure-caption">
									<div class="row">
										<div class="col-md-9 p0 row">
											
											<div class="col-8 col-md-12 ">
												<a href="{{url('article')}}/{{$article->id}}" class="author-name">{{$article->title}}</a>
												<!-- <span class="sub-title">Ceo at <a href="{{url('article')}}/{{$article->id}}">ThemeIM</a></span> -->
											</div>
										</div>
										<div class="col-md-3 text-right client-rating">
												<div class="rating inline">
													<!-- <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
													<a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
													<a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
													<a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
													<a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a> -->
													Posted On
												</div>
												<h6 class="inline review-point">{{date_format($article->created_at	,'D M Y')}}</h6>
											
										</div>
										<div class="col-md-12 p0 description">
											<p>{{$article->description}}</p>
										</div>
									</div>
								</figcaption>
							</figure>
						</div>
						@endforeach
					</div>
    			</div>
    			<div class="col-md-12 col-lg-6">
				    <!-- =========================
				        Youtube Video Section
				    ============================== -->
					<div data-video="cBNBnpmyGM0" id="video" class="wow fadeInRight animated" data-wow-delay="0ms">
					  <img class="figure-img img-fluid" src="{{url('affiliate/img/slider-img/1.png')}}" alt="Use your own screenshot.">
					</div>
    			</div>
    		</div>
    	</div>
    </section>
    <!-- =========================
        Trending Section
    ============================== -->
    <section id="trending">
    	<div class="container-fluid custom-width">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="section-title-center text-center">
    					<h2 class="title">Trending Now</h2>
    				</div>
    			</div>
				<div id="product-trending-two" class="owl-carousel owl-theme">
					@foreach($products as $product)
	    			<div class="col-md-12">
						<figure class="figure product-box">
							<div class="product-box-img">
                                <a href="product-details.html">
                                    <img src="{{url('uploads/images/product')}}/{{$product->product_img}}" class="figure-img img-fluid" alt="Product Img">
                                </a>
							</div>
							<figcaption class="figure-caption text-center">
								<!-- <span class="badge badge-secondary wd-badge text-uppercase">New</span>
								<div class="wishlist">
									<i class="fa fa-heart" aria-hidden="true"></i>
								</div> -->
								<div class="price-start">
									<p><strong class="active-color">{{$product->heading}}</strong></p>
								</div>
								<div class="content-excerpt">
									<p>{{$product->description}}</p>
								</div>
								<div class="rating">
									<a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
									<a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
									<a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
									<a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
									<a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
								</div>
								<div class="compare-btn">
									<a class="btn btn-primary btn-sm" href="{{$product->affiliate_link}}">Buy Now</a>
								</div>
							</figcaption>
						</figure>
	    			</div>
	    			@endforeach
				</div>
    		</div>
    	</div>
    </section>

	<div class="product-view-modal modal fade bd-example-modal-lg-product-1" tabindex="-1" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">

		    <!-- ====================================
		        Product Details Gallery Section
		    ========================================= -->
			<div class="row">
				<div class="product-gallery col-12 col-md-12 col-lg-6">
				    <!-- ====================================
				        Single Product Gallery Section
				    ========================================= -->
				    <div class="row">
						<div class="col-md-12 product-slier-details">
							<div id="product-view" class="product-view owl-carousel owl-theme">
							    <div class="item">
							    	<img src="{{url('img/product-img/product-view-img-1.jpg')}}" class="img-fluid" alt="Product Img">
							    </div>
							    <div class="item">
							    	<img src="{{url('img/product-img/product-view-img-2.jpg')}}" class="img-fluid" alt="Product Img">
							    </div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-6 col-12 col-md-12 col-lg-6">
					<div class="product-details-gallery">
						<div class="list-group">
							<h4 class="list-group-item-heading product-title">
								Vigo SP111-31N-P2GH Spin 1
							</h4>
							<div class="media">
								<div class="media-left media-middle">
									<div class="rating">
										<a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
									</div>
								</div>
								<div class="media-body">
									<p>3.7/5 <span class="product-ratings-text"> -1747 Ratings</span></p>
								</div>
							</div>
						</div>
						<div class="list-group content-list">
							<p><i class="fa fa-dot-circle-o" aria-hidden="true"></i> 100% Original product</p>
							<p><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Manufacturer Warranty</p>
						</div>
					</div>
					<div class="product-store row">
						<div class="col-12 product-store-box">
							<div class="row">
								<div class="col-3 p0 store-border-img">
									<img src="{{url('img/product-store/product-store-img1.jpg')}}" class="figure-img img-fluid" alt="Product Img">
								</div>
								<div class="col-5 store-border-price text-center">
									<div class="price">
										<p>$234</p>
									</div>
								</div>
								<div class="col-4 store-border-button">
									<a href="#" class="btn btn-primary wd-shop-btn pull-right">
										Buy it now
									</a>
								</div>
							</div>
						</div>
						<div class="col-12 product-store-box">
							<div class="row">
								<div class="col-3 p0 store-border-img">
									<img src="{{url('img/product-store/product-store-img2.jpg')}}" class="figure-img img-fluid" alt="Product Img">
								</div>
								<div class="col-5 store-border-price text-center">
									<div class="price">
										<p>$535</p>
									</div>
								</div>
								<div class="col-4 store-border-button">
									<a href="#" class="btn btn-primary wd-shop-btn pull-right red-bg">
										Buy it now
									</a>
								</div>
							</div>
						</div>
						<div class="col-12 product-store-box">
							<div class="row">
								<div class="col-3 p0 store-border-img">
									<img src="{{url('img/product-store/product-store-img3.jpg')}}" class="figure-img img-fluid" alt="Product Img">
								</div>
								<div class="col-5 store-border-price">
									<span class="badge badge-secondary wd-badge text-uppercase">Best</span>
									<div class="price text-center">
										<p>$198</p>
									</div>
								</div>
								<div class="col-4 store-border-button">
									<a href="#" class="btn btn-primary wd-shop-btn pull-right orange-bg">
										Buy it now
									</a>
								</div>
							</div>
						</div>
						<div class="col-12 product-store-box">
							<div class="row">
								<div class="col-3 p0 store-border-img">
									<img src="{{url('img/product-store/product-store-img4.jpg')}}" class="figure-img img-fluid" alt="Product Img">
								</div>
								<div class="col-5 store-border-price text-center">
									<div class="price">
										<p>$634</p>
									</div>
								</div>
								<div class="col-4 store-border-button">
									<a href="#" class="btn btn-primary wd-shop-btn pull-right green-bg">
										Buy it now
									</a>
								</div>
							</div>
						</div>
						<div class="col-12 product-store-box">
							<div class="row">
								<div class="col-3 p0 store-border-img">
									<img src="{{url('img/product-store/product-store-img5.jpg')}}" class="figure-img img-fluid" alt="Product Img">
								</div>
								<div class="col-5 store-border-price text-center">
									<div class="price">
										<p>$234</p>
									</div>
								</div>
								<div class="col-4 store-border-button">
									<a href="#" class="btn btn-primary wd-shop-btn pull-right blue-bg">
										Buy it now
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>



			</div>
		</div>
	</div>


    <!-- =========================
        Blog Section
    ============================== -->
    <!-- <section id="blog">
    	<div class="container-fluid custom-width">
    		<div class="row">
    			<div class="col-12">
    				<div class="section-title-center text-center">
    					<h2 class="title">Weekly Top News</h2>
    				</div>
    			</div>
    			<div class="col-12 col-md-6 col-lg-6 col-xl-3">
					<figure class="figure blog-box wow fadeInUp animated" data-wow-delay="300ms">
						<img src="{{url('img/blog/blog-img-v2-1.jpg')}}" class="figure-img img-fluid" alt="blog-img">
						<figcaption class="figure-caption">
						<div class="mata-info">
							<ul>
								<li>
									<a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> 115</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-commenting" aria-hidden="true"></i> 59</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-share-alt-square" aria-hidden="true"></i> 20</a>
								</li>
							</ul>
						</div>
							<a class="blog-title" href="single-blog-with.html">
								Money making theme like a galaxy of inovation
							</a>
							<div class="blog-content">
								With precision crafted metal frame design, re fined performance and Windows 10 built in, it’s the smart choice for your business.
							</div>
							<div class="raed-more">
								<a class="btn btn-link" href="single-blog-with.html">
									READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i>
								</a>
							</div>
						</figcaption>
					</figure>
    			</div>
    			<div class="col-12 col-md-6 col-lg-6 col-xl-3">
					<figure class="figure blog-box wow fadeInUp animated" data-wow-delay="600ms">
						<img src="{{url('img/blog/blog-img-v2-2.jpg')}}" class="figure-img img-fluid" alt="blog-img">
						<figcaption class="figure-caption">
						<div class="mata-info">
							<ul>
								<li>
									<a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> 115</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-commenting" aria-hidden="true"></i> 59</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-share-alt-square" aria-hidden="true"></i> 20</a>
								</li>
							</ul>
						</div>
							<a class="blog-title" href="single-blog-with.html">
								Hawlet - Yoga discount black friday offer
							</a>
							<div class="blog-content">
								With precision crafted metal frame design, re fined performance and Windows 10 built in, it’s the smart choice for your business.
							</div>
							<div class="raed-more">
								<a class="btn btn-link" href="single-blog-with.html">
									READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i>
								</a>
							</div>
						</figcaption>
					</figure>
    			</div>
    			<div class="col-12 col-md-6 col-lg-6 col-xl-3">
					<figure class="figure blog-box wow fadeInUp animated" data-wow-delay="900ms">
						<img src="{{url('img/blog/blog-img-v2-3.jpg')}}" class="figure-img img-fluid" alt="blog-img">
						<figcaption class="figure-caption">
						<div class="mata-info">
							<ul>
								<li>
									<a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> 115</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-commenting" aria-hidden="true"></i> 59</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-share-alt-square" aria-hidden="true"></i> 20</a>
								</li>
							</ul>
						</div>
							<a class="blog-title" href="single-blog-with.html">
								Galaxy product advance booking time review
							</a>
							<div class="blog-content">
								With precision crafted metal frame design, re fined performance and Windows 10 built in, it’s the smart choice for your business.
							</div>
							<div class="raed-more">
								<a class="btn btn-link" href="single-blog-with.html">
									READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i>
								</a>
							</div>
						</figcaption>
					</figure>
    			</div>
    			<div class="col-12 col-md-6 col-lg-6 col-xl-3">
					<figure class="figure blog-box wow fadeInUp animated" data-wow-delay="1200ms">
						<img src="{{url('img/blog/blog-img-v2-4.jpg')}}" class="figure-img img-fluid" alt="blog-img">
						<figcaption class="figure-caption">
						<div class="mata-info">
							<ul>
								<li>
									<a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> 115</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-commenting" aria-hidden="true"></i> 59</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-share-alt-square" aria-hidden="true"></i> 20</a>
								</li>
							</ul>
						</div>
							<a class="blog-title" href="single-blog-with.html">
								Product Comparison and Review Theme 
							</a>
							<div class="blog-content">
								With precision crafted metal frame design, re fined performance and Windows 10 built in, it’s the smart choice for your business.
							</div>
							<div class="raed-more">
								<a class="btn btn-link" href="single-blog-with.html">
									READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i>
								</a>
							</div>
						</figcaption>
					</figure>
    			</div>
    		</div>
    	</div>
    </section> -->




    <!-- =========================
        Subscribe Section
    ============================== -->
    <section id="subscribe">
    	<div class="container">
    		<!-- <div class="col-md-1"></div> -->
            <div class="row subscribe-body">
                <div class="col-12 col-md-12 col-lg-5">
                    <h4 class="subscribe-title">Sign up for the latest updates</h4>
                </div>
                <div class="col-12 col-md-9 col-lg-5">
                    <div class="input-group">
                      <input type="text" class="form-control" aria-label="Text input with segmented button dropdown">
                    </div>
                </div>
                <div class="col-12 col-md-3 col-lg-2">
                    <button type="button" class="btn btn-primary wd-shop-btn subscribe-btn">
                        Subscribe
                    </button>
                </div>
            </div>
    	</div>
    </section>

@endsection