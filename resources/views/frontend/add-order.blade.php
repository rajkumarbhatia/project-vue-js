@extends('layouts.user_layouts')
@section('title','Add Order')
@section('content')
<style type="text/css">
	button[title="View Details"]{
   display: none!important;
}

.file-upload-indicator{
   display: none!important;
}
</style>
	<link rel="stylesheet" type="text/css" href="{{ url('public/css/fileinput.css')}}">
	<div class="page-content-wrapper">
					<div class="page-content">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="content-panel">
									<div class="user-dashbrd-heading">Order Form</div>
									
									<div class="login-main-inner dshbrd-view order-pd">
										<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
											<form action="" class="add-form" method="post">
												@csrf
												<div class="row">
													<div class="col-lg-12">
														<h4>Upload Product image</h4>
													</div>
													<div class="col-lg-12">
														<div class="form-group">
												            <div class="file-loading">
												                <input id="file-1" type="file" multiple class="file" data-overwrite-initial="false" name="orderImages[]" data-min-file-count="2">
												            </div>
												        </div>
													</div>
													<div class="col-lg-12">
														<h4 style="margin:15px 0px; ">Product Information</h4>
													</div>
													<div class="col-lg-6">
														<div class="form-group">
															<label>Product Name</label>
															<input type="text" class="form-control" id="name" name="product_name" required="" placeholder="name">
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group">
															<label>Product Sub Name <small>(Optional)</small></label>
															<input type="text" class="form-control" id="name" name="product_sub_name" placeholder="sub name">
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group">
															<label>Model Number</label>
															<input type="text" class="form-control" id="name" name="model_number" required="" placeholder="modal number">
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group">
															<label>Brand Name</label>
															<input type="text" class="form-control" id="name" name="brand_name" required="" placeholder="brand name">
														</div>
													</div>
													<input type="hidden" id="pro_images" name="product_images">
													<div class="col-lg-6">
														<div class="form-group">
															<label>Select Color</label>
															<select class="form-control custom-select" name="color">
																				
																<option selected="" value="cyan">Cyan</option>
																<option value="red">Red</option>
																<option value="green">Green</option>
															</select>
														</div>
													</div>

													<div class="col-lg-6">
														<div class="form-group">
															<label>Select Quantity</label>
															<!-- <select class="form-control custom-select">
																		<option selected="">1</option>
																		<option value="2">2</option>
																		<option value="3">3</option>
																	</select> -->
																	<div>
																		<!-- <form id='quan-form' method='POST' action='#'> -->
																	    <input type='button' value='-' class='qtyminus' field='quantity' />
																	    <input type='text' name='quantity' value='0' class='qty' />
																	    <input type='button' value='+' class='qtyplus' field='quantity' />
																	<!-- </form> -->
																	</div>
														</div>
													</div>
												
													<div class="col-lg-12">
														<div class="form-group">
															<label>Enter Description</label>
															<textarea class="form-control" name="description"  placeholder="please enter the additional description, information or message..."></textarea>
														</div>
													</div>
													<div class="col-lg-12">
												<div class="checkbox">
												<a href="{{ url('order-list') }}"><button type="button" class="btn btn-default login-bt">Back</button></a>
												<a href="#"><button type="submit" class="btn btn-default login-bt">Submit</button></a>
														
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

@stop

@section('scripts')
<script type="text/javascript" src="{{ url('public/js/fileinput.js') }}"></script>
		<script>
			var uploadedImages = [];
			$(".add-form").submit(function(){

				$('#pro_images').val(JSON.stringify(uploadedImages))
				return true;


			})


			
	    $('#file-fr').fileinput({
	        theme: 'fa',
	        language: 'fr',
	        uploadUrl: '#',
	        allowedFileExtensions: ['jpg', 'png', 'gif']
	    });
	    $('#file-es').fileinput({
	        theme: 'fa',
	        language: 'es',
	        uploadUrl: '#',
	        allowedFileExtensions: ['jpg', 'png', 'gif']
	    });
	    $("#file-0").fileinput({
	        theme: 'fa',
	        'allowedFileExtensions': ['jpg', 'png', 'gif']
	    });
	   /* $("#file-1").fileinput({
	        theme: 'fa',
	        uploadUrl: '{{ url("admin/upload/order/image") }}', 
	        allowedFileExtensions: ['jpg', 'png', 'gif'],
	        overwriteInitial: false,
	        maxFileSize: 1000,
	        maxFilesNum: 10,

	        uploadExtraData:{'_token': "{{ csrf_token() }}"},
	        //allowedFileTypes: ['image', 'video', 'flash'],
	        slugCallback: function (filename) {
	            return filename.replace('(', '_').replace(']', '_');
	        }
	    });*/
	        $("#file-1").fileinput({
		        uploadUrl: '{{ url("admin/upload/order/image") }}',
		        // minFileCount: 1,
		        // maxFileCount: 1,
		        uploadExtraData:{'_token': "{{ csrf_token() }}"},
		        overwriteInitial: false,
		        // showPreview : false,
		        showRemove : false,
		        // showCaption : false,
		        initialPreviewAsData: true, // identify if you are sending preview data only and not the markup
		        slugCallback: function (filename) {
		            return filename.replace('(', '_').replace(']', '_');
		        }
		    });

        $('#file-1').on('fileuploaded', function(event, previewId, index, fileId) {
        	console.log(event);

        	previewId.response.forEach(function(val,ind){
        		uploadedImages.push(val);
        		console.log(val);
        	})
	        // console.log('File uploaded', previewId, index, fileId);
	    });

        $('#file-1').on('fileremoved', function(event, id, index) {
	        console.log('id = ' + id + ', index = ' + index);
	    });

	    $('#file-1').on('filesuccessremove', function(event, id, index) {
	        console.log('id = ' + id + ', index = ' + index);
	    });

	    $("#file-3").fileinput({
	        theme: 'fa',
	        showUpload: false,
	        showCaption: false,
	        browseClass: "btn btn-primary btn-lg",
	        fileType: "any",
	        previewFileIcon: "<i class='glyphicon glyphicon-king'></i>",
	        overwriteInitial: false,
	        initialPreviewAsData: true,
	        initialPreview: [
	            "http://lorempixel.com/1920/1080/transport/1",
	            "http://lorempixel.com/1920/1080/transport/2",
	            "http://lorempixel.com/1920/1080/transport/3"
	        ],
	        initialPreviewConfig: [
	            {caption: "transport-1.jpg", size: 329892, width: "120px", url: "{$url}", key: 1},
	            {caption: "transport-2.jpg", size: 872378, width: "120px", url: "{$url}", key: 2},
	            {caption: "transport-3.jpg", size: 632762, width: "120px", url: "{$url}", key: 3}
	        ]
	    });
	    $("#file-4").fileinput({
	        theme: 'fa',
	        uploadExtraData: {kvId: '10'}
	    });
	    $(".btn-warning").on('click', function () {
	        var $el = $("#file-4");
	        if ($el.attr('disabled')) {
	            $el.fileinput('enable');
	        } else {
	            $el.fileinput('disable');
	        }
	    });
	    $(".btn-info").on('click', function () {
	        $("#file-4").fileinput('refresh', {previewClass: 'bg-info'});
	    });
	 
	    $(document).ready(function () {
	        $("#test-upload").fileinput({
	            'theme': 'fa',
	            'showPreview': false,
	            'allowedFileExtensions': ['jpg', 'png', 'gif'],
	            'elErrorContainer': '#errorBlock'
	        });
	        $("#kv-explorer").fileinput({
	            'theme': 'explorer-fa',
	            'uploadUrl': '#',
	            overwriteInitial: false,
	            initialPreviewAsData: true,
	            initialPreview: [
	                "http://lorempixel.com/1920/1080/nature/1",
	                "http://lorempixel.com/1920/1080/nature/2",
	                "http://lorempixel.com/1920/1080/nature/3"
	            ],
	            initialPreviewConfig: [
	                {caption: "nature-1.jpg", size: 329892, width: "120px", url: "{$url}", key: 1},
	                {caption: "nature-2.jpg", size: 872378, width: "120px", url: "{$url}", key: 2},
	                {caption: "nature-3.jpg", size: 632762, width: "120px", url: "{$url}", key: 3}
	            ]
	        });
	       
	    });
	</script>
		<script type="text/javascript">
			$('#order-side').addClass("active");
		</script>
		<script type="text/javascript">
			$('.btn-open').click(function(){
				$('.sidenav').css('transform','translate(0px)');
			});

		</script>
		<script type="text/javascript">
			$('.closebtn').click(function(){
				$('.sidenav').css('transform','translate(-18em)');
			});
		</script>
		
		<script>
	        $(window).scroll(function() {
	            if ($(this).scrollTop() > 1){  
	                $('header').addClass("sticky");
	            }
	            else{
	                $('header').removeClass("sticky");
	            }
	        });
	    </script>

		<script type="text/javascript">
			jQuery(document).ready(function(){
			    // This button will increment the value
			    $('.qtyplus').click(function(e){
			        // Stop acting like a button
			        e.preventDefault();
			        // Get the field name
			        fieldName = $(this).attr('field');
			        // Get its current value
			        var currentVal = parseInt($('input[name='+fieldName+']').val());
			        // If is not undefined
			        if (!isNaN(currentVal)) {
			            // Increment
			            $('input[name='+fieldName+']').val(currentVal + 1);
			        } else {
			            // Otherwise put a 0 there
			            $('input[name='+fieldName+']').val(0);
			        }
			    });
			    // This button will decrement the value till 0
			    $(".qtyminus").click(function(e) {
			        // Stop acting like a button
			        e.preventDefault();
			        // Get the field name
			        fieldName = $(this).attr('field');
			        // Get its current value
			        var currentVal = parseInt($('input[name='+fieldName+']').val());
			        // If it isn't undefined or its greater than 0
			        if (!isNaN(currentVal) && currentVal > 0) {
			            // Decrement one
			            $('input[name='+fieldName+']').val(currentVal - 1);
			        } else {
			            // Otherwise put a 0 there
			            $('input[name='+fieldName+']').val(0);
			        }
			    });
			});

		</script>

		<script type="text/javascript">
				
			$(document).ready(function() {
			    $('.add-form').bootstrapValidator({
			        message: 'This value is not valid',
			        /*feedbackIcons: {
			            valid: 'glyphicon glyphicon-ok',
			            invalid: 'glyphicon glyphicon-remove',
			            validating: 'glyphicon glyphicon-refresh'
			        },*/
			        fields: {
			            product_name: {
			                validators: {
			                    notEmpty: {
			                        message: 'The product_name is required and cannot be empty'
			                    }			                    
			                }
			            },

			            model_number: {
			                validators: {
			                    notEmpty: {
			                        message: 'The model_number is required and cannot be empty'
			                    }			                    
			                }
			            },

			            brand_name: {
			                validators: {
			                    notEmpty: {
			                        message: 'The brand_name is required and cannot be empty'
			                    }			                    
			                }
			            },
			            color: {
			                validators: {
			                    notEmpty: {
			                        message: 'The color is required and cannot be empty'
			                    }
			                }
			            },description: {
			                validators: {
			                    notEmpty: {
			                        message: 'The description is required and cannot be empty'
			                    }
			                }
			            }
			        }
			    });
			});
		</script>

@stop