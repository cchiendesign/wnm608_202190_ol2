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


<body class="flush">
	<?php include "parts/navbar.php"; ?>
	<div class="banner index-banner"></div>
	<div class="container">
		<section class="intro flex items-center justify-between">
			<!-- <img src="img/sakuragoromo.jpeg" alt=""> -->
			<div class="intro-img index-intro-01"></div>
			<div class="descript">
				<h1>What’s WAGASHI?</h1>
				<p>“WAGASHI” refers to traditional Japanese confectionery which is mainly made from simple ingredients such as beans, rice, wheat, sugar, agar and fruit. WAGASHI’s delicate taste / texture and beautiful appearance has been attracting many people for a long time, and it has become an important part of Japanese culture.</p>
			</div>
		</section>
		<section class="intro flex items-center justify-between">
			<div class="descript">
				<h1>Ingredients</h1>
				<p>Obviously selecting good ingredients and understanding how to use them are very important. We especially think good "ANN" bean paste is crucial for WAGASHI. We change how to crush and boil the beans depending on the type of beans so as to bring out of the full flavor of each bean. In addition, we carefully consider which bean paste goes well with which confectionery, and then select the best one.</p>
			</div>
			<div class="intro-img index-intro-02"></div>
		</section>
		<section class="intro flex items-center justify-between">
			<!-- <img src="img/sakuragoromo.jpeg" alt=""> -->
			<div class="intro-img index-intro-03"></div>
			<div class="descript">
				<h1>Enjoy seasons</h1>
				<p>Profound appreciation of the changing seasons and nature is of great importance in Japan and WAGASHI plays an important role there. We enjoy the seasons by seeing and eating WAGASHI. In spring there are confectioneries with cherry blossoms, in summer they represent a refreshing stream, in fall seasonal chestnut and persimmons are used, and in winter, our WAGASHI depict snow and spring longed-for.</p>
			</div>
		</section>
		<section>
			<div class="container card soft">
		        <h2>Latest Wagashi</h2>
		        <?php recommendedCategory("Namagashi"); ?>
		    </div>
		</section>

	</div>
	<footer class="display-flex flex-align-center flex-justify-center">
		<div class="">&copy; Copyright 2022 - chienchien.site</p>
	</footer>
</body>



<script src="zoom.js"></script>
</html>