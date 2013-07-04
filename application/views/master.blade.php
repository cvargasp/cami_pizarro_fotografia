<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Cami Pizarro Fotografía</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	{{ HTML::style('css/style.css') }}
	{{ HTML::style("css/bootstrap-responsive.css"); }}
	{{ HTML::style("css/bootstrap.css"); }}
	{{ HTML::script("js/jquery-2.0.2.js"); }}
	{{ HTML::script("js/bootstrap.js"); }}
</head>
<body>
@yield("content")
</body>
	<div class="navbar navbar-fixed-bottom">	
		<div class="navbar-inner">
			<div class="container"  style="width: 98%;">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<li class="brand" style="font-family:Euphoria Script; font-size:20pt;">Camila Pizarro</li>
				<div class="nav-collapse">
					<ul class="nav">
						<li><a href="/"class=''><i class="icon-home"></i></a></li>
						<li class="dropup">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								PORTFOLIO
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#1">Matrimonio</a></li>
								<li><a href="#2">Deportivo</a></li>
								<li><a href="#3">Bandas</a></li>
							</ul>
						</li>
						<li><a href="/about">ABOUT</a></li>
						<li><a href="/contact">CONTACT</a></li>
						
					</ul>
				</div>
			</div>
		</div>
	</div>

<!--<footer id="footer">
		<ul class="nav nav-pills">
			<li>
    			<a href="/"class=''><i class="icon-home"></i></a>
  			</li>
  			<li>
    			<a href="/portfolio">PORTFOLIO</a>
  			</li>
  			<li>
    			<a href="/about">ABOUT</a>
  			</li>
  			<li>
    			<a href="/contact">CONTACT</a>
  			</li>
		</ul>



		<ul>
			<a href="/"class=''><i class="icon-home"></i></a>
			<li>{{HTML::link("portfolio", "PORTFOLIO") }}</li>			
			<li>{{HTML::link("about", "ABOUT") }}</li>
			<li>{{HTML::link("contact", "CONTACT") }}</li>
		</ul>-->

	</footer>
</html>
