@extends('layouts.home_layouts')
@section('title','Login')
@section('content')
<section class="login-sec">
	<div class="col-md-8 col-lg-offset-2 login-main">
		<div class="login-logo">
			<img src="{{ url('public/imgs/logo.png') }}">
		</div>
		<div class="col-md-12 login-main-inner">
			<h1>Login</h1>
			<hr class="hr-login">
			<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 login-left">
			<form action="" method="post" class="login">
				@csrf
		    	<div class="form-group">
				    <label>Email/Mobile Number</label>
				    <input type="text" class="form-control" id="email" name="email" required="">
				</div>
			    <div class="form-group">
			      <label>Password</label>
			      <input type="password" class="form-control" id="pwd" name="password" required="">
			    </div>


				<div class="form-group">
				  	<label class="pull-left"><input type="checkbox" name="remember" class="check">&nbsp;&nbsp;Remember me</label>
				  	<label class="pull-right"><a href="#" data-toggle="modal" data-target="#myModal">Forgot Password?</a></label>
				  	
				</div>
				<br><br>
				<div class="checkbox">
						<button type="submit" class="btn btn-default login-bt pull-left">Login</button>
			    </div>			
			    		  		    
			</form></div>				
			<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 login-right">
				<div class="form-group text-center">
				    <p align="center">Don't have an account yet?</p>
				    
				    <h4>Create an account for free and start bidding</h4>
				    <br>
				    <a href="{{ url('/signup') }}" ><button type="submit" class="btn-block btn btn-default login-bt pull-left">Signup</button></a>
				</div>
					
			</div>
		
		</div>
	</div>	
	<div class="modal fade" id="myModal" role="dialog">
	    <div class="modal-dialog">
	      	<div class="modal-content">
		        <div class="modal-header">
	          		<button type="button" class="close" data-dismiss="modal">×</button>
	          		<h4 align="center" class="modal-title">Forgot Password</h4>
	        	</div>
	        	<form method="post" class="forgot" action="{{ url('forgot-password') }}">
	        		@csrf
		        	<div class="modal-body">
	        			<div class="form-group">
					    	<label>Email Id</label>
					    	<input type="email" class="form-control" id="email"  name="email" required="">
						</div>
		        		
			          			          		
		        	</div>
		        	<div class="modal-footer">
		        		<div class="checkbox checkfor">
							<a href="#"><button type="button" class="btn btn-default login-bt pull-left" data-dismiss="modal">Cancel</button></a>
							<a href="#"><button type="submit" class="btn btn-default login-bt pull-right">Submit</button></a>
				    	</div>	
		          		
		        	</div>
	        	</form>
	      	</div>
	    </div>
  	</div>
  	
</section>
@stop

@section('scripts')
<script type="text/javascript">
	$(document).ready(function() {
	    $('.login').bootstrapValidator({
	        /*message: 'This value is not valid',
	        feedbackIcons: {
	            valid: 'glyphicon glyphicon-ok',
	            invalid: 'glyphicon glyphicon-remove',
	            validating: 'glyphicon glyphicon-refresh'
	        },*/
	        fields: {
	            password: {
	                message: 'The username is not valid',
	                validators: {
	                    notEmpty: {
	                        message: 'The password is required and cannot be empty'
	                    },
	                }
	            },
	            email: {
	                validators: {
	                    notEmpty: {
	                        message: 'The email is required and cannot be empty'
	                    }
	                    
	                }
	            }
	        }
	    })
	});
</script>

<script type="text/javascript">
	$(document).ready(function() {
	    $('.forgot').bootstrapValidator({
	        fields: {	            
	            email: {
	                validators: {
	                    notEmpty: {
	                        message: 'The email is required and cannot be empty'
	                    },
	                    emailAddress: {
	                        message: 'The input is not a valid email address'
	                    },
	                    remote: {
                            message: 'Email not registered !',
                            url:"{{ url('check-if-email-exist') }}",
                            data:{
                            	_token : "<?php echo csrf_token() ?>"
                            },
                            type: 'POST',
                            delay: 500     // Send Ajax request every 2 seconds
                        },
	                }
	            }
	        }
	    })
	});
</script>
@stop