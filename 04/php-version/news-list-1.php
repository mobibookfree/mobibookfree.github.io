<!doctype html>
<html ⚡>
<head>
<meta charset="utf-8">
<script async src="https://cdn.ampproject.org/v0.js"></script>
<script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
<script async custom-element="amp-social-share" src="https://cdn.ampproject.org/v0/amp-social-share-0.1.js"></script>
<script async custom-element="amp-accordion" src="https://cdn.ampproject.org/v0/amp-accordion-0.1.js"></script>
<script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js"></script>
<!--AMP HTML files require a canonical link pointing to the regular HTML. If no HTML version exists, it should point to itself.-->
<link rel="canonical" href="index.html">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i">
<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1,maximum-scale=1,user-scalable=no"><meta name="apple-mobile-web-app-capable" content="yes"/><meta name="apple-mobile-web-app-status-bar-style" content="black">
<style amp-custom><?php readfile( getcwd()."/styles/style.css"); ?></style>
<style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
</head>

	
<body>		
	<header>
		<button on="tap:sidebar.toggle" class="ampstart-btn caps m2 header-icon-1"><i class="fa fa-navicon"></i></button>
		<a href="index.php" class="header-logo"></a>
		<a href="contact.php" class="header-icon-2"><i class="fa fa-envelope-o"></i></a>
	</header>
		
	<amp-sidebar id="sidebar" layout="nodisplay" side="left">
		<div class="sidebar-header"><a class="sidebar-logo" href="index.php"><em>A new, elegant design</em></a></div>
		
		<ul class="menu">
			<li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
		</ul>
		<amp-accordion class="submenu">
			<section>
				<h4><i class="fa fa-cog"></i>Features</h4>
				<div>
					<a href="features-buttons.php"><i class="fa fa-angle-right"></i>Buttons</a>
					<a href="features-columns.php"><i class="fa fa-angle-right"></i>Columns</a>
					<a href="features-dividers.php"><i class="fa fa-angle-right"></i>Dividiers</a>
					<a href="features-headings.php"><i class="fa fa-angle-right"></i>Headings</a>
					<a href="features-inputs.php"><i class="fa fa-angle-right"></i>Inputs</a>
					<a href="features-quotes.php"><i class="fa fa-angle-right"></i>Quotes</a>
					<a href="features-type.php"><i class="fa fa-angle-right"></i>Typography</a>
				</div>
			</section>
		</amp-accordion>
		<amp-accordion class="submenu">
			<section>
				<h4><i class="fa fa-camera"></i>Gallery</h4>
				<div>
					<a href="gallery-round.php"><i class="fa fa-angle-right"></i>Round</a>
					<a href="gallery-square.php"><i class="fa fa-angle-right"></i>Square</a>
					<a href="gallery-wide.php"><i class="fa fa-angle-right"></i>Wide</a>
				</div>
			</section>
		</amp-accordion>
		<amp-accordion class="submenu">
			<section>
				<h4><i class="fa fa-image"></i>Portfolio</h4>
				<div>
					<a href="portfolio-1.php"><i class="fa fa-angle-right"></i>One Column</a>
					<a href="portfolio-2.php"><i class="fa fa-angle-right"></i>Two Columns</a>
					<a href="portfolio-item.php"><i class="fa fa-angle-right"></i>Selected Item</a>
				</div>
			</section>
		</amp-accordion>
		<amp-accordion class="submenu">
			<section>
				<h4><i class="fa fa-file-o"></i>Pages</h4>
				<div>
					<a href="page-error.php"><i class="fa fa-angle-right"></i>Error</a>
					<a href="page-soon.php"><i class="fa fa-angle-right"></i>Soon</a>
					<a href="page-profile-1.php"><i class="fa fa-angle-right"></i>Profile 1</a>
					<a href="page-profile-2.php"><i class="fa fa-angle-right"></i>Profile 2</a>
					<a href="page-timeline-1.php"><i class="fa fa-angle-right"></i>Timeline 1</a>
					<a href="page-timeline-2.php"><i class="fa fa-angle-right"></i>Timeline 2</a>
					<a href="page-testimonials.php"><i class="fa fa-angle-right"></i>Testimonials</a>
 
				</div>
			</section>
		</amp-accordion>
		<amp-accordion class="submenu">
			<section expanded>
				<h4 class="selected"><i class="fa fa-newspaper-o"></i>News</h4>
				<div>
					<a href="index-news.php"><i class="fa fa-angle-right"></i>News Home</a>
					<a href="news-cards.php"><i class="fa fa-angle-right"></i>News Cards</a>
					<a class="selected" href="news-list-1.php"><i class="fa fa-angle-right"></i>News List 1</a>
					<a href="news-list-2.php"><i class="fa fa-angle-right"></i>News List 2</a>
					<a href="news-post-1.php"><i class="fa fa-angle-right"></i>News Post 1</a>
					<a href="news-post-2.php"><i class="fa fa-angle-right"></i>News Post 2</a>
				</div>
			</section>
		</amp-accordion>
		<ul class="menu">
			<li><a href="videos.php"><i class="fa fa-youtube-play"></i>Videos</a></li>
			<li><a href="contact.php"><i class="fa fa-envelope"></i>Contact</a></li>
		</ul>
		<div class="sidebar-deco"></div>
		<amp-accordion class="submenu">
			<section>
				<h4><i class="fa fa-bolt"></i>AMP Media</h4>
				<div>
					<a href="amp-jwp.php"><i class="fa fa-angle-right"></i>JWP Player</a>
					<a href="amp-soundcloud.php"><i class="fa fa-angle-right"></i>SoundCloud</a>
					<a href="amp-carousel.php"><i class="fa fa-angle-right"></i>Carousel</a>
					<a href="amp-lightbox.php"><i class="fa fa-angle-right"></i>LightBox</a>
					<a href="amp-vimeo.php"><i class="fa fa-angle-right"></i>Vimeo</a>
					<a href="amp-youtube.php"><i class="fa fa-angle-right"></i>YouTube</a>
				</div>
			</section>
		</amp-accordion>
		<amp-accordion class="submenu">
			<section>
				<h4><i class="fa fa-bolt"></i>AMP Social</h4>
				<div>
					<a href="amp-facebook.php"><i class="fa fa-angle-right"></i>Facebook</a>
					<a href="amp-instagram.php"><i class="fa fa-angle-right"></i>Instagram</a>
					<a href="amp-pinterest.php"><i class="fa fa-angle-right"></i>Pinterest</a>
					<a href="amp-twitter.php"><i class="fa fa-angle-right"></i>Twitter</a>
					<a href="amp-social-share.php"><i class="fa fa-angle-right"></i>Social Share</a>
				</div>
			</section>
		</amp-accordion>
		<amp-accordion class="submenu">
			<section>
				<h4><i class="fa fa-bolt"></i>AMP Features</h4>
				<div>
					<a href="amp-accordion.php"><i class="fa fa-angle-right"></i>Accordion</a>
					<a href="amp-carousel.php"><i class="fa fa-angle-right"></i>Carousel</a>
					<a href="amp-fonts.php"><i class="fa fa-angle-right"></i>Fonts</a>
					<a href="amp-lists.php"><i class="fa fa-angle-right"></i>Lists</a>
					<a href="amp-maps.php"><i class="fa fa-angle-right"></i>Maps</a>
					<a href="amp-notifications.php"><i class="fa fa-angle-right"></i>Notifications</a>
				</div>
			</section>
		</amp-accordion>
		<div class="sidebar-deco"></div>
		<ul class="menu">
			<li><a href="https://twitter.com/iEnabled"><i class="fa fa-twitter"></i>Twitter</a></li>
			<li><a href="https://www.facebook.com/enabled.labs/"><i class="fa fa-facebook"></i>Facebook</a></li>
			<li><a href="https://plus.google.com/u/2/105775801838187143320"><i class="fa fa-google-plus"></i>Google +</a></li>
		</ul>
		<div class="sidebar-deco"></div>
		<em class="sidebar-copyright">Copyright Enabled. All Rights Reserved</em>
	</amp-sidebar>
	
	<div class="header-clear"></div>
	<div class="news-slider">
		<amp-carousel class="slider" width="600" height="435" layout="responsive" type="slides" autoplay loop delay="3000">
			<a href="#">
				<amp-img class="responsive-img" src="images/pictures/1.jpg" layout="fill"></amp-img>
				<div class="caption">
					<h4>The new iPhone is now invisible and never needs charging. It's just incredible!</h4>
				</div>
			</a>
			<a href="#">
				<amp-img class="responsive-img" src="images/pictures/2.jpg" layout="fill"></amp-img>
				<div class="caption">
					<h4>The new Samsung Galaxy acused of Global Warming after all units caught fire.</h4>
				</div>
			</a>
			<a href="#">
				<amp-img class="responsive-img" src="images/pictures/3.jpg" layout="fill"></amp-img>
				<div class="caption">
					<h4>Smartwatches are no longer selling so new trend stars with smart collars for cats</h4>
				</div>
			</a>
		</amp-carousel>
	</div>

	<div class="page-content-before"></div>
	<div class="page-content">

		<div class="material-box">
			<div class="news-thumbs">
				<a href="#" class="news-item">
					<amp-img class="responsive-img" src="images/pictures/1t.jpg" width="95" height="95" layout="responsive"></amp-img>
					<h5>Android 25 now Out</h5>
					<p>
						Donec libero turpis, rhoncus ornare ligula eget, accumsan tincidunt ex. 
					</p>
				</a>
				<a href="#" class="news-item">
					<amp-img class="responsive-img" src="images/pictures/2t.jpg" width="95" height="95" layout="responsive"></amp-img>
					<h5>iOS 31 is here</h5>
					<p>
						Donec libero turpis, rhoncus ornare ligula eget, accumsan tincidunt ex. 
					</p>
				</a>
				<a href="#" class="news-item">
					<amp-img class="responsive-img" src="images/pictures/3t.jpg" width="95" height="95" layout="responsive"></amp-img>
					<h5>Envato is awesome</h5>
					<p>
						Donec libero turpis, rhoncus ornare ligula eget, accumsan tincidunt ex. 
					</p>
				</a>
				<a href="#" class="news-item">
					<amp-img class="responsive-img" src="images/pictures/4t.jpg" width="95" height="95" layout="responsive"></amp-img>
					<h5>Enabled rocks mobiles</h5>
					<p>
						Donec libero turpis, rhoncus ornare ligula eget, accumsan tincidunt ex. 
					</p>
				</a>
			</div>
		</div>

		<div class="decoration decoration-margins"></div>

		<div class="news-strip">
			<h5 class="uppercase">Powered by Google AMP. And it's absolutely and awesomely fast!</h5>
			<amp-img src="images/pictures/4.jpg" layout="responsive" width="300" height="200"></amp-img>
			<div class="content">
				<p class="full-top color-gray-dark">
					It’s official, new operating systems and mobile devices now all support full CSS3 Support. 
					So most of the effects that needed jQuery we can now accomplish using CSS3 Transitions. 
					Faster, smoother, better, and much lighter on CPU’s. We're just waiting for Google to activate them.
				</p>
				<a class="right-text" href="#">Read More</a>
			</div>
		</div>

		<div class="decoration decoration-margins"></div>

		<div class="material-box">
			<div class="news-category">
				<p class="bg-green-dark">Mobile</p>
				<div class="bg-green-dark full-bottom"></div>
			</div>

			<div class="full-bottom">
				<div class="news-thumbs">
					<a href="#" class="news-item">
						<amp-img class="responsive-img" src="images/pictures/1t.jpg" width="95" height="95" layout="responsive"></amp-img>
						<h5>Android 25 now Out</h5>
						<p>
							Donec libero turpis, rhoncus ornare ligula eget, accumsan tincidunt ex. 
						</p>
					</a>
					<a href="#" class="news-item">
						<amp-img class="responsive-img" src="images/pictures/2t.jpg" width="95" height="95" layout="responsive"></amp-img>
						<h5>iOS 31 is here</h5>
						<p>
							Donec libero turpis, rhoncus ornare ligula eget, accumsan tincidunt ex. 
						</p>
					</a>
					<a href="#" class="news-item">
						<amp-img class="responsive-img" src="images/pictures/3t.jpg" width="95" height="95" layout="responsive"></amp-img>
						<h5>Envato is awesome</h5>
						<p>
							Donec libero turpis, rhoncus ornare ligula eget, accumsan tincidunt ex. 
						</p>
					</a>
					<a href="#" class="news-item">
						<amp-img class="responsive-img" src="images/pictures/4t.jpg" width="95" height="95" layout="responsive"></amp-img>
						<h5>Enabled rocks mobiles</h5>
						<p>
							Donec libero turpis, rhoncus ornare ligula eget, accumsan tincidunt ex. 
						</p>
					</a>
				</div>
				<div class="decoration"></div>
				<a href="#" class="button button-full center-text bg-green-dark full-bottom">More in Mobile</a>
			</div>
		</div>

		<div class="decoration decoration-margins"></div>

		<div class="material-box">
			<div class="news-category">
				<p class="bg-red-dark">Envato</p>
				<div class="bg-red-dark full-bottom"></div>
			</div>

			<div class="full-bottom">
				<div class="news-thumbs">
					<a href="#" class="news-item">
						<amp-img class="responsive-img" src="images/pictures/5t.jpg" width="95" height="95" layout="responsive"></amp-img>
						<h5>Android 25 now Out</h5>
						<p>
							Donec libero turpis, rhoncus ornare ligula eget, accumsan tincidunt ex. 
						</p>
					</a>
					<a href="#" class="news-item">
						<amp-img class="responsive-img" src="images/pictures/6t.jpg" width="95" height="95" layout="responsive"></amp-img>
						<h5>iOS 31 is here</h5>
						<p>
							Donec libero turpis, rhoncus ornare ligula eget, accumsan tincidunt ex. 
						</p>
					</a>
					<a href="#" class="news-item">
						<amp-img class="responsive-img" src="images/pictures/7t.jpg" width="95" height="95" layout="responsive"></amp-img>
						<h5>Envato is awesome</h5>
						<p>
							Donec libero turpis, rhoncus ornare ligula eget, accumsan tincidunt ex. 
						</p>
					</a>
					<a href="#" class="news-item">
						<amp-img class="responsive-img" src="images/pictures/8t.jpg" width="95" height="95" layout="responsive"></amp-img>
						<h5>Enabled rocks mobiles</h5>
						<p>
							Donec libero turpis, rhoncus ornare ligula eget, accumsan tincidunt ex. 
						</p>
					</a>
				</div>
				<div class="decoration full-bottom"></div>
				<a href="#" class="button button-full center-text bg-red-dark full-bottom">More in Envato</a>
			</div>	
		</div>

		<div class="decoration decoration-margins"></div>

		<div class="material-box">
			<div class="news-category">
				<p class="bg-blue-dark">Tech</p>
				<div class="bg-blue-dark full-bottom"></div>
			</div>

			<div class="full-bottom">
				<div class="news-thumbs">
					<a href="#" class="news-item">
						<amp-img class="responsive-img" src="images/pictures/9t.jpg" width="95" height="95" layout="responsive"></amp-img>
						<h5>Android 25 now Out</h5>
						<p>
							Donec libero turpis, rhoncus ornare ligula eget, accumsan tincidunt ex. 
						</p>
					</a>
					<a href="#" class="news-item">
						<amp-img class="responsive-img" src="images/pictures/5t.jpg" width="95" height="95" layout="responsive"></amp-img>
						<h5>iOS 31 is here</h5>
						<p>
							Donec libero turpis, rhoncus ornare ligula eget, accumsan tincidunt ex. 
						</p>
					</a>
					<a href="#" class="news-item">
						<amp-img class="responsive-img" src="images/pictures/2t.jpg" width="95" height="95" layout="responsive"></amp-img>
						<h5>Envato is awesome</h5>
						<p>
							Donec libero turpis, rhoncus ornare ligula eget, accumsan tincidunt ex. 
						</p>
					</a>
					<a href="#" class="news-item">
						<amp-img class="responsive-img" src="images/pictures/3t.jpg" width="95" height="95" layout="responsive"></amp-img>
						<h5>Enabled rocks mobiles</h5>
						<p>
							Donec libero turpis, rhoncus ornare ligula eget, accumsan tincidunt ex. 
						</p>
					</a>
				</div>
				<div class="decoration"></div>
				<a href="#" class="button button-full center-text bg-blue-dark full-bottom">More in Tech</a>
			</div>
		</div>
		
		<div class="decoration"></div>
			
		<div class="footer material-box">
			<a href="#" class="footer-logo"></a>
			<p class="boxed-text center-text">
				We aim to simplify your life by creating a beautiful and simple product that's feature rich and easy to use!
			</p>
			<div class="decoration decoration-margins"></div>
			<div class="footer-socials">
				<a href="https://www.facebook.com/enabled.labs/" class="facebook-bg"><i class="fa fa-facebook"></i></a>
				<a href="https://plus.google.com/u/2/105775801838187143320" class="google-bg"><i class="fa fa-google-plus"></i></a>
				<a href="https://twitter.com/iEnabled" class="twitter-bg"><i class="fa fa-twitter"></i></a>
				<a href="tel:+1-234-567-8901" class="phone-bg"><i class="fa fa-phone"></i></a>
				<a href="mailto:name@domain.com" class="mail-bg"><i class="fa fa-envelope"></i></a>
				<a href="#" class="bg-magenta-dark"><i class="fa fa-angle-up"></i></a>
				<div class="clear"></div>
			</div>
			<div class="decoration decoration-margins"></div>
			<p class="center-text">Copyright Enabled. All rights reserved.</p>
		</div>
	</div>

	
</body>
</html>