@extends('layouts.frontend1.master')
@section('content')

<section class="home" id="home">
	<div class="row">
		<div class="col150">
			<p><font size="+4"><b>Delicious Coffee. Housemade Food.</b></font></p>
			
			<p> Coffee is a brewed drink prepared from roasted coffee beans, the seeds of berries from certain Coffea species. When coffee berries turn from green to bright red in color – indicating ripeness – they are picked, processed, and dried.Dried coffee seeds (referred to as "beans") are roasted to varying degrees, depending on the desired flavor. Roasted beans are ground and then brewed with near-boiling water to produce the beverage known as coffee.</p>
			<br>
			<p>Coffee provides a complex blend of different flavours, which together produce a range of sensory experiences. The sensory profile of a cup of coffee varies according to a number of factors: the type and blend of coffee beans; geographical source; roasting method; and method of preparation. The variation in these aspects will impact the overall sensory experience obtained from a cup of coffee during both the preparation and consumption of the coffee.</p>
		</div>
		<div class="col150">
		<div class="imgbox">
			<img src="assets/kopi1.jpg" alt="img" width="450">
			</div>
		</div>
		</div>
	</section>
	
	<section class="menu" id="menu">
	<div class="title">
		<h2 class="titletext">Our<span> M</span>enu</h2>
		</div>
		
	<div class="content">
	<div class="box">
	<div class="imgBx">
		<img src="assets/kopi2.jpg" alt="img" width="300">
		</div>
	<div class="text2">
		<h2>Iced Mocca</h2>
		</div>
		</div>
	<div class="box">
	<div class="imgBx">
		<img src="assets/kopi6.jpg" alt="img" width="300">
		</div>
	<div class="text2">
		<h2>Iced Latte</h2>
		</div>
	
		</div>
	<div class="box">
	<div class="imgBx">
		<img src="assets/americano.jpg" alt="img">
		</div>
	<div class="text2">
		<h2>Iced Americano</h2>
		</div>
	
		</div>
	
	<div class="box">
	<div class="imgBx">
		<img src="assets/affogato.jpg" alt="img">
		</div>
	<div class="text2">
		<h2>Iced Affogato</h2>
		</div>
		</div>
		
		<div class="box">
	<div class="imgBx">
		<img src="assets/cappucino.jpg" alt="img" width="300">
		</div>
	<div class="text2">
		<h2>Coffee Cappucino</h2>
		</div>
		</div>
	<div class="box">
	<div class="imgBx">
		<img src="assets/machiato.jpg" alt="img" width="450">
		</div>
	<div class="text2">
		<h2>Coffee Machiato</h2>
		</div>
		</div>
		<div class="box">
	<div class="imgBx">
		<img src="assets/cortado.jpeg" width="300">
		</div>
	<div class="text2">
		<h2>Coffee Cortado</h2>
		</div>
	
		</div>
	</div>
</section>
	
<section class="content1" id="content1">
	<div class="text1">
	<h3><i>See what our Coffee Shop look like </i></h3>
	</div>
	<br>
	<div class="text3">
	Coffee Time : cozy place to sit with the best coffee in town!!
	</div>
	<br>
	

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="assets/bg1.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="assets/bg2.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="assets/bg3.jpg" style="width:100%">
</div>

<a class="prev" onclick="plusSlides(1)">&#10094;</a>
<a class="next" onclick="plusSlides(-1)">&#10095;</a>

<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
	
	<br>
		<div class="row">
		<div class="col150">
		<img src="assets/locato.png" style="width:30"> Tanjung Duren Utara no 890
		<br>
		<img src="assets/email.png" style="width: 26">Coffeetime@gmail.com
		<br>
		<img src="assets/instagram.png" style="width: 26">@coffee.time
		<br>
		<img src="assets/phone-call (1).png" style="width: 26"> 021-650789
		
		</div>
		<div class="col150">
		<div class="imgbox">
			<img src="assets/location.jpg" width="450">
			</div>
		</div>
		</div>
	</section>
	
	<section class="contact" id="contact">
	<div class="title" >
		<h2 class="titletext">Contact us</h2>
		</div>
		<div class="contactform">
		<h4>Send Message</h4>
			<div class="inputbox">
			<input type="text" placeholder="Name">
			</div>
			<div class="inputbox">
			<input type="text" placeholder="Email">
			</div>
			<div class="inputbox">
				<textarea placeholder="Messages"></textarea>
			</div>
			<div class="inputbox">
			<input type="submit" value="Send">
			</div>
		</div>
	</section>
@stop