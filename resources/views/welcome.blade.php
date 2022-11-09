<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">

			<title>Joinready Test</title>

			<!-- Fonts -->
			<link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
      <link type="text/css"  href="{{ asset('app.css') }}" rel="stylesheet">

			<style>
					body {
							font-family: 'Nunito', sans-serif;
					}
			</style>
	</head>
	<body class="antialiased">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container px-4">
          <a class="navbar-brand" href="#page-top">Joinready Test</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ms-auto">
                  <li class="nav-item"><a class="nav-link" href="#about">Usuarios</a></li>
              </ul>
          </div>
      </div>
    </nav>
		<section id="users">
      <div class="container px-4">
          <div class="row gx-4 justify-content-center">
              <div class="col-lg-8">
                  <h2>Lista de usuarios</h2>
                  {{users}}
                  <p class="lead">This is a great place to talk about your webpage. This template is purposefully unstyled so you can use it as a boilerplate or starting point for you own landing page designs! This template features:</p>
                  <ul>
                      <li>Clickable nav links that smooth scroll to page sections</li>
                      <li>Responsive behavior when clicking nav links perfect for a one page website</li>
                      <li>Bootstrap's scrollspy feature which highlights which section of the page you're on in the navbar</li>
                      <li>Minimal custom CSS so you are free to explore your own unique design options</li>
                  </ul>
              </div>
          </div>
      </div>
    </section>
	</body>
  <footer class="py-5 bg-dark">
    <div class="container px-4"><p class="m-0 text-center text-white">@Daniel Grisales</p></div>
  </footer>
</html>
