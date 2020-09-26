<div class="page-sidebar-wrapper">
	<div id="bs-example-navbar-collapse-1" class="dashbrd-sidbar collapse navbar-collapse p-0">
     
        <ul class="dshbrd-sidebar-menu" type="none">
                    <li class="sidebar-item">
              
            	<a id="dash-side" class="sidebar-link" href="{{ url('/dashboard') }} ">
                    <i class="fa fa-user"></i>
                    <span class="title">Personal Information</span>
                </a>
            </li>

           
                    <li class="sidebar-item">
            
            	<a id="won-side" class="sidebar-link" href="{{ url('my-won') }}">
                    <i class="fa fa-star"></i>
                    <span class="title">My Won</span>
                </a>
            </li>
           
                    <li class="sidebar-item">
        
                <a id="invoice-side" class="sidebar-link" href="{{ url('my-invoice') }}">
                    <i class="fa fa-file"></i>
                    <span class="title"> My Invoices </span>
                </a>
            </li>
               <li class="sidebar-item">
        
                <a id="lot-side" class="sidebar-link" href="{{ url('my-lots') }}">
                    <i class="fa fa-plus"></i>
                    <span class="title"> My Lots </span>
                </a>
            </li>
               <li class="sidebar-item">
        
                <a id="outbid-side" class="sidebar-link" href="{{ url('outbid') }}">
                    <i class="fa fa-gavel"></i>
                    <span class="title"> Outbid </span>
                </a>
            </li>
               <li class="sidebar-item">
        
                <a id="favorite-side" class="sidebar-link" href="{{ url('favorites-bid') }}">
                    <i class="fa fa-heart"></i>
                    <span class="title"> Favourites </span>
                </a>
            </li>
              <li class="sidebar-item">
        
                <a id="order-side" class="sidebar-link" href="{{ url('order-list') }}">
                    <i class="fa fa-shopping-cart"></i>
                    <span class="title"> Order Form </span>
                </a>
            </li>
        </ul>
	</div>
</div>