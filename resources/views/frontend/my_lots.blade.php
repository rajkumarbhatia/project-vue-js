@extends('layouts.user_layouts')
@section('title','My Lots')
@section('content')
	
	<div class="page-content-wrapper">
		<div class="page-content">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="content-panel">
						<div class="user-dashbrd-heading">My Lots</div>
					</div>
					<div class="tab-55">
						 <table class="table table-hover">
						    <thead>
						      <tr>
						        <th class="text-left">Product Image</th>
						        <th class="text-center">Product Name</th>
						        <th class="text-center">Product ID</th>
						        <th class="text-center">Highest Bid </th>
						        <th class="text-center">Timer</th>
						      </tr>
						    </thead>
						    <tbody>
							    <tr>
							        <td class="text-left">
							        	<div class="img-won">
							        		<img src="{{ url('public/imgs/5.png') }}">
							        	</div>
							        </td>
							        <td class="text-center">Lorem Ipsum</td>
							        <td class="text-center">5895565</td>
							        <td class="text-center"><i class="fa fa-gavel"></i> €8.00</td>
							       <td class="text-center"><i class="fa fa-clock-o"></i> &nbsp; 3:29 min</td>
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
	$('#lot-side').addClass("active");
</script>

@stop