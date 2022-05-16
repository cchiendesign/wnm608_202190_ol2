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
	<link rel="stylesheet" href="css/index.css">

</head>


<body>
	<?php include "parts/navbar.php"; ?>
	<div class="banner index-banner"></div>
	<div class="container">
		<section>
			<!-- <img src="img/sakuragoromo.jpeg" alt=""> -->
			<div class="intro about">
				<h1>About us</h1>
				<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum nisi sit quo minus deserunt? Culpa nemo placeat molestias ad sunt iste quae ab, deserunt molestiae doloremque magni maxime tempore, voluptas facilis dolor consectetur optio qui expedita non, omnis, adipisci natus. Ab officiis sed consequuntur quam dolore magnam. Iste quisquam, animi vel in! Delectus aut inventore beatae minima sequi enim cum minus consequuntur atque voluptatem, quo, molestias sit modi et asperiores culpa, consequatur aliquam molestiae veniam, accusamus rem nesciunt eaque! Consectetur itaque quibusdam alias non maxime assumenda laudantium eveniet temporibus repellat cum dignissimos accusantium qui corrupti, vel quaerat sunt quam recusandae.</p>
			</div>
		</section>
		<section>
			<div class="container card soft">
		        <h2>Latest Wagashi</h2>
		        <?php recommendedCategory("Pancake"); ?>
		    </div>
		</section>

	</div>
	<footer class="display-flex flex-align-center flex-justify-center">
		<div class="">&copy; Copyright 2022 - chienchien.site</p>
	</footer>
</body>



<script src="zoom.js"></script>
</html>