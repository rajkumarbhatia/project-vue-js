


<div class="top-header">
	<div class="container-fluid">
		<ul class="pull-left">
			<li> <a href="javacscript:void(0);"> <i class="fa fa-phone"></i> 9999-999-999 / 9888-888-888 </a> </li>
			<li> <a href="javacscript:void(0);"> <i class="fa fa-envelope"></i> abc@gmail.com </a> </li>
		</ul>
		<ul class="pull-right">
			<li> <a href="become-seller.php">Become A Seller </a> </li>
			<li> <a href="contact-us.php"> Contact Us </a> </li>
			<li> <a href="faq.php"> FAQ </a> </li>
			<li> <a href="privacy.php">Privacy Policy </a> </li>
		</ul>
		
	</div>
</div>

<header class="header-sec">
	<div class="navigation">
		<nav class="navbar navbar-default">
	  		<div class="container-fluid">
	    		<div class="navbar-header">
	    			
	      			 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
	      			<a class="navbar-brand" href="index.php"><img src="{{ url('public/imgs/logo.png') }}"></a>
	    		</div>
	    		<div class="collapse navbar-collapse" id="myNavbar">
		      		<ul class="nav navbar-nav navbar-right">
		      			<li class="header-search">
		      				<div class="input-group">
		      					<input type="text" name="" class="form-control txtfield" placeholder="Search within all auctions" />
		      					<span class="input-group-addon"> <i class="fa fa-search"></i> Search </span>
		      				</div>
	      				</li>
	      				<li class="header-login"><a href="all-auctions.php">All Auctions</a></li>
	      				<li>
	      					<div class="dropdown">
							    <button class="btn btn-danger dropdown-toggle top-btn" type="button" data-toggle="dropdown">Categories
							    <span class="caret"></span></button>
							    <ul class="dropdown-menu">
							      <li><a href="#">category 1</a></li>
							      <li><a href="#">category 1</a></li>
							      <li><a href="#">category 1</a></li>
							    </ul>
							  </div>
	      				</li>
	      				
    						<li style="margin:0px 5px;">
	      					<div class="dropdown">
							    <button class="btn btn-danger dropdown-toggle top-btn" type="button" data-toggle="dropdown">{{ Auth::user()->name}}
							    <span class="caret"></span></button>
							    <ul class="dropdown-menu">
							      <li><a href="#"><i class="fa fa-cog"></i> &nbsp;&nbsp;&nbsp;Account Info</a></li>
							      <li><a href="{{ url('logout') }}"><i class="fa fa-power-off"></i> &nbsp;&nbsp;&nbsp;Logout</a></li>
							       
							    </ul>
							  </div>
	      				</li>
    					<li>
	      					<div class="dropdown">
							    <button class="btn btn-danger dropdown-toggle top-btn" type="button" data-toggle="dropdown">English
							    <span class="caret"></span></button>
							    <ul class="dropdown-menu">
							      <li><a href="#">Euthopian</a></li>
							      <li><a href="#">English</a></li>
							      
							    </ul>
							  </div>
	      				</li>
					  <!--   <li class="">
					    	<div class="dropdown">
							    <button class="btn btn-danger dropdown-toggle top-btn " type="button" data-toggle="dropdown" id="btn-trans"> Signup 
							    </button>
							    <ul class="dropdown-menu">
							      <li><a href="consumer-signup.php">Signup As Consumer</a></li>
							      <li><a href="business-signup.php">Signup As Business</a></li>
							      
							    </ul>
							  </div>



					    </li> -->
				        
		      		</ul>
	    		</div>
	  		</div>
		</nav> 
	</div>
	
</header>