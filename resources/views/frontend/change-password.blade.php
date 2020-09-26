@extends('layouts.home_layouts')
@section('title','Change Password')
@section('content')
<section class="login-sec">
	<div class="col-md-8 col-lg-offset-2 login-main">
		<div class="login-logo">
			<img src="{{ url('public/imgs/logo.png') }}">
		</div>
		<div class="col-md-12 login-main-inner">
			<h1>Change Password</h1>
			<hr class="hr-login">
			<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 login-left">
			<form action="" method="post" class="change-ps">
				@csrf
		    	<div class="form-group">
				    <label>Password</label>
				    <input type="password" class="form-control" id="email" email="" name="password" required="">
				</div>
			    <div class="form-group">
			      <label>Confirm Password</label>
			      <input type="password" class="form-control" id="pwd" name="confirm_password" required="">
			    </div>

				<br><br>
				<div class="checkbox">
						<button type="submit" class="btn btn-default login-bt pull-left">Change</button>
			    </div>			
			    		  		    
			</form></div>
		</div>
	</div>
</section>
@stop

@section('scripts')

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