@extends('layouts.user_layouts')
@section('title','My Invoice')
@section('content')
	<div class="page-content-wrapper">
		<div class="page-content">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="content-panel">
						<div class="user-dashbrd-heading">My Invoices</div>
					</div>
					<div class="tab-55">
						 <table class="table table-hover">
						    <thead>
						      <tr>
						        <th class="text-left">Product Image</th>
						        <!-- <th class="text-center">Product Name</th> -->
						        <th class="text-center">Product ID</th>
						        <th class="text-center">Highest Bid </th>
						        <th>Status</th>
						        <th class="text-center">Date</th>
						        <th class="text-center">Action</th>
						      </tr>
						    </thead>
						    <tbody>
							    <tr>
							        <td class="text-left">
							        	<div class="img-won">
							        		<img src="{{ url('public/imgs/5.png') }}">
							        	</div>
							        </td>
							      <!--   <td class="text-center">Lorem Ipsum</td> -->
							        <td class="text-center">5895565</td>
							        <td class="text-center"><i class="fa fa-gavel"></i> €8.00</td>
							       <td class="text-center"><span class="sp-unpaid">Unpaid</span></td>
							        <td class="text-center">28-June-2020</td>
							        <td class="text-center">
							        	<a href="#" class="btn btn-primary">
							        		View Invoice
							        	</a>&nbsp;&nbsp;
							        	<a href="#" class="btn btn-success">
							        		Pay
							        	</a>
							        </td>
							    </tr>
							   
							    
						    </tbody>
						  </table>
					</div>
				</div>
			</div>
		</div>
	</div>
	
@stop

@section('scripts')
<script type="text/javascript">
	$('#invoice-side').addClass("active");
</script>

@stop