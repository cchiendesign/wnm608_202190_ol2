<?php 

include_once "lib/php/functions.php";
include_once "parts/templates.php";


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cool Website</title>
	<?php include "parts/meta.php"; ?>
	<link rel="stylesheet" href="css/about.css">

</head>


<body class="flush">
	<?php include "parts/navbar.php"; ?>
	<div class="banner about-banner"></div>
	<div class="container">
		
		<section class="container-about">
		<div class="descript flex justify-between">
			<div class="about">
				<h2>菓 Wagashi Store</h2>
				<h5>The Authentic Japanese Confectionery</h5>
			
				<article>
					WAGASHI is traditional Japanese confectionery. Its delicate taste / texture and beautiful appearance has been attracting many people for a long time, and we believe WAGASHI makes people feel happy and at peace. We keep opening up the possibilities of WAGASHI and keep producing the most delicious and quality products across borders and generations.
				</article>
				<article>
					Our first US store opened in New Jersey in 1995 and since then, we’ve opened stores in New York, California and Hawaii to spread the beauty of WAGASHI to people in the USA. The expansion has been not only in the USA but also globally and now our products are available at our stores in the UK, Taiwan, Singapore, Thailand and Vietnam.
				</article>
				<h5>
					<ul>
						<li>The taste of wagashi in the store may not be the same every day, and we will adjust it according to the season and ingredients.</li>
					</ul>
				</h5>
			
			</div>
			<div class="info">
				<h4>INFO</h4>
				<ul class="contact-lists">
					<li><i></i>Monday - Friday</li>
					<li>9:00 - 16:00 GMT+8</li>
					<li>
						509 Madison Avenue, New York, 10022, U.S.A.</li>
					<li>+1 (212) 489-3747</li>
					<li class="social-media"><i></i><i></i><i></i></li>

				</ul>
			</div>
		</div>
		<div class="map">
			<iframe loading="lazy" style="border: 0;" src="https://maps.google.com/maps?q=%E5%A4%A9%E4%B8%BB%E6%95%99%E8%BC%94%E4%BB%81%E5%A4%A7%E5%AD%B8&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="450" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
		</div>
	</section>
		<section>
			<div class="container card soft">
		        <h2>Recommended Wagashi</h2>
		        <?php recommendedAnything(); ?>
		    </div>
		</section>

	</div>
	<footer class="display-flex flex-align-center flex-justify-center">
		<div class="">&copy; Copyright 2022 - chienchien.site</p>
	</footer>
</body>



<script src="zoom.js"></script>
</html>