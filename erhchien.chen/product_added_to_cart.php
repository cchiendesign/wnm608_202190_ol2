<?php


    include_once "lib/php/functions.php";
	$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

	$cart_product = array_find(getCart(),function($o){return $o->id==$_GET['id'];});

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Confirmation Page</title>

	<?php include "parts/meta.php"; ?>
	
	
</head>
<body>
	<?php include "parts/navbar.php"; ?>

	<div class="container">
		<div class="card soft">
			<h2>You added <strong><?= $product->name ?></strong> to your cart.</h2>
			<p>There are now <?= $cart_product->amount ?> of <?= $product->name ?> in your cart.</p>

			<div class="display-flex">
				<div class="flex-none"><a href="product_list.php">Continue Shopping</a></div>
				<div class="flex-stretch"></div>
				<div class="flex-none"><a href="product_cart.php">Go To Cart</a></div>
			</div>
		</div>
	</div>
	
</body>
</html>
























