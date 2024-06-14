<!DOCTYPE HTML>
<!--
	Future Imperfect by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Tech Rating</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{url('assets/css/main.css') }}" />
	</head>
	<body class="single is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="{{url('/')}}">TECH RATING</a></h1>
						<nav class="links">
							<ul>
								<li><a href="{{ url('/') }}">Início</a></li>
								<li><a href="{{ url('/blog/categoria') }}">Categoria</a></li>
								<li><a href="{{ url('/blog/autor') }}">Autor</a></li>
							</ul>
						</nav>
						<nav class="main">
							<ul>
								<li class="search">
									<a class="fa-search" href="#search">Buscar</a>
									<form id="search" method="get" action="#">
										<input type="text" name="query" placeholder="Search" />
									</form>
								</li>
								<li class="menu">
									<a class="fa-bars" href="#menu">Menu</a>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Menu -->
					<section id="menu">

						<!-- Search -->
							<section>
								<form class="search" method="get" action="#">
									<input type="text" name="query" placeholder="Search" />
								</form>
							</section>

						<!-- Links -->
							<section>
								<ul class="links">
									<li>
										<a href="{{ url('/login')}}">
											<h3>Login</h3>
											<p>Entrar no sistema</p>
										</a>
									</li>
									<li>
										<a href="{{ url('/register')}}">
											<h3>Registrar</h3>
											<p>Faça o seu registro</p>
										</a>
									</li>
									<!--
                                    <li>
										<a href="#">
											<h3>Feugiat veroeros</h3>
											<p>Phasellus sed ultricies mi congue</p>
										</a>
									</li>
									<li>
										<a href="#">
											<h3>Etiam sed consequat</h3>
											<p>Porta lectus amet ultricies</p>
										</a>
									</li>

                                -->
                                </ul>
							</section>

						<!-- Actions -->
							<section>
								<ul class="actions stacked">
									<li><a href="{{ url('/login')}}" class="button large fit">Log In</a></li>
								</ul>
							</section>

					</section>
<!-- Carrosel
                    <section>
                        <div id="carouselExample" class="carousel slide">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="https://imgs.casasbahia.com.br/55065636/2g.jpg" class="d-block w-10" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="..." class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="https://imgs.casasbahia.com.br/55065636/3g.jpg" class="d-block w-10" alt="...">
                              </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                          </div>
                    </section>-->

                    <!-- Main -->


                <div id="main">


                        @yield('content')
						<!-- Post -->

					</div>

				<!-- Footer -->
					<section id="footer">
						<ul class="icons">
							<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon solid fa-rss"><span class="label">RSS</span></a></li>
							<li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
						</ul>
						<p class="copyright">&copy; Untitled. Design: <a href="http://html5up.net">HTML5 UP</a>. Images: <a href="http://unsplash.com">Unsplash</a>.</p>
					</section>

			</div>

		<!-- Scripts -->
			<script src="{{ url('assets/js/jquery.min.js') }}"></script>
			<script src="{{ url('assets/js/browser.min.js') }}"></script>
			<script src="{{ url('assets/js/breakpoints.min.js') }}"></script>
			<script src="{{ url('assets/js/util.js') }}"></script>
			<script src="{{ url('assets/js/main.js') }}"></script>

	</body>
</html>
