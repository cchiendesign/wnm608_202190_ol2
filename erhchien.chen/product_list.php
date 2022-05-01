<?php 

	include_once "lib/php/functions.php";
	include_once "parts/templates.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title>Product List</title>

	<?php include "parts/meta.php"; ?>
	
</head>
<body>
	
	<?php include "parts/navbar.php"; ?>

	<div class="container">
		<!-- <div class="card soft">
			<h2>Product List</h2>

			<ul>
				<li><a href="product_item.php?id=1">Product 1</a></li>
				<li><a href="product_item.php?id=2">Product 2</a></li>
				<li><a href="product_item.php?id=3">Product 3</a></li>
				<li><a href="product_item.php?id=4">Product 4</a></li>
			</ul>
		</div> -->
		<h2>Product List</h2>
		<!-- <div class="grid gap">
			<div class="col-xs-12 col-md-3">
				<a href="product_item.php?id=1">
					<figure class="figure product">
						<img src="img/sakuragoromo.jpeg" alt="">
						<figcaption>
							<div>Product Name1</div>
							<div>3.99</div>
						</figcaption>
					</figure>
				</a>	
			</div>
			<div class="col-xs-12 col-md-3">
				<a href="product_item.php?id=2">
					<figure class="figure product">
					<img src="img/sakuragoromo.jpeg" alt="">
					<figcaption>
						<div>Product Name2</div>
						<div>3.99</div>
					</figcaption>
				</figure>
			</a>	
			</div>
			<div class="col-xs-12 col-md-3">
				<a href="product_item.php?id=3">
					<figure class="figure product">
					<img src="img/sakuragoromo.jpeg" alt="">
					<figcaption>
						<div>Product Name3</div>
						<div>3.99</div>
					</figcaption>
				</figure>
			</a>	
			</div>
			<div class="col-xs-12 col-md-3">
				<a href="product_item.php?id=4">
					<figure class="figure product">
					<img src="img/sakuragoromo.jpeg" alt="">
					<figcaption>
						<div>Product Name4</div>
						<div>3.99</div>
					</figcaption>
				</figure>
			</a>	
			</div>
		</div> -->

		<?php
			
			$result = makeQuery(makeConn(), "
				SELECT *
				FROM `products`
				ORDER BY `price`
				-- LIMIT 5
			");
			// print_p($result);
			echo "<div class='productlist grid gap'>", array_reduce($result,'productListTemplate'), "</div>";
		?>


	</div>


</body>
</html>