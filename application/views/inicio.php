<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Encontre mais Obras conosco!</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Appload Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="{base_url}assets/css/style.css" type="text/css" rel="stylesheet" media="all">
<link href="{base_url}assets/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="{base_url}assets/css/styles.css?v=1.6" type="text/css" rel="stylesheet" media="all">
<link rel="icon" href="{base_url}assets/images/favicon.ico" type="image/x-icon"/>
<!-- js -->
<script data-main="{base_url}assets/js/boot.js" src="{base_url}assets/js/vendor/require.js"/></script>
<script src="{base_url}assets/js/vendor/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
	<body class="cbp-spmenu-push">
		<!-- header -->
		<div class="header-bg">
					<section class="navigation">
							<div class="container-fluid">
								<div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
								  <nav class="pull">
									<ul class="nav">
									  <li><a href="#home" class="scroll">Home</a></li>
									  <li><a href="#about" class="scroll">Sobre</a></li>
									  <li><a href="#services" class="scroll">Serviços</a></li>
									  <li><a href="#features" class="scroll">Características</a></li>
									   <li><a href="#pricing" class="scroll">Preço</a></li>
									    <li><a href="#mail" class="scroll">Contato</a></li>
									</ul>
								  </nav>
								</div>
							</div>
						</section>
						<div class="header-top">
							<div class="container">
								<div class="head-logo">
									<a href="index.html"><img src="{base_url}/assets/images/logo 2.png"></a>
								</div>
								<div class="top-nav">
									<section class="hero fa-navicon fa-2x nav_slide_button" id="hero">
										<a href="#"><img src="{base_url}/assets/images/menu-icon.png" alt=""></a>
									</section>	
								</div>	
								<div class="clearfix"> </div>
							</div>
						</div>
			<div class="banner-info">
				<!-- container -->
				<div class="container">
					<div class="col-md-5 slid">
						<!--- banner Slider starts Here --->
							<script src="{base_url}/assets/js/responsiveslides.min.js"></script>
						 <script>
							// You can also use "$(window).load(function() {"
							$(function () {
							  // Slideshow 4
							  $("#slider4").responsiveSlides({
								auto: true,
								pager: true,
								nav: true,
								speed: 500,
								namespace: "callbacks",
								before: function () {
								  $('.events').append("<li>before event fired.</li>");
								},
								after: function () {
								  $('.events').append("<li>after event fired.</li>");
								}
							  });
						
							});
						  </script>
						<!----//End-slider-script---->
						<div  id="top" class="callbacks_container">
							<ul class="rslides" id="slider4">
								<li>
									<div class="mobile-device">
										<img src="{base_url}/assets/images/mobile1.png" alt="" />
									</div>
								</li>
								<li>
									<div class="mobile-device">
										<img src="{base_url}/assets/images/img3.png" alt="" />
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-7 banner-info-left">
						<h2>O App <span>EncontreObras</span> vai impulsionar as suas vendas.</h2>
						<p>Deixe os seus vendedores fazerem o que mais sabem. E deixe o serviço custoso de encontrar novos prospects por nossa conta. O App lista todas as obras da sua região, com atualização diária e com detalhes.</p>
						<div class="banner-buttons">
							<!-- <div class="banner-button">
								<a href="#"><img src="{base_url}/assets/images/1.png" alt="" /></a>
							</div> -->
							<div class="banner-button green-button">
								<a href="#"><img src="{base_url}/assets/images/2.png" alt="" /></a>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<!-- //container -->
			</div>
		</div>
		<!-- //header -->
		<!-- banner-bottom -->
		<div id="services" class="banner-bottom">
			<!-- container -->
			<div class="container">
				<div class="banner-text">
					<h3>Services</h3>
					<p>Ut mollis rhoncus porttitor. Nulla facilisi. Nulla eget est fringilla, malesuada ligula non, scelerisque enim. Fusce dui ex, accumsan at viverra nec, suscipit eget tortor.</p>
				</div>
				<div class="banner-bottom-grids">
					<div class="col-md-4 banner-bottom-grid">
						<div class="services-icon">
							<span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>
						</div>
						<h4>Aliquam nulla mauris</h4>
						<p>Lorem Ipsum is simply Ipsum has been the industry's text of the printing and typesetting industry. </p>
					</div>
					<div class="col-md-4 banner-bottom-grid red">
						<div class="services-icon">
							<span class="glyphicon glyphicon-th-large glyphicon-phone" aria-hidden="true"></span>
						</div>
						<h4>Mauris pellentesque</h4>
						<p>Lorem Ipsum is simply Ipsum has been the industry's text of the printing and typesetting industry. </p>
					</div>
					<div class="col-md-4 banner-bottom-grid green">
						<div class="services-icon">
							<span class="glyphicon glyphicon-th-large glyphicon-thumbs-up" aria-hidden="true"></span>
						</div>
						<h4>Praesent vitae quam</h4>
						<p>Lorem Ipsum is simply Ipsum has been the industry's text of the printing and typesetting industry. </p>
					</div>
					<div class="clearfix"> </div>
				</div>	
			</div>
			<!-- //container -->
		</div>
		<!-- //banner-bottom -->
		<!-- about -->
		<div id="about" class="about">
			<!-- container -->
			<div class="container">
				<div class="about-info">
					<h3>About Us</h3>
					<p class="caption">Ut mollis rhoncus porttitor. Nulla facilisi. Nulla eget est fringilla, malesuada ligula non, scelerisque enim. Fusce dui ex, accumsan at viverra nec, suscipit eget tortor.</p>
					<p class="a-text">Mauris pellentesque augue a vulputate rutrum. Praesent vitae quam nec ex commodo tincidunt. Vivamus tincidunt porta rutrum. Suspendisse potenti. Maecenas interdum, ligula condimentum varius vestibulum
						metus turpis dapibus leo, vitae vestibulum sapien ipsum et quam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas non scelerisque arcu. Suspendisse commodo mi tempor 
						purus accumsan consequat.
					</p>
				</div>
			</div>
			<!-- //container -->
		</div>
		<!-- //about -->
		<!-- features -->
		<div id="features" class="features">
			<!-- container -->
			<div class="container">
				<div class="features-info">
					<h3>Features</h3>
					<p>Ut mollis rhoncus porttitor. Nulla facilisi. Nulla eget est fringilla, malesuada ligula non, scelerisque enim. Fusce dui ex, accumsan at viverra nec, suscipit eget tortor.</p>
				</div>
				<div class="features-grids">
					<div class="col-md-7 features-right">
						<h4>Different types of features available here :
						</h4>
						<div class="features-right-grids">
							<div class="features-right-grid right-top">
								<div class="design-left"> </div>
								<div class="design-right">
									<h5>Quisque rutrum, purus</h5>
									<p>Mauris pellentesque augue a vulputate</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="features-right-grid right-middle-top">
								<div class="design-left easy"> </div>
								<div class="design-right">
									<h5>Sed mattis tristique</h5>
									<p>Mauris pellentesque augue a vulputate</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="features-right-grid right-middle">
								<div class="design-left developer"> </div>
								<div class="design-right">
									<h5>Maecenas sodales</h5>
									<p>Mauris pellentesque augue a vulputate</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="features-right-grid right-bottom">
								<div class="design-left fully"> </div>
								<div class="design-right">
									<h5>Fully Responsive</h5>
									<p>Duis bibendum diam non erat facilaisis tincidunt. </p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
					<div class="col-md-5 slid">
							<!--- banner Slider starts Here --->
							 <script>
								// You can also use "$(window).load(function() {"
								$(function () {
								  // Slideshow 4
								  $("#slider3").responsiveSlides({
									auto: true,
									pager: true,
									nav: true,
									speed: 500,
									namespace: "callbacks",
									before: function () {
									  $('.events').append("<li>before event fired.</li>");
									},
									after: function () {
									  $('.events').append("<li>after event fired.</li>");
									}
								  });
							
								});
							  </script>
							<!----//End-slider-script---->
							<div  id="top" class="callbacks_container">
								<ul class="rslides" id="slider3">
									<li>
										<div class="mobile-device features-device">
											<img src="{base_url}/assets/images/mobile.png" alt="" />
										</div>
									</li>
									<li>
										<div class="mobile-device green-device features-device">
											<img src="{base_url}/assets/images/mobile3.png" alt="" />
										</div>
									</li>
								</ul>
							</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!-- //container -->
		</div>
		<!-- //features -->
		<!-- plans -->
		<div id="pricing" class="plans">
			<!-- container -->
			<div class="container">
				<h3>Pricing</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
				<div class="plans-grids">
					<div class="plans-grid">
						<div class="plan-text">
							<a href="#">$ <span>25</span></a>
							<p>/month</p>
						</div>
						<div class="plans-grid-bottom">
							<div class="plans-grid-head">
								<h4>Basic</h4>
								<span>Description goes here</span>
							</div>
							<p>Feature 1</p>
							<p>Feature 2</p>
							<p>Feature 3</p>
							<p>Feature 4</p>
							<div class="plan-button">
								<a class="signup play-icon popup-with-zoom-anim" href="#small-dialog2">Purchase</a>
							</div>
						</div>
					</div>
					<div class="plans-grid">
						<div class="plan-text">
							<a href="#">$ <span>50</span></a>
							<p>/month</p>
						</div>
						<div class="plans-grid-bottom">
							<div class="plans-grid-head">
								<h4>Standard</h4>
								<span>Description goes here</span>
							</div>
							<p>Feature 1</p>
							<p>Feature 2</p>
							<p>Feature 3</p>
							<p>Feature 4</p>
							<div class="plan-button">
								<a class="signup play-icon popup-with-zoom-anim" href="#small-dialog2">Purchase</a>
							</div>
						</div>
					</div>
					<div class="plans-grid">
						<div class="plan-text">
							<a href="#">$ <span>75</span></a>
							<p>/month</p>
						</div>
						<div class="plans-grid-bottom">
							<div class="plans-grid-head">
								<h4>Deluxe</h4>
								<span>Description goes here</span>
							</div>
							<p>Feature 1</p>
							<p>Feature 2</p>
							<p>Feature 3</p>
							<p>Feature 4</p>
							<div class="plan-button">
								<a class="signup play-icon popup-with-zoom-anim" href="#small-dialog2">Purchase</a>
							</div>
						</div>
					</div>
					<div class="plans-grid">
						<div class="plan-text">
							<a href="#">$ <span>99</span></a>
							<p>/month</p>
						</div>
						<div class="plans-grid-bottom">
							<div class="plans-grid-head">
								<h4>Premium</h4>
								<span>Description goes here</span>
							</div>
							<p>Feature 1</p>
							<p>Feature 2</p>
							<p>Feature 3</p>
							<p>Feature 4</p>
							<div class="plan-button">
								<a class="signup play-icon popup-with-zoom-anim" href="#small-dialog2">Purchase</a>
								<!-- script-for-menu -->
									 <script>
									   $( "span.menu" ).click(function() {
										 $( "ul.nav1" ).slideToggle( 300, function() {
										 // Animation complete.
										  });
										 });
									</script>
								<!-- /script-for-menu -->
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!-- //container -->
		</div>
		<!-- //plans -->
		<!-- mail -->
		<div id="mail" class="mail">
			<!-- container -->
			<div class="container">
				<div class="mail-info">
					<h3>Fale Conosco</h3>
					<p>Ut mollis rhoncus porttitor. Nulla facilisi. Nulla eget est fringilla, malesuada ligula non, scelerisque enim. Fusce dui ex, accumsan at viverra nec, suscipit eget tortor.</p>
				</div>
				<div class="mail-grids">
					<div class="col-md-6 mail-grid-left">
						<h3>Endereço</h3>
						<h5>Cras porttitor imperdiet volutpat nulla malesuada lectus eros <span>ut convallis felis consectetur ut </span></h5>
						<h4>Headquarters</h4>
						<p>123 T. Globel Place.
							<span>CG 09-123</span>
							Mexico, B.A. 4567
						</p>
						<h4>Get In Touch</h4>
						<p>Telephone: +1 234 567 9871
							<span>FAX: +1 234 567 9871</span>
							E-mail: <a href="mailto:info@example.com">mail@example.com</a>
						</p>
					</div>
					<div class="col-md-6 contact-text">
						<form>
							<input type="text" placeholder="Name" required="">
							<input type="text" placeholder="Email" required="">
							<input type="text" placeholder="Subject" required="">
							<textarea placeholder="Message" required=""></textarea>
							<input type="submit" value="SEND">
						</form>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!-- //container -->
		</div>
		<!-- //mail -->
		<!-- footer -->
		<div class="footer">
			<!-- container -->
			<div class="container">
				<div class="footer-info">
					<img src="{base_url}/assets/images/8.png" alt="" />
					<h3>Fique sempre sabendo das nossas novidades!</h3>
					<p>Inscreva-se em nossa newsletter para ser notificado sobre nossas atualizações e novidades.</p>
					<form>
						<input type="text" value="Your email address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your email address';}">
						<input type="submit" value="Subscribe">
						<div class="clearfix"> </div>
					</form>
				</div>
				<div class="copyright">
					<p> © 2016 Encontre Obras. Todos os direitos reservados | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
				</div>
			</div>
			<!-- //container -->
		</div>
		<!-- //footer -->
		<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
									<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- content-Get-in-touch -->
	</body>
</html>