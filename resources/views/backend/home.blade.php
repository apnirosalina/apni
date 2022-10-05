<!doctype html>
<html lang="en">
  <head>
  	<title>@yield('judul')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{asset('css/style.css')}}">
  </head>
  <body>

		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
				<div class="p-4 pt-5">
		  		<h1><a href="/" class="logo">ARM</a></h1>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">SMARTPHONE</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="/vivo">VIVO</a>
                </li>
                <li>
                    <a href="/Apple">APPLE</a>
                </li>
                <li>
                    <a href="/samsung">SAMSUNG</a>
                </li>
	            </ul>
	          </li>
	          <li>
	              <a href="#">TENTANG</a>
	          </li>
	          <li>
              <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">LAPTOP & KOMPUTER</a>
              <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="/macbook">MACBOOK</a>
                </li>
                <li>
                    <a href="/cpu_gaming">CPU GAMING</a>
                </li>
                <li>
                    <a href="/aksesoris_komputer">AKSESORIS KOMPUTER</a>
                </li>
              </ul>
	          </li>
	          <li>
              <a href="#">BANTUAN</a>
	          </li>
	          <li>
              <a href="/kontak">KONTAK</a>
	          </li>
			  <li>
              <a href="/user">USER</a>
	          </li>
			  <li>
			  <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
	          </li>
	        </ul>

	        <div class="mb-5">
						<h3 class="h6">Subscribe for newsletter</h3>
						<form action="#" class="colorlib-subscribe-form">
	            <div class="form-group d-flex">
	            	<div class="icon"><span class="icon-paper-plane"></span></div>
	              <input type="text" class="form-control" placeholder="Enter Email Address">
	            </div>
	          </form>
					</div>

	        <div class="footer">
	        	<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by Apni Rosalina Malau
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	        </div>

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        @yield('isi')
      </div>
		</div>

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
  </body>
</html>
