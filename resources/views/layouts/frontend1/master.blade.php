<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link rel="stylesheet" href="/css/master.css">
</head>

<body>
	<div class="header">
	</div>
	<div id="navbar">
	<a href="#contact">Contact us</a>
	<a href="#content1">About us</a>
	<a href="#menu">Menu</a>
	<a href="#banner">Home</a>

	</div>
	<section class ="banner" id ="banner">
		<div class="main-content">
		<span class="colorchange">Coffee Time!</span><br>
			it's always time for a coffee.
			</div>
		<div class="btn">
		<a href="#menu" class="btn-full">show menu</a>
		<a href="#home" class="btn-nav">show me more</a>
			</div>
		</section>
	
	
@yield('content')
	
	<div class="footer">
	<p> Coffee Time!</p>
	<p> Its always time for a coffee!!</p>
	</div>
	
</body>
	<script src="/js/main.js"></script>
</html>
