@extends('layouts.home_layouts')
@section('title','Signup')
@section('content')


<link rel="stylesheet" type="text/css" href="{{ url('public/css/otp.css') }}">
<section class="login-sec">
	<div class="col-md-8 col-lg-offset-2 login-main">
		<div class="login-logo">
			<img src="{{ url('public/imgs/logo.png' )}}">
		</div>
		<div class="col-md-12 login-main-inner">
			<div class="tabs-styled">
				<ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#home">Signup As Consumer</a></li>
					<li><a data-toggle="tab" href="#menu1">Signup As Business</a></li>
				</ul>
			</div>
			
			<div class="tab-content">
				<div id="home" class="tab-pane fade in active">
					<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
						<form class="registerForm-1" action="javascript:;">
							<div class="row">
								@csrf
								<div class="col-lg-4">
									<div class="form-group">
										<label>Username</label>
										<input type="text" class="form-control" id="name" name="username" required placeholder="username">
									</div>
								</div>


    							
								<div class="col-lg-4">
									<div class="form-group">
											<label>Password</label>
												<input type="Password" class="form-control" id="pass" name="password" required placeholder="password">
									</div>
								</div>
								<div class="col-lg-4">
									<div class="form-group">
											<label>Confirm Password</label>
												<input type="Password" class="form-control" id="pass" name="confirm_password" required placeholder="confirm password">
									</div>
								</div>
								<div class="col-lg-3">
									<label class="radio-cstm">Mr
									  <input type="radio" value="mr" checked="checked" name="title">
									  <span class="checkmark-rd"></span>
									</label>
									<label class="radio-cstm r-c-2">Ms
									  <input type="radio" value="ms" name="title">
									  <span class="checkmark-rd"></span>
									</label>
								</div>
								<div class="col-lg-3">
									<div class="form-group">
										<label>Name</label>
										<input type="text" class="form-control" id="name" name="name" required placeholder="name">
									</div>
								</div>
								<div class="col-lg-3">
									<div class="form-group">
										<label>Prefix</label>
										<input type="text" class="form-control" id="name" name="prefix" required placeholder="prefix">
									</div>
								</div>
								<div class="col-lg-3">
									<div class="form-group">
										<label>Surname</label>
										<input type="text" class="form-control" id="name" name="surname" required placeholder="surname">
									</div>
								</div>
								<div class="col-lg-2 chk-pd">
									<label class="cstm-chk ">Newsletter
										  <input type="checkbox" name="newsletter" checked="checked">
										  <span class="checkmark-chk"></span>
									</label>
								</div>
								<div class="col-lg-5">
									<div class="form-group">
										<label>Email</label>
										<input type="text" class="form-control" id="name"  name="email" required placeholder="email">
									</div>
								</div>
								<div class="col-lg-3">
									<div class="form-group">
										<label>Mobile Number</label>
										<input type="text" class="form-control" id="mobile_consumer" name="mobile_number" required placeholder="*Eg. +5299140425">
									</div>
								</div>
								<!-- <div class="col-lg-2">
									<div class="form-group">
										<label>SMS</label>
										<input type="text" class="form-control" id="name" name="sms" required placeholder="sms">
									</div>
								</div> -->
								<div class="col-lg-4">
									<div class="form-group">
										<label>Select Country</label>
										<select required="" name="country" class="form-control custom-select">
											<option value="" >Choose</option>
											@foreach($countries as $key => $value)
												<option value="{{ $value->id }}" >{{ $value->name }}</option>
											@endforeach
										</select>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="form-group">
											<label>Postal Code</label>
												<input type="text" class="form-control" id="pass" name="postal_code" required placeholder="postal code">
									</div>
							
								</div>
										<div class="col-lg-4">
									<div class="form-group">
											<label>Number</label>
												<input type="text" class="form-control" id="pass" name="number" required placeholder="number">
									</div>
								</div>
								<div class="col-lg-4">
									<div class="form-group">
											<label>Addition</label>
												<input type="text" class="form-control" id="pass" name="addition" required placeholder="addition">
									</div>
								</div>
								<div class="col-lg-4">
									<div class="form-group">
											<label>Address</label>
												<input type="text" class="form-control" id="pass" name="address" required placeholder="address">
									</div>
								</div>
								<div class="col-lg-4">
									<div class="form-group">
											<label>City</label>
												<input type="text" class="form-control" id="pass" name="city" required placeholder="city">
									</div>
								</div>
								<div class="col-lg-12" id="cons-er">
									<div class="form-group">
								<label class="pull-left"><input type="checkbox" name="terms" class="check" required>&nbsp;&nbsp;I agree to <a href="#">Terms & Conditions.</a>


									and I have taken note of the  <a href="#">Privacy Statement</a></label>
							</div>
							<br/>
							<input type="hidden" name="user_type" value="consumer">
							
								</div>
								<div class="col-lg-12">
									<div class="checkbox pull-left">
									<a id="digitPasswordbtn" href="#"><button type="submit" class="btn btn-default login-bt">Signup</button></a>
							</div>
								</div>
							</div>
						</form>
				</div>
				</div>
				<div id="menu1" class="tab-pane fade">
					<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
						<form action="javascript:;" class="registerForm-2">
							<div class="row">
								<div class="col-lg-4">
									<div class="form-group">
										<label>Username</label>
										<input type="text" class="form-control" id="name" name="username" required placeholder="username">
									</div>
								</div>
								<div class="col-lg-4">
									<div class="form-group">
											<label>Password</label>
												<input type="Password" class="form-control" id="pass" name="password" required placeholder="password">
									</div>
								</div>
								<div class="col-lg-4">
									<div class="form-group">
											<label>Confirm Password</label>
												<input type="password" class="form-control" id="pass" name="confirm_password" required placeholder="confirm password">
									</div>
								</div>
								<div class="col-lg-3">
									<label class="radio-cstm">Mr
									  <input type="radio" checked="checked" value="mr" name="title">
									  <span class="checkmark-rd"></span>
									</label>
									<label class="radio-cstm r-c-2">Ms
									  <input type="radio" value="ms" name="title">
									  <span class="checkmark-rd"></span>
									</label>
								</div>
								<div class="col-lg-3">
									<div class="form-group">
										<label>Name</label>
										<input type="text" class="form-control" id="name" name="name" required placeholder="name">
									</div>
								</div>
								<div class="col-lg-3">
									<div class="form-group">
										<label>Prefix</label>
										<input type="text" class="form-control" id="name" name="prefix" required placeholder="prefix">
									</div>
								</div>
								<div class="col-lg-3">
									<div class="form-group">
										<label>Surname</label>
										<input type="text" class="form-control" id="name" name="surname" required placeholder="surname">
									</div>
								</div>
								<div class="col-lg-2 chk-pd">
									<label class="cstm-chk ">Newsletter
										  <input type="checkbox" name="newsletter" checked="checked">
										  <span class="checkmark-chk"></span>
									</label>
								</div>
								<div class="col-lg-5">
									<div class="form-group">
										<label>Email</label>
										<input type="text" class="form-control" id="name" name="email" required placeholder="email">
									</div>
								</div>
								<div class="col-lg-3">
									<div class="form-group">
										<label>Mobile Number</label>
										<input type="text" class="form-control" id="mobile_BUSSINES" name="mobile_number" required placeholder="*Eg. +5299140425">
									</div>
								</div>
								<!-- <div class="col-lg-2">
									<div class="form-group">
										<label>SMS</label>
										<input type="text" class="form-control" id="name" name="sms" required placeholder="sms">
									</div>
								</div> -->
								<div class="col-lg-4">
									<div class="form-group">
										<label>Select Country</label>
										<select name="country" class="form-control custom-select">
											@foreach($countries as $key => $value)
												<option value="{{ $value->id }}" >{{ $value->name }}</option>
											@endforeach
										</select>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="form-group">
											<label>Postal Code</label>
												<input type="text" class="form-control" id="pass" name="postal_code" required placeholder="postal code">
									</div>
							
								</div>
										<div class="col-lg-4">
									<div class="form-group">
											<label>Number</label>
												<input type="text" class="form-control" id="pass" name="number" required placeholder="number">
									</div>
								</div>
								<div class="col-lg-4">
									<div class="form-group">
											<label>Addition</label>
												<input type="text" class="form-control" id="pass" name="addition" required placeholder="addition">
									</div>
								</div>
								<div class="col-lg-4">
									<div class="form-group">
											<label>Address</label>
												<input type="text" class="form-control" id="pass" name="address" required placeholder="address">
									</div>
								</div>
								<div class="col-lg-4">
									<div class="form-group">
											<label>City</label>
												<input type="text" class="form-control" id="pass" name="city" required placeholder="city">
									</div>
								</div>
								@csrf
								<div class="col-lg-12">
									
									<label class="radio-cstm mgg-top">Within European Union
									  <input type="radio" checked="checked" value="within" name="from_european">
									  <span class="checkmark-rd"></span>
									</label>
									<label class="radio-cstm mgg-top r-c-2">Outside European Union
									  <input type="radio" value="outside" name="from_european">
									  <span class="checkmark-rd"></span>
									</label>
								
								</div>
								<div class="col-lg-12">
									<div class="row">
										<div class="col-lg-3">
											<div class="form-group">
												<label>Select Country</label>
												<select name="company_country" class="form-control custom-select">
													<option value="" >Choose</option>
													@foreach($countries as $key => $value)
														<option value="{{ $value->id }}" >{{ $value->name }}</option>
													@endforeach
												</select>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="form-group">
													<label>VAT Number</label>
													<input type="text" class="form-control" id="pass" name="vat_number" required placeholder="vat number">
											</div>
										</div>
										<div class="col-lg-3">
											<div class="form-group">
													<label>Company Name</label>
													<input type="text" class="form-control" id="pass" name="company_name" required placeholder="company name">
											</div>
										</div>
										<div class="col-lg-3">
											<div class="form-group">
													<label style="font-size:12px; ">Chamber of Commerce Number</label>
													<input type="text" class="form-control" id="pass" name="chamber" required placeholder="commerce number">
											</div>
										</div>
									</div>
									
								</div>
								<input type="hidden" name="user_type" value="business">
								<div class="col-lg-12" id="bus-er">
									<div class="form-group">
								<label class="pull-left"><input type="checkbox"  name="terms" class="check" required>&nbsp;&nbsp;I agree to <a href="#">Terms & Conditions.</a>


									and I have taken note of the  <a href="#">Privacy Statement</a></label>
							</div>
							<br/>
							
								</div>
								<div class="col-lg-12">
									<div class=" checkbox pull-left">
									<a href="#"><button type="submit" class="btn btn-default login-bt">Signup</button></a>
									</div>
								</div>
							</div>
			
						</form>
				</div>
				</div>
			</div>
				</div>
			</div>
	</section>


	<div id="digitPassword" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="digitPasswordlbl" aria-hidden="true">
        <div class="vertical-alignment-helper">
            <div class="modal-dialog vertical-align-center">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="digitPasswordlbl">Please enter OTP received on your mobile</h4>
                    </div>
                    <form action="javascript:;" id="formConsumer">
	                    <div class="confirmation_code split_input large_bottom_margin" data-multi-input-code="true">
			    			<div class="confirmation_code_group">
								<div class="split_input_item input_wrapper"><input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="field-1" required="" type="text" class="inline_input" maxlength="1"></div>
								<div class="split_input_item input_wrapper"><input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="field-2" required="" type="text" class="inline_input" maxlength="1"></div>
								
							</div>
							<input type="hidden" name="rt" id="rt">

							<div class="confirmation_code_span_cell">—</div>

							<div class="confirmation_code_group">
								<div class="split_input_item input_wrapper"><input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="field-4" required="" type="text" class="inline_input" maxlength="1"></div>
								<div class="split_input_item input_wrapper"><input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="field-5" required="" type="text" class="inline_input" maxlength="1"></div>
								
							</div>
						</div>
						<input type="hidden" name="type" value="verify">
						@csrf
						<div class="text-center">
							
						<button class="btn btn-default login-bt" id="OTPSuBMIT" type="submit">Submit</button>
						</div>
						<div>
							<br>
						</div>
					</form>
                </div>
            </div>
        </div>
    </div>

    <div id="business_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="digitPasswordlbl" aria-hidden="true">
        <div class="vertical-alignment-helper">
            <div class="modal-dialog vertical-align-center">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="digitPasswordlbl">Please enter OTP received on your mobile</h4>
                    </div>
                    <form action="javascript:;" id="business_form">
	                    <div class="confirmation_code split_input large_bottom_margin" data-multi-input-code="true">
			    			<div class="confirmation_code_group">
								<div class="split_input_item input_wrapper"><input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="field-1" required="" type="text" class="inline_input" maxlength="1"></div>
								<div class="split_input_item input_wrapper"><input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="field-2" required="" type="text" class="inline_input" maxlength="1"></div>
								
							</div>

							@csrf

							<input type="hidden" name="rt" id="rt2">

							<div class="confirmation_code_span_cell">—</div>

							<div class="confirmation_code_group">
								<div class="split_input_item input_wrapper"><input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="field-4" required="" type="text" class="inline_input" maxlength="1"></div>
								<div class="split_input_item input_wrapper"><input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="field-5" required="" type="text" class="inline_input" maxlength="1"></div>
								
							</div>
						</div>
						<div class="text-center">
							<input type="hidden" name="type" value="verify">
							
						<button class="btn btn-default login-bt" id="OTPSuBMIT-business" type="submit">Submit</button>
						</div>
						<div>
							<br>
						</div>
					</form>
                </div>
            </div>
        </div>
    </div>

@stop

@section('scripts')
<script type="text/javascript">
	var rt = "e";
	var OTP = null;
	
	$(document).ready(function() {
	    $('.registerForm-1').bootstrapValidator({
	        /*message: 'This value is not valid',
	        feedbackIcons: {
	            valid: 'glyphicon glyphicon-ok',
	            invalid: 'glyphicon glyphicon-remove',
	            validating: 'glyphicon glyphicon-refresh'
	        },*/
	        fields: {
	            username: {
	                message: 'The username is not valid',
	                validators: {
	                    notEmpty: {
	                        message: 'The username is required and cannot be empty'
	                    },
	                    stringLength: {
	                        min: 6,
	                        max: 30,
	                        message: 'The username must be more than 6 and less than 30 characters long'
	                    },
	                    regexp: {
	                        regexp: /^[a-zA-Z0-9_]+$/,
	                        message: 'The username can only consist of alphabetical, number and underscore'
	                    },
	                    remote: {
                            message: 'Email id is already registered',
                            url:'{{ url("userNameCheck") }}',
                            type: 'POST',
                            delay: 500     // Send Ajax request every 2 seconds
                        },
	                }
	            },
	            email: {
	                validators: {
	                    notEmpty: {
	                        message: 'The email is required and cannot be empty'
	                    },
	                    emailAddress: {
	                        message: 'The input is not a valid email address'
	                    },
	                    remote: {
                            message: 'Email id is already registered',
                            url:'{{ url("emailCheck") }}',
                            type: 'POST',
                            delay: 500     // Send Ajax request every 2 seconds
                        },
	                }
	            }, 

	            mobile_number: {
	                validators: {	                    
	                    
	                    regexp: {
	                        regexp: /^(\+\d{1,3}[- ]?)?\d{10}$/,
	                        message: 'Mobile number is not valid'
	                    }
	                }
	            },

	            password : {
	                validators: {                    
	                    
	                    notEmpty: {
	                       	message: 'Please enter a value'
	                    }
	                }
	            },

	            confirm_password : {
	                validators: {                    
	                    
	                    notEmpty: {
	                       	message: 'Please enter a value'
	                    },
	                    identical: {
	                        field: 'password',
	                        message: 'The password and its confirm are not the same'
	                    }
	                }
	            },
	        }
	    }).on('success.form.bv', function(e) {
            // Prevent form submission
            e.preventDefault();

            $('#digitPassword').modal('show');

            $.ajax({
	    		url: '{{ url("send-otp") }}',
	    		type: 'POST',
	    		dataType : "json",
	    		data : {
                    "_token" : "{{ csrf_token() }}",
                    "type" : "send",
                    "number" : $("#mobile_consumer").val(),
	    		},
	    		success: function(data) {
	    			$('#rt').val(data.rt);
	    		}
	    	});
            // // Get the form instance
            // var $form = $(e.target);

            // // Get the BootstrapValidator instance
            // var bv = $form.data('bootstrapValidator');

            // // Use Ajax to submit form data
            // $.post($form.attr('action'), $form.serialize(), function(result) {
            //     // ... Process the result ...
            // }, 'json');
        });
	});

</script>

<script type="text/javascript">

	
	
	$(document).ready(function() {
	    $('.registerForm-2').bootstrapValidator({
	        /*message: 'This value is not valid',
	        feedbackIcons: {
	            valid: 'glyphicon glyphicon-ok',
	            invalid: 'glyphicon glyphicon-remove',
	            validating: 'glyphicon glyphicon-refresh'
	        },*/
	        fields: {
	            username: {
	                message: 'The username is not valid',
	                validators: {
	                    notEmpty: {
	                        message: 'The username is required and cannot be empty'
	                    },
	                    stringLength: {
	                        min: 6,
	                        max: 30,
	                        message: 'The username must be more than 6 and less than 30 characters long'
	                    },
	                    regexp: {
	                        regexp: /^[a-zA-Z0-9_]+$/,
	                        message: 'The username can only consist of alphabetical, number and underscore'
	                    },
	                    remote: {
                            message: 'Email id is already registered',
                            url:'{{ url("userNameCheck") }}',
                            type: 'POST',
                            delay: 500     // Send Ajax request every 2 seconds
                        },
	                }
	            },
	            email: {
	                validators: {
	                    notEmpty: {
	                        message: 'The email is required and cannot be empty'
	                    },
	                    emailAddress: {
	                        message: 'The input is not a valid email address'
	                    },
	                    remote: {
                            message: 'Email id is already registered',
                            url:'{{ url("emailCheck") }}',
                            type: 'POST',
                            delay: 500     // Send Ajax request every 2 seconds
                        },
	                }
	            }, 

	            mobile_number: {
	                validators: {	                    
	                    
	                    regexp: {
	                        regexp: /^(\+\d{1,3}[- ]?)?\d{10}$/,
	                        message: 'Mobile number is not valid'
	                    }
	                }
	            },

	            password : {
	                validators: {                    
	                    
	                    notEmpty: {
	                       	message: 'Please enter a value'
	                    }
	                }
	            },

	            confirm_password : {
	                validators: {                    
	                    
	                    notEmpty: {
	                       	message: 'Please enter a value'
	                    },
	                    identical: {
	                        field: 'password',
	                        message: 'The password and its confirm are not the same'
	                    }
	                }
	            },
	        }
	    }).on('success.form.bv', function(e) {
            // Prevent form submission
            e.preventDefault();

            $('#business_modal').modal('show');

            $.ajax({
	    		url: '{{ url("send-otp") }}',
	    		type: 'POST',
	    		dataType : "json",
	    		data : {
                    "_token" : "{{ csrf_token() }}",
                    "type" : "send",
                    "number" : $("#mobile_BUSSINES").val(),
	    		},
	    		success: function(data) {
	    			$('#rt2').val(data.rt);
	    		}
	    	});
            // // Get the form instance
            // var $form = $(e.target);

            // // Get the BootstrapValidator instance
            // var bv = $form.data('bootstrapValidator');

            // // Use Ajax to submit form data
            // $.post($form.attr('action'), $form.serialize(), function(result) {
            //     // ... Process the result ...
            // }, 'json');
        });
	});

</script>

<script type="text/javascript">
	/*$('.registerForm-1').submit(function(){
		alert("submit");
		return false;
	})*/


	$('#OTPSuBMIT').click(function() {
        
        $.ajax({
	    		url: '{{ url("send-otp") }}',
	    		type: 'POST',
	    		dataType : "json",
	    		data : $("#formConsumer").serialize(),
	    		success: function(data) {

	    			//
	    			if(data.status){
		    			$.ajax({
				    		url: '{{ url("signup") }}',
				    		type: 'POST',
				    		dataType : "json",
				    		data : $('.registerForm-1').serialize(),
				    		success: function(data) {
			    				// alert("Register success");
			    				window.location.href = "{{ url('login') }}";
				    		}
				    	});
				    }else{
				    	swal({
						    title: "Error!",
						    text: "Invalid OTP, Try again!",
						    icon: "error",
						    button: "OK",
						});
				    }
	    			
	    		}
	    	});

    });

 	$('#OTPSuBMIT-business').click(function() {
        
        $.ajax({
	    		url: '{{ url("send-otp") }}',
	    		type: 'POST',
	    		dataType : "json",
	    		data :$('#business_form').serialize(),   /* {
                    "_token" : "{{ csrf_token() }}",
                    "type" : "verify",
	    		},*/
	    		success: function(data) {

	    			//
	    			if(data.status){
		    			$.ajax({
				    		url: '{{ url("signup/business") }}',
				    		type: 'POST',
				    		dataType : "json",
				    		data : $('.registerForm-2').serialize(),
				    		success: function(data) {
				    			if(data.status){
				    				// alert("Register success");
				    				window.location.href = "{{ url('login') }}";
				    			}
				    		}
				    	});
	    			}else{
	    				swal({
						    title: "Error!",
						    text: "Invalid OTP, Try again!",
						    icon: "error",
						    button: "OK",
						});
	    			}
	    		}
	    	});

    });

    $("input[name='field-1']").keyup(function(event){
    	// alert("d");
    	if($(this).val()){
    		$("input[name='field-2']").focus();
    	}
    })

    $("input[name='field-2']").keyup(function(event){
    	// alert("d");
    	if($(this).val()){
    		$("input[name='field-4']").focus();
    	}
    })

    $("input[name='field-4']").keyup(function(event){
    	// alert("d");
    	if($(this).val()){
    		$("input[name='field-5']").focus();
    	}
    })
 

</script>
@stop