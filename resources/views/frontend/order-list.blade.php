@extends('layouts.user_layouts')
@section('title','Order List')
@section('content')
	
<div class="page-content-wrapper">
	<div class="page-content">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="content-panel">
					<div class="user-dashbrd-heading">Orders</div>
					<a href="{{ url('add/order') }}" class="btn login-bt"> <i class="fa fa-plus"></i> &nbsp;&nbsp;&nbsp;Add Order</a>
				</div>
				<div class="tab-55">
					 <table class="table table-hover">
					    <thead>
					      <tr>
					        <th class="text-left">Product Image</th>
					        <th class="text-center">Product Name</th>
					        <th class="text-center">Quantity</th>
					        <th class="text-center">Status</th>
					        <th class="text-right">Action</th>
					      </tr>
					    </thead>
					    <tbody>
					    	@foreach($list as $key => $value)
							    <tr>
							        <td class="text-left">
							        	<div class="img-won">
							        		@if(!$value->images)
							        			<img src="{{ url('public/imgs/5.png') }}">
							        		@else
							        			<img src="{{ url('public/imgs/order-product/'.$value->images->image) }}">
							        		@endif
							        	</div>
							        </td>
							       <td class="text-center"><span class="sp-paid">{{ $value->product_name }}</span></td>
							        <td class="text-center">{{ $value->quantity }}</td>
							       <td class="text-center"><span class="sp-paid">{{ $value->status }}</span></td>
							        
							        <td class="text-right">
							        	<a href="{{ url('admin/order/details/'.Crypt::encryptString($value->id)) }}" class="btn btn-primary login-bt">
							        		View
							        	</a>
							        </td>
							    </tr>
						    @endforeach
						   
					    </tbody>

					  </table>
					    {{ $list->links() }}
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