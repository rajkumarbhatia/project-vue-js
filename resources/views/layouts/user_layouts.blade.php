<!DOCTYPE html>
<html>
	@include('common.user_head')


	<body>
		@include('common.header_user')

		<div class="page-wrap">
			<section class="dashbrd-sec">
				@include('common.user_sidebar')

				@yield('content')				
			</section>
		</div>

		@include('common.footer')

		<script type="text/javascript" src="{{ url('public/js/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{ url('public/js/bootstrap.js') }}"></script>
		<script type="text/javascript" src="{{ url('public/js/slick.min.js') }}"></script>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		
		
		@if(Session::has('flash_success'))
		<script type="text/javascript">
			swal({
			  title: "Success!",
			  text: "{{ Session::get('flash_success') }}",
			  icon: "success",
			  button: "OK",
			});
		</script>
		@endif

		@if(Session::has('flash_error'))
		<script type="text/javascript">
			swal({
			  title: "Oop's!",
			  text: "{{ Session::get('flash_error') }}",
			  icon: "error",
			  button: "OK",
			});
		</script>
		@endif

		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>

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




    	
    	

		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAex4FI2zEOagRt_KJxBwxhJKZ7mTRVxf4&callback=initMap">
    	</script>

    	@yield('scripts')
	</body>
</html>