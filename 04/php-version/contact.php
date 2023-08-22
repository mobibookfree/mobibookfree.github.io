<!doctype html>
<html ⚡>
<head>
<meta charset="utf-8">
<script async src="https://cdn.ampproject.org/v0.js"></script>
<script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
<script async custom-element="amp-accordion" src="https://cdn.ampproject.org/v0/amp-accordion-0.1.js"></script>
<script async custom-element="amp-iframe" src="https://cdn.ampproject.org/v0/amp-iframe-0.1.js"></script>
<script async custom-template="amp-mustache" src="https://cdn.ampproject.org/v0/amp-mustache-0.2.js"></script>
<script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
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
			<section>
				<h4><i class="fa fa-newspaper-o"></i>News</h4>
				<div>
					<a href="index-news.php"><i class="fa fa-angle-right"></i>News Home</a>
					<a href="news-cards.php"><i class="fa fa-angle-right"></i>News Cards</a>
					<a href="news-list-1.php"><i class="fa fa-angle-right"></i>News List 1</a>
					<a href="news-list-2.php"><i class="fa fa-angle-right"></i>News List 2</a>
					<a href="news-post-1.php"><i class="fa fa-angle-right"></i>News Post 1</a>
					<a href="news-post-2.php"><i class="fa fa-angle-right"></i>News Post 2</a>
				</div>
			</section>
		</amp-accordion>
		<ul class="menu">
			<li><a href="videos.php"><i class="fa fa-youtube-play"></i>Videos</a></li>
			<li class="selected" ><a href="contact.php"><i class="fa fa-envelope"></i>Contact</a></li>
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

	<div class="page-content">

		<div class="material-box">
			<h3 class="ultrabold quarter-bottom">CONTACT US</h3>
			<p class="no-bottom">
				Fully working AMP Contact form, ready for you to use and enjoy
				at the same speed as your AMP Mobile Website.
			</p>
		</div>

		<div class="material-box">
			<form action-xhr="//www.domain.com/item/php/contact.php" method="POST" class="contactForm" target="_top" custom-validation-reporting="show-all-on-submit">
				<fieldset>
					<div class="formFieldWrap">
						<label class="field-title contactNameField" for="contactNameField">Full Name:<span>(required)</span>
						</label>
						<input type="text" name="contactNameField" value="" class="contactField" id="contactNameField" required  /><span visible-when-invalid="valueMissing" validation-for="name5"></span>
						<span visible-when-invalid="patternMismatch" validation-for="name5">
							Please enter your first and last name separated by a space (e.g. Jane Miller)
						</span>
					</div>
					<div class="formFieldWrap">
						<label class="field-title contactEmailField" for="contactEmailField">Email: <span>(required)</span>
						</label>
						<input type="text" name="contactEmailField" value="" class="contactField" id="contactEmailField" required /><span visible-when-invalid="valueMissing" validation-for="email5"></span>
						<span visible-when-invalid="typeMismatch" validation-for="email5"></span>
					</div>
					<div class="formTextareaWrap">
						<label class="field-title contactMessageTextarea" for="contactMessageTextarea">Message: <span>(required)</span>
						</label>
						<textarea name="contactMessageTextarea" class="contactTextarea" id="contactMessageTextarea"></textarea>
					</div>
					<div class="formSubmitButtonErrorsWrap contactFormButton">
						<input type="submit" class="buttonWrap button bg-green-dark contactSubmitButton ultrabold uppercase" value="Send Message" />
					</div>
				</fieldset>
				<div submit-success>
					<template type="amp-mustache">
						Success! Thanks {{name}} , we'll get back to you shortly.
					</template>
				</div>
				<div submit-error>
					<template type="amp-mustache">
						Error! {{message}}
					</template>
				</div>
			</form>
		</div>

		<div class="decoration"></div>

		<div class="material-box">
			<h5>Contact Information</h5>
			<a href="#" class="contact-icon"><i class="fa fa-phone"></i>+123 456 7890</a>
			<a href="#" class="contact-icon"><i class="fa fa-comments"></i>+123 456 7890</a>
			<a href="#" class="contact-icon"><i class="fa fa-fax"></i>+123 456 7890</a>
			<a href="#" class="contact-icon"><i class="fa fa-envelope"></i>mail@domain.com</a>
			<a href="#" class="contact-icon"><i class="fa fa-facebook"></i>enabled.labs</a>
			<a href="#" class="contact-icon no-bottom"><i class="fa fa-twitter"></i>@iEnabled</a>
		</div>

		<div class="decoration"></div>

		<div class="material-box">
			<h5>Postal Information</h5>
			<p class="no-bottom">
				PO Box 22161 Street Collins East<br>
				PO Box 16122 Collins Street West<br>
				Victoria 8007 Australia<br>
			</p>
		</div>
		<div class="decoration"></div>

		<div class="material-box">
			<h5>Envato Headquarters</h5>
			<p class="no-bottom">
				121 King Street, Melbourne<br>
				Victoria 3000 Australia
			</p>
		</div>

		<div class="decoration"></div>
		<amp-iframe class="full-bottom" width="600" height="400" layout="responsive" sandbox="allow-scripts allow-same-origin allow-popups" frameborder="0" src="https://maps.google.com/?ie=UTF8&ll=47.595131,-122.330414&spn=0.006186,0.016512&t=h&z=17&output=embed"></amp-iframe>

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