	
	<nav class="navbar navbar-expand-lg">
		<div class="container-fluid">
		  <!-- Brand/Logo -->
		   <a class="navbar-brand" href="{{('/')}}">
			<img src="{{asset('images/edu-x white.png')}}" alt="Edu-X Logo" height="70px" width="70px">
			 <div>Edu-X</div>
		  </a>
		  
		  <!-- Toggle button for mobile screens -->
		  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  
		  <!-- Navbar links and buttons -->
		  <div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav mx-auto">
			  <li class="nav-item">
				<a class="nav-link" href="{{route('student')}}">Students</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="{{route('partner')}}">Recruitment Partners</a> 
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="{{route('institutions')}}">Institutions</a>
			  </li>
				<li class="nav-item">
						<a class="nav-link">
							<div class="dropdown-container">
								<button class="dropdown-btn" id="dropdownBtn">
									Discover <i class="fa-solid fa-chevron-down"></i>
								</button>
								<ul class="dropdown-menu" id="dropdownMenu">
								<a href="{{route('student')}}"><li class="dropdown-item" >Student Services</li></a>
								<a href="{{route('events')}}"><li class="dropdown-item">Events</li></a>
								<a href="{{route('blogs-pages')}}"><li class="dropdown-item">Blog</li></a> 
													
								</ul>
							</div>
						</a>
				</li>
			</ul>
			<div class="d-flex">
			  <a href="{{route('student-login')}}" class="btn btn-custom me-2">Login</a>
			  <a href="{{route('student-register')}}" class="btn btn-custom">Register</a>
			</div>
		  </div>
		</div>
	  </nav>