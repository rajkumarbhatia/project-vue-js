@extends('layouts.user_layouts')
@section('title','Order Details')
@section('content')
	<div class="page-content-wrapper">
		<div class="page-content">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="content-panel">
						<div class="user-dashbrd-heading">
							Order Detail 
							<button type="submit" class="btn cstm-btn pull-right">Request to Cancel</button>
							<a href="order-list.php"  class="btn cstm-btn pull-right" style="margin-right:10px;">Back</a>
						</div>	
						<div class="user-dashbrd-body">
							<div class="form-group col-xs-12">
								<div class="">
									<div class="row">
										@foreach($details->multiple_images as $key => $value)
											<div class="col-lg-3">
												@if(!$value->image)
								        			<img class="img-responsive" src="{{ url('public/imgs/5.png') }}">
								        		@else
								        			<img class="img-responsive" src="{{ url('public/imgs/order-product/'.$value->image) }}">
								        		@endif
											</div>
								        @endforeach
										
									</div>
									<div class="col-md-6 col-sm-12 col-xs-12">
										<div class="detail-div">
											<h4>Order Detail</h4>
											<div class=" border-cls form-group col-md-12 col-sm-12 col-xs-12 ">
												<div class="">
													<label class="inline-label col-md-6 col-sm-12 col-xs-12">Product Name: </label>
											    	<p class="col-md-6 col-sm-12 col-xs-12">{{ $details->product_name }}</p>
												</div>
							    			</div>
							    			<div class=" border-cls form-group col-md-12 col-sm-12 col-xs-12 ">
												<div class="">
													<label class="inline-label col-md-6 col-sm-12 col-xs-12"> Product Sub Name: </label>
											    	<p class="col-md-6 col-sm-12 col-xs-12">{{ $details->product_sub_name }}</p>
												</div>
							    			</div>
							    			<div class=" border-cls form-group col-md-12 col-sm-12 col-xs-12 ">
												<div class="">
													<label class="inline-label col-md-6 col-sm-12 col-xs-12"> Model Number: </label>
											    	<p class="col-md-6 col-sm-12 col-xs-12">{{  $details->model_number }}</p>
												</div>
							    			</div>
							    			<div class=" border-cls form-group col-md-12 col-sm-12 col-xs-12 ">
												<div class="">
													<label class="inline-label col-md-6 col-sm-12 col-xs-12">Brand Name </label>
											    	<p class="col-md-6 col-sm-12 col-xs-12">{{ $details->brand_name }}</p>
												</div>
							    			</div>
							    			<div class=" border-cls form-group col-md-12 col-sm-12 col-xs-12 ">
												<div class="">
													<label class="inline-label col-md-6 col-sm-12 col-xs-12">Color: </label>
											    	<p class="col-md-6 col-sm-12 col-xs-12">{{ $details->color }}</p>
												</div>
							    			</div>
							    			<div class=" border-cls form-group col-md-12 col-sm-12 col-xs-12 ">
												<div class="">
													<label class="inline-label col-md-6 col-sm-12 col-xs-12">Quantity: </label>
											    	<p class="col-md-6 col-sm-12 col-xs-12">{{ $details->quantity }}</p>
												</div>
							    			</div>
										</div>
									</div>
									<div class="col-md-6 col-sm-12 col-xs-12">
										<div class="detail-div order-des">
											<h4>Order Description</h4>
											<p>{{ $details->description }}</p>
										</div>

									</div>
								</div>
							</div>

						<!-- 	<div class="table-responsive col-md-12 col-sm-12 col-xs-12">
								<table class="order-table table table-striped table-history">
									<thead>
										<tr>
											<th> Image </th>
											<th> Product Name </th>
											<th> Quantity </th>
											<th> Price </th>
											<th> Discount </th>
											<th> Total </th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<img src="imgs/shoe-4.jpg" class="img-responsive" />
											</td>
											<td> deo </td>
											<td> 1 </td>
											<td> $20 </td>
											<td> $2 </td>
											<td> $18 </td>
										</tr>

										<tr>
											<td>
												<img src="imgs/shoe-4.jpg" class="img-responsive" />
											</td>
											<td> deo </td>
											<td> 1 </td>
											<td> $20 </td>
											<td> $2 </td>
											<td> $18 </td>
										</tr>
										
										<tr>
											<td>
												<img src="imgs/shoe-4.jpg" class="img-responsive" />
											</td>
											<td> deo </td>
											<td> 1 </td>
											<td> $20 </td>
											<td> $2 </td>
											<td> $18 </td>
										</tr>
										
										<tr>
											<td> </td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td> Sub Total </td>
											<td> $33 </td>
										</tr>
										<tr>
											<td> </td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td> Shipping Charges </td>
											<td> $2 </td>
										</tr>
										<tr>
											<td> </td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td>Grand Total </td>
											<td> $35 </td>
										</tr>

									</tbody>
								</table>
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop

@section('scripts')
<script type="text/javascript">
	$('#order-side').addClass("active");
</script>
@stop