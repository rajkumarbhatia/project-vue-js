@extends('layouts.user_layouts')
@section('title','Change Password')
@section('content')
	
<div class="page-content-wrapper">
	<div class="page-content">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="content-panel">
					<div class="user-dashbrd-heading"> Change Password</div>
					<div class="user-dashbrd-body">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="">
								<div class=" form-group col-md-6 col-sm-12 col-xs-12">
									<form action="{{ url('change-password-dashboard') }}" class="change-ps" method="post">
										<div class="user-dashbrd-body-content">
											<div class=" border-cls form-group col-md-12 col-sm-12 col-xs-12 ">
												<div class="">
													<label class="inline-label col-md-4 col-sm-12 col-xs-12 "> Old Password: </label>
											    	<div class="col-md-8 col-sm-12 col-xs-12">
											    		<input type="password" required="" name="old_password" placeholder="" class="form-control txtfield" >
											    	</div>
												</div>
							    			</div>
							    			<div class=" border-cls form-group col-md-12 col-sm-12 col-xs-12 ">
												<div class="">
													<label class="inline-label col-md-4 col-sm-12 col-xs-12 "> New Password: </label>
											    	<div class="col-md-8 col-sm-12 col-xs-12">
											    		<input type="password" name="password" placeholder="" class="form-control txtfield" >
											    	</div>
												</div>
							    			</div>
							    			<div class=" border-cls form-group col-md-12 col-sm-12 col-xs-12 ">
												<div class="">
													<label class="inline-label col-md-4 col-sm-12 col-xs-12 "> Confirm Password: </label>
											    	<div class="col-md-8 col-sm-12 col-xs-12">
											    		<input type="password" name="confirm_password" placeholder="" class="form-control txtfield" >
											    	</div>
												</div>
							    			</div>
							    			@csrf
							    			
							    			<div class=" border-cls form-group col-md-12 col-sm-12 col-xs-12 text-right">
												<div class="">
													<div class=" col-md-offset-3 col-md-9 col-sm-12 col-xs-12">
											    		<button type="submit" class=" btn btn-lg cstm-btn">Submit</button>
											    		<a href="" class=" btn btn-lg cstm-btn"> Cancel</a>
											    	</div>
												</div>
							    			</div>
							    		</div>
							    	</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@stop

@section('scripts')
<script type="text/javascript">
	$('#dash-side').addClass("active");
</script>

<script type="text/javascript">
	$(document).ready(function() {
	    $('.change-ps').bootstrapValidator({
	        fields: {	            
	            password: {
	                validators: {
	                    notEmpty: {
	                        message: 'The password is required and cannot be empty'
	                    },	                   
	                }
	            },
	            confirm_password:{
	            	validators: {
	                    notEmpty: {
	                        message: 'The confirm password is required and cannot be empty'
	                    },	                   
	                    identical: {
	                        field: 'password',
	                        message: 'password and confirm password are not matching'
	                    },
	                }
	            }
	        }
	    })
	});
</script>
@stop