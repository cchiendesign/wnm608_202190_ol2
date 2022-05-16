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

	<script src="lib/js/functions.js"></script>
    <script src="js/templates.js"></script>
    <script src="js/product_list.js"></script>
	
</head>
<body>
	
	<?php include "parts/navbar.php"; ?>

	<div class="container">
		<h2>Product List</h2>
		
		<div class="form-control">
            <form class="hotdog light" id="product-search">
                <input type="search" placeholder="Search Products">
            </form>
        </div>

        <div class="form-control display-flex">
            <div class="flex-none">
                <button data-filter="category" data-value="" type="button" class="form-button">All</button>
            </div>
            &nbsp;
            <div class="flex-none">
                <button data-filter="category" data-value="pancake" type="button" class="form-button">Pancake</button>
            </div>
            &nbsp;
            <div class="flex-none">
                <button data-filter="category" data-value="mochi" type="button" class="form-button">Mochi</button>
            </div>
            &nbsp;
            <div class="flex-none">
                <button data-filter="category" data-value="jelly" type="button" class="form-button">Jelly</button>
            </div>
            <div class="flex-none">
                <button data-filter="category" data-value="senbei" type="button" class="form-button">Senbei</button>
            </div>
                <div class="display-flex" style="margin-left: auto;">
                <div class="form-select" style="margin: 0;">
                <select class="js-sort" style="width: -webkit-fill-available;">
                <option value="1">Newest</option>
                <option value="2">Oldest</option>
                <option value="3">Lowest Price</option>
                <option value="4">Highest Price</option>
                 </select>
                </div>
                </div>
        </div>


		<!-- <?php
			
			$result = makeQuery(makeConn(), "
				SELECT *
				FROM `products`
				ORDER BY `price`
				-- LIMIT 5
			");
			// print_p($result);
			echo "<div class='productlist grid gap'>", array_reduce($result,'productListTemplate'), "</div>";
		?> -->

		<div class='productlist grid gap'></div>



	</div>


</body>
</html>