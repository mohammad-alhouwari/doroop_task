<!DOCTYPE HTML>
{{-- {{ Route::is('about') ? 'active' : '' }} --}}
<html>
	<head>
		<title>@yield('title')</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />
		<noscript><link rel="stylesheet" href="{{asset('assets/css/noscript.css')}}" /></noscript>
	</head>
	<body class="is-loading">

		<!-- Wrapper -->
			<div id="wrapper" class="fade-in">

				<!-- Intro -->
					<div id="intro">
						<h1>محمد الحواري</h1>
						<p>محمد الحواري، مبرمج ويب متخصص، خبرة في تطوير مواقع وتطبيقات الويب. <br> حلول مبتكرة وموثوقة.
							<a href="https://github.com/mohammad-alhouwari">GitHub</a>
							و
							<a href="https://www.linkedin.com/in/mohammad-alhouwari-131332208/">LinkedIn</a>
							. يمكنكم التواصل معي من خلال </p>
						<ul class="actions">
							<li><a href="#header" class="button icon solo fa-arrow-down scrolly">Continue</a></li>
						</ul>
					</div>

				<!-- Header -->
					<header id="header">
						<a href="https://github.com/mohammad-alhouwari" class="logo">الإبتكار</a>
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul class="links">
							<li class="{{ Route::is('home') ? 'active' : '' }}"><a href="{{route('home')}}">الرئيسية</a></li>
							<li class="{{ Route::is('viewBlog') ? 'active' : '' }}"><a href="#">المقال</a></li>
							{{-- <li><a href="elements.html">Elements Reference</a></li> --}}
						</ul>
						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="https://www.facebook.com/profile.php?id=100003942219352" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="https://www.linkedin.com/in/mohammad-alhouwari-131332208/" class="icon fa-linkedin"><span class="label">Instagram</span></a></li>
							<li><a href="https://github.com/mohammad-alhouwari" class="icon fa-github"><span class="label">GitHub</span></a></li>
						</ul>
					</nav>
