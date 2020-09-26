@extends('layouts.home_layouts')
@section('title','Home')
@section('content')
<div class="page-wrap">			
	@include('common.place_order')
	<section class="promotion-slider">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-9 col-sm-9 col-xs-12">
					<div class="wrap-div grey-border">
						<div class="slider-for">
							<div class="item">
								<img src="{{ url('public/imgs/2.jpg') }}">
							</div>
							<div class="item">
								<img src="{{ url('public/imgs/3.jpg') }}">
							</div>
							<div class="item">
								<img src="{{ url('public/imgs/4.jpg') }}">
							</div>
						</div>
						<div class="slider-nav">
							<div class="slider-thumbnail-img">
	                           	Upto 70% Off
	                        </div>
	                        <div class="slider-thumbnail-img">
	                   			Offer - TV Upto 70% Off
	                        </div>
	                        <div class="slider-thumbnail-img">
	                           	Starting 150
	                        </div>
	                        
						</div>
						
					</div>
				</div>

				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="wrap-div sider-div">
						<img src="{{ url('public/imgs/5.png') }}" class="img-responsive" />
					</div>
				</div>
			</div>
		</div>

	</section>

	<section class="deal-sec">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="deal-img effect-v4">
						<a href="javascript:void(0)">
							<img src="{{ url('public/imgs/b1.png') }}" class="img-responsive" />
						</a>
					</div>
				</div>

				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="deal-img effect-v4">
						<a href="javascript:void(0)">
							<img src="{{ url('public/imgs/b2.jpg') }}" class="img-responsive" />
						</a>
					</div>
				</div>

				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="deal-img effect-v4">
						<a href="javascript:void(0)">
							<img src="{{ url('public/imgs/b3.jpg') }}" class="img-responsive" />
						</a>
					</div>
				</div>
			</div>

		</div>
	</section>

	<section class="product-sec">
		<div class="container">
			<div class="heading-section">
				<h3>Active auctions</h3>
			</div>

			<div class="products-slider">
				<div class="item">
					<div class="product-container">
						<div class="products-img">
							<img src="{{ url('public/imgs/product-2.png') }}" class="img-responsive" />
						</div>
						<div class="product-meta">	
							<div class="clearfix name-price">
								<h4 class="product-name">
									<a href="javascript:void(0)" title="Congue metus">Congue metus</a>
								</h4><!-- /.product-product -->			
								<div class="product-price">
									<!-- <span class="amout">
										<del class="sale-price"><span class="money" data-currency-usd="$300.00" data-currency="USD">$300.00</span></del> 
										<span>
										<span class="money" data-currency-usd="$250.00" data-currency="USD">$250.00</span></span>
									</span> -->
								</div><!-- /.product-price -->
							</div>			
							<form method="post" action="" class="add-to-cart ">
								<input type="hidden" name="id">
								<button type="submit" name="add" class="btn cart is-added pull-left"><i class="fa fa-gavel"></i><span> €77,000.00</span>
								</button>
								<button type="submit" name="add" class="btn cart is-added pull-right"><i class="fa fa-clock-o"></i><span> 13d 0h</span>
								</button>
							</form>
							<!-- <span class="spr-badge">
								<span class="spr-starrating">
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
								</span>
							</span> -->

						</div>
					</div>

				</div>

				<div class="item">
					<div class="product-container">
						<div class="products-img">
							<img src="{{ url('public/imgs/product-3.png') }}" class="img-responsive" />
						</div>
						<div class="product-meta">	
							<div class="clearfix name-price">
								<h4 class="product-name">
									<a href="javascript:void(0)" title="Congue metus">Congue metus</a>
								</h4><!-- /.product-product -->			
								<div class="product-price">
									<!-- <span class="amout">
										<del class="sale-price"><span class="money" data-currency-usd="$300.00" data-currency="USD">$300.00</span></del> 
										<span>
										<span class="money" data-currency-usd="$250.00" data-currency="USD">$250.00</span></span>
									</span> -->
								</div><!-- /.product-price -->
							</div>			
							<form method="post" action="" class="add-to-cart ">
								<input type="hidden" name="id">
								<button type="submit" name="add" class="btn cart is-added pull-left"><i class="fa fa-gavel"></i><span> €77,000.00</span>
								</button>
								<button type="submit" name="add" class="btn cart is-added pull-right"><i class="fa fa-clock-o"></i><span> 13d 0h</span>
								</button>
							</form>
							<!-- <span class="spr-badge">
								<span class="spr-starrating">
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
								</span>
							</span> -->

						</div>
					</div>

				</div>

				<div class="item">
					<div class="product-container">
						<div class="products-img">
							<img src="{{ url('public/imgs/product-4.png' )}}" class="img-responsive" />
						</div>
						<div class="product-meta">	
							<div class="clearfix name-price">
								<h4 class="product-name">
									<a href="javascript:void(0)" title="Congue metus">Congue metus</a>
								</h4><!-- /.product-product -->			
								<div class="product-price">
								<!-- 	<span class="amout">
										<del class="sale-price"><span class="money" data-currency-usd="$300.00" data-currency="USD">$300.00</span></del> 
										<span>
										<span class="money" data-currency-usd="$250.00" data-currency="USD">$250.00</span></span>
									</span> -->
								</div><!-- /.product-price -->
							</div>			
						<form method="post" action="" class="add-to-cart ">
								<input type="hidden" name="id">
								<button type="submit" name="add" class="btn cart is-added pull-left"><i class="fa fa-gavel"></i><span> €77,000.00</span>
								</button>
								<button type="submit" name="add" class="btn cart is-added pull-right"><i class="fa fa-clock-o"></i><span> 13d 0h</span>
								</button>
							</form>
							<!-- <span class="spr-badge">
								<span class="spr-starrating">
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
								</span>
							</span> -->

						</div>
					</div>

				</div>

				<div class="item">
					<div class="product-container">
						<div class="products-img">
							<img src="{{ url('public/imgs/product-5.png') }}" class="img-responsive" />
						</div>
						<div class="product-meta">	
							<div class="clearfix name-price">
								<h4 class="product-name">
									<a href="javascript:void(0)" title="Congue metus">Congue metus</a>
								</h4><!-- /.product-product -->			
								<div class="product-price">
									<!-- <span class="amout">
										<del class="sale-price"><span class="money" data-currency-usd="$300.00" data-currency="USD">$300.00</span></del> 
										<span>
										<span class="money" data-currency-usd="$250.00" data-currency="USD">$250.00</span></span>
									</span> -->
								</div>
								<!-- /.product-price -->
							</div>			
							<form method="post" action="" class="add-to-cart ">
								<input type="hidden" name="id">
								<button type="submit" name="add" class="btn cart is-added pull-left"><i class="fa fa-gavel"></i><span> €77,000.00</span>
								</button>
								<button type="submit" name="add" class="btn cart is-added pull-right"><i class="fa fa-clock-o"></i><span> 13d 0h</span>
								</button>
							</form>
							<!-- <span class="spr-badge">
								<span class="spr-starrating">
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
								</span>
							</span>
										-->
						</div>
					</div>

				</div>

				<div class="item">
					<div class="product-container">
							<div class="products-img">
								<img src="{{ url('public/imgs/product-6.png') }}" class="img-responsive" />
							</div>
							<div class="product-meta">	
								<div class="clearfix name-price">
									<h4 class="product-name">
										<a href="javascript:void(0)" title="Congue metus">Congue metus</a>
									</h4><!-- /.product-product -->			
									<div class="product-price">
										<!-- <span class="amout">
											<del class="sale-price"><span class="money" data-currency-usd="$300.00" data-currency="USD">$300.00</span></del> 
											<span>
											<span class="money" data-currency-usd="$250.00" data-currency="USD">$250.00</span></span>
										</span> -->
									</div><!-- /.product-price -->
								</div>			
								<form method="post" action="" class="add-to-cart ">
								<input type="hidden" name="id">
								<button type="submit" name="add" class="btn cart is-added pull-left"><i class="fa fa-gavel"></i><span> €77,000.00</span>
								</button>
								<button type="submit" name="add" class="btn cart is-added pull-right"><i class="fa fa-clock-o"></i><span> 13d 0h</span>
								</button>
							</form>
								<!-- <span class="spr-badge">
									<span class="spr-starrating">
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
									</span>
								</span> -->

							</div>
					</div>

				</div>	
			</div>

		</div>

	</section>
	<section class="place-order">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3 text-center">
					<img src="{{ url('public/imgs/order.svg')}} "><br>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.	</p>
					<a href="{{ url('add/order') }}" class="btn btn-order">Place Your Order</a>
				</div>
				
			</div>
		</div>
	</section>
	<section class="product-sec">
		<div class="container">
			<div class="heading-section">
				<h3> Popular auctions </h3>
			</div>

			<div class="products-slider">
					<div class="item">
					<div class="product-container">
						<div class="products-img">
							<img src="{{ url('public/imgs/product-2.png') }}" class="img-responsive" />
						</div>
						<div class="product-meta">	
							<div class="clearfix name-price">
								<h4 class="product-name">
									<a href="javascript:void(0)" title="Congue metus">Congue metus</a>
								</h4><!-- /.product-product -->			
								<div class="product-price">
									<!-- <span class="amout">
										<del class="sale-price"><span class="money" data-currency-usd="$300.00" data-currency="USD">$300.00</span></del> 
										<span>
										<span class="money" data-currency-usd="$250.00" data-currency="USD">$250.00</span></span>
									</span> -->
								</div><!-- /.product-price -->
							</div>			
							<form method="post" action="" class="add-to-cart ">
								<input type="hidden" name="id">
								<button type="submit" name="add" class="btn cart is-added pull-left"><i class="fa fa-gavel"></i><span> €77,000.00</span>
								</button>
								<button type="submit" name="add" class="btn cart is-added pull-right"><i class="fa fa-clock-o"></i><span> 13d 0h</span>
								</button>
							</form>
							<!-- <span class="spr-badge">
								<span class="spr-starrating">
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
								</span>
							</span> -->

						</div>
					</div>

				</div>

				<div class="item">
					<div class="product-container">
						<div class="products-img">
							<img src="{{ url('public/imgs/product-3.png' )}}" class="img-responsive" />
						</div>
						<div class="product-meta">	
							<div class="clearfix name-price">
								<h4 class="product-name">
									<a href="javascript:void(0)" title="Congue metus">Congue metus</a>
								</h4><!-- /.product-product -->			
								<div class="product-price">
									<!-- <span class="amout">
										<del class="sale-price"><span class="money" data-currency-usd="$300.00" data-currency="USD">$300.00</span></del> 
										<span>
										<span class="money" data-currency-usd="$250.00" data-currency="USD">$250.00</span></span>
									</span> -->
								</div><!-- /.product-price -->
							</div>			
							<form method="post" action="" class="add-to-cart ">
								<input type="hidden" name="id">
								<button type="submit" name="add" class="btn cart is-added pull-left"><i class="fa fa-gavel"></i><span> €77,000.00</span>
								</button>
								<button type="submit" name="add" class="btn cart is-added pull-right"><i class="fa fa-clock-o"></i><span> 13d 0h</span>
								</button>
							</form>
							<!-- <span class="spr-badge">
								<span class="spr-starrating">
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
								</span>
							</span> -->

						</div>
					</div>

				</div>

				<div class="item">
					<div class="product-container">
						<div class="products-img">
							<img src="{{ url('public/imgs/product-4.png' )}}" class="img-responsive" />
						</div>
						<div class="product-meta">	
							<div class="clearfix name-price">
								<h4 class="product-name">
									<a href="javascript:void(0)" title="Congue metus">Congue metus</a>
								</h4><!-- /.product-product -->			
								<div class="product-price">
								<!-- 	<span class="amout">
										<del class="sale-price"><span class="money" data-currency-usd="$300.00" data-currency="USD">$300.00</span></del> 
										<span>
										<span class="money" data-currency-usd="$250.00" data-currency="USD">$250.00</span></span>
									</span> -->
								</div><!-- /.product-price -->
							</div>			
						<form method="post" action="" class="add-to-cart ">
								<input type="hidden" name="id">
								<button type="submit" name="add" class="btn cart is-added pull-left"><i class="fa fa-gavel"></i><span> €77,000.00</span>
								</button>
								<button type="submit" name="add" class="btn cart is-added pull-right"><i class="fa fa-clock-o"></i><span> 13d 0h</span>
								</button>
							</form>
							<!-- <span class="spr-badge">
								<span class="spr-starrating">
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
								</span>
							</span> -->

						</div>
					</div>

				</div>

				<div class="item">
					<div class="product-container">
						<div class="products-img">
							<img src="{{ url('public/imgs/product-5.png') }}" class="img-responsive" />
						</div>
						<div class="product-meta">	
							<div class="clearfix name-price">
								<h4 class="product-name">
									<a href="javascript:void(0)" title="Congue metus">Congue metus</a>
								</h4><!-- /.product-product -->			
								<div class="product-price">
									<!-- <span class="amout">
										<del class="sale-price"><span class="money" data-currency-usd="$300.00" data-currency="USD">$300.00</span></del> 
										<span>
										<span class="money" data-currency-usd="$250.00" data-currency="USD">$250.00</span></span>
									</span> -->
								</div>
								<!-- /.product-price -->
							</div>			
							<form method="post" action="" class="add-to-cart ">
								<input type="hidden" name="id">
								<button type="submit" name="add" class="btn cart is-added pull-left"><i class="fa fa-gavel"></i><span> €77,000.00</span>
								</button>
								<button type="submit" name="add" class="btn cart is-added pull-right"><i class="fa fa-clock-o"></i><span> 13d 0h</span>
								</button>
							</form>
							<!-- <span class="spr-badge">
								<span class="spr-starrating">
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
								</span>
							</span>
										-->
						</div>
					</div>

				</div>

				<div class="item">
					<div class="product-container">
							<div class="products-img">
								<img src="{{ url('public/imgs/product-6.png' )}}" class="img-responsive" />
							</div>
							<div class="product-meta">	
								<div class="clearfix name-price">
									<h4 class="product-name">
										<a href="javascript:void(0)" title="Congue metus">Congue metus</a>
									</h4><!-- /.product-product -->			
									<div class="product-price">
										<!-- <span class="amout">
											<del class="sale-price"><span class="money" data-currency-usd="$300.00" data-currency="USD">$300.00</span></del> 
											<span>
											<span class="money" data-currency-usd="$250.00" data-currency="USD">$250.00</span></span>
										</span> -->
									</div><!-- /.product-price -->
								</div>			
								<form method="post" action="" class="add-to-cart ">
								<input type="hidden" name="id">
								<button type="submit" name="add" class="btn cart is-added pull-left"><i class="fa fa-gavel"></i><span> €77,000.00</span>
								</button>
								<button type="submit" name="add" class="btn cart is-added pull-right"><i class="fa fa-clock-o"></i><span> 13d 0h</span>
								</button>
							</form>
								<!-- <span class="spr-badge">
									<span class="spr-starrating">
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
									</span>
								</span> -->

							</div>
					</div>

				</div>
			</div>

		</div>

	</section>

	<section class="download-sec">
		<div class="container">
			<div class="download-panel">
				<h2> How does it work?</h2>
			</div>
		</div>
		<div class="container how-work">
			<div class="row">
			<div class="col-lg-4">
				<div class="text-center how-hd">
					<img src="{{ url('public/imgs/activation.svg') }}" class="img-responsive">
					<h3>Register</h3>
					<h4>Create an account for free</h4>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="text-center how-hd">
					<img src="{{ url('public/imgs/law.svg') }}" class="img-responsive">
					<h3>Bid</h3>
					<h4>Make the highest bid on your favorite lots</h4>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="text-center how-hd">
					<img src="{{ url('public/imgs/prize.svg') }}" class="img-responsive">
					<h3>Win!</h3>
					<h4>Enjoy your new acquisition!</h4>
				</div>
			</div>
		</div>
		</div>
	</section>

</div>
@stop

@section('scripts')

@stop