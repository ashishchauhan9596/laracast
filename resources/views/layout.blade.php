<!DOCTYPE html>
<html>
<head>
	<title>@yield('title', 'My First Website')</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <style>	
		.card{
			padding: 5px;
			height: 100%;
		}
		.is-complete{
			text-decoration: line-through;
		}
    </style>
</head>
<body>
	
	{{-- <ul>
		<li><a href="/">Home</a></li>
		<li><a href="/contact">Contact Us</a></li>
		<li><a href="/about">About Us</a></li>
		<li><a href="/projects">List Projects</a></li>
		<li><a href="/projects/create">Create Projects</a></li>
	</ul> --}}
	<div class="container is-fluid">
		<nav class="navbar-item" role="navigation" aria-label="main navigation">
		  	<div class="navbar-brand">
			    <a class="navbar-item" href="https://bulma.io">
			      <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
			    </a>

			    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
			      <span aria-hidden="true"></span>
			      <span aria-hidden="true"></span>
			      <span aria-hidden="true"></span>
			    </a>
		  	</div>

			<div id="navbarBasicExample" class="navbar-menu">
			    <div class="navbar-end">
					<a class="navbar-item" href="/">
						Home
					</a>

			      	<div class="navbar-item has-dropdown is-hoverable">
				        <a class="navbar-link">
				          	Project
				        </a>

				        <div class="navbar-dropdown">
							<a class="navbar-item" href="/projects">
								List Projects
							</a>
							<a class="navbar-item" href="/projects/create">
								Add Projects
							</a>
			        	</div>
			      	</div>
					<a class="navbar-item" href="/contact">
						Contact Us
					</a>
					<a class="navbar-item" href="/about">
						About Us
					</a>
			    </div>
		  	</div>
		</nav>
	</div>
	<section class="section">
	    <div class="container">
			<h1 class="title">@yield('title', 'My First Website')</h1>
			
			@yield('content')
	    </div>
  	</section>

</body>
</html>