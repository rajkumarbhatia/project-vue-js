<!DOCTYPE html>
<html>
		@include('common.head')
	
	<body>
		@include('common.home_header')

		@yield('content')

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
		<script>
	        $(window).scroll(function() {
	            if ($(this).scrollTop() > 1){  
	                $('header').addClass("sticky");
	                $('#mySidenav').addClass("sticky");
	            }
	            else{
	                $('header').removeClass("sticky");
	                $('#mySidenav').removeClass("sticky");
	            }
	        });
	    </script>

	    <script>
	    	$('.slider-for').slick({
			  slidesToShow: 1,
			  slidesToScroll: 1,
			  arrows: false,
			  fade: true,
			  asNavFor: '.slider-nav'
			});
			$('.slider-nav').slick({
			  slidesToShow: 3,
			  slidesToScroll: 1,
			  asNavFor: '.slider-for',
			  dots: true,
			  centerMode: true,
			  focusOnSelect: true
			});
    	</script>

    	<script>
    		
    		$('.products-slider').slick({
	            infinite: true,
	            speed: 300,
	            slidesToShow: 4,
	            slidesToScroll: 1,
	            autoplay: true,
	            autoplaySpeed: 3000,
	            cssEase: 'linear',
	            prevArrow: '<button type="button" data-role="none" class="slick-prev" aria-label="Previous" tabindex="0" role="button"></button>',
                nextArrow: '<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0" role="button"></button>',               
	            responsive: [
		            {
		              breakpoint: 1024,
		              settings: {
		                slidesToShow: 4,
		                slidesToScroll: 1,
		                infinite: true,
		              }
		            },
		            {
		              breakpoint: 600,
		              settings: {
		                slidesToShow: 2,
		                slidesToScroll: 1
		              }
		            },
		            {
		              breakpoint: 480,
		              settings: {
		                slidesToShow: 1,
		                slidesToScroll: 1
		              }
		            }
	          	]
	        });	

    	</script>

    	@yield('scripts')

	</body>
</html>