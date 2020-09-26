@extends('layouts.user_layouts')
@section('title','Login')
@section('content')
	
	<div class="page-content-wrapper">
					<div class="page-content">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="content-panel">
									<div class="user-dashbrd-heading"> Personal  Information</div>
									
									<div class="login-main-inner dshbrd-view all-hide">
										<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
											
												<div class="row">
													<div class="col-lg-4">
														<div class="form-group">
															<label>Username</label>
															<input type="text" disabled="" readonly="" value="{{ Auth::user()->username }}" class="form-control" id="name" name="name"  placeholder1="Nick">
														</div>
													</div>
													<!-- <div class="col-lg-8">
														<div class="form-group">
																<label>Password</label>
																	<input type="text" disabled="" readonly="" class="form-control" id="pass" name="pass"  placeholder1="*************">
														</div>
													</div> -->
													<!-- <div class="col-lg-4">
														<div class="form-group">
																<label>Confirm Password</label>
																	<input type="text" disabled="" readonly="" class="form-control" id="pass" name="pass"  placeholder1="confirm password">
														</div>
													</div> -->
													<div class="col-lg-3">
														<label class="radio-cstm">Mr
														  <input type="radio" <?php echo Auth::user()->title == "mr" ? "checked" : ""  ?> checked="checked" name="radio">
														  <span class="checkmark-rd"></span>
														</label>
														<label class="radio-cstm r-c-2">Ms
														  <input type="radio" <?php echo Auth::user()->title == "ms" ? "checked" : ""  ?> name="radio">
														  <span class="checkmark-rd"></span>
														</label>
													</div>
													<div class="col-lg-3">
														<div class="form-group">
															<label>Name</label>
															<input value="{{ Auth::user()->name }}" type="text" disabled="" readonly="" class="form-control" id="name" name="name"  placeholder1="Singh">
														</div>
													</div>
													<div class="col-lg-3">
														<div class="form-group">
															<label>Prefix</label>
															<input type="text" value="{{ Auth::user()->prefix }}" disabled="" readonly="" class="form-control" id="name" name="name"  placeholder1="dummy">
														</div>
													</div>
													<div class="col-lg-3">
														<div class="form-group">
															<label>Surname</label>
															<input type="text" value="{{ Auth::user()->surname }}" disabled="" readonly="" class="form-control" id="name" name="name"  placeholder1="Deosi">
														</div>
													</div>
													<div class="col-lg-2 chk-pd">
														<label class="cstm-chk ">Newsletter
															  <input type="checkbox" checked="checked">
															  <span class="checkmark-chk"></span>
														</label>
													</div>
													<div class="col-lg-5">
														<div class="form-group">
															<label>Email</label>
															<input type="text" value="{{ Auth::user()->email }}" disabled="" readonly="" class="form-control" id="name" name="name"  placeholder1="singhkarry13@gmail.com">
														</div>
													</div>
													<div class="col-lg-3">
														<div class="form-group">
															<label>Mobile Number</label>
															<input type="text" disabled="" value="{{ Auth::user()->mobile_number }}"  readonly="" class="form-control" id="name" name="name"  placeholder1="9178958988">
														</div>
													</div>
													<!-- <div class="col-lg-2">
														<div class="form-group">
															<label>SMS</label>
															<input type="text" disabled="" readonly="" class="form-control" id="name" name="name"  placeholder1="sms">
														</div>
													</div> -->
													<div class="col-lg-4">
														<div class="form-group">
															<label>Select Country</label>
															<select class="form-control custom-select">
																@foreach($countries as $key => $value)				
																	<option <?php echo $value->id == Auth::user()->id ? "selected" : "" ?> readonly="">India</option>
																@endforeach
															</select>
														</div>
													</div>
													<div class="col-lg-4">
														<div class="form-group">
																<label>Postal Code</label>
																	<input type="text" value="{{ Auth::user()->postal_code }}" disabled="" readonly="" class="form-control" id="pass" name="pass"  placeholder1="10004">
														</div>
												
													</div>
															<div class="col-lg-4">
														<div class="form-group">
																<label>Number</label>
																	<input type="text" value="{{ Auth::user()->number }}" disabled="" readonly="" class="form-control" id="pass" name="pass"  placeholder1="656565656">
														</div>
													</div>
													<div class="col-lg-4">
														<div class="form-group">
																<label>Addition</label>
																	<input type="text" value="{{ Auth::user()->addition }}" disabled="" readonly="" class="form-control" id="pass" name="pass"  placeholder1="DBZ">
														</div>
													</div>
													<div class="col-lg-4">
														<div class="form-group">
																<label>Address</label>
																	<input type="text" disabled="" value="{{ Auth::user()->address }}" readonly="" class="form-control" id="pass" name="pass"  placeholder1="#2030, St 17 , India">
														</div>
													</div>
													<div class="col-lg-4">
														<div class="form-group">
																<label>City</label>
																	<input type="text" disabled="" value="{{ Auth::user()->city }}" readonly="" class="form-control" id="pass" name="pass"  placeholder1="Ludhiana">
														</div>
													</div>
													<div class="col-lg-12">
													<!-- 	<div class="form-group">
													<label class="pull-left"><input type="checkbox" name="remember" class="check" >&nbsp;&nbsp;I agree to <a href="#">Terms &amp; Conditions.</a>


														and I have taken note of the  <a href="#">Privacy Statement</a></label>
												</div> -->
												
												<div class="checkbox">
												<a href="edit-profile.php"><button  class="btn btn-default login-bt">Edit Profile</button></a>
														<a href="{{ url('change-password-dashboard') }}"><button type="submit" class="btn btn-default login-bt">Change Password</button></a>
												</div>
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
@stop