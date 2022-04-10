<?php 

include "../lib/php/functions.php";

$users = file_get_json("../data/users.json");


// file_put_contents json_encode explode $_POST
// CRUD, Create Read Update Delete


function showUserPage($user) {
	// print_p($user);
	
$classes = implode(", ", $user->classes);

// heredoc
echo <<<HTML
<nav class="nav nav-crumbs">
	<ul>
		<li><a href="admin/users.php">Back</a></li>
	</ul>
</nav>
<div>
	<h2>$user->name</h2>
	<div>
		<strong>Type</strong>
		<input type="text" placeholder="$user->type" class="form-input">
	</div>
	<div>
		<strong>Email</strong>
		<input type="text" placeholder="$user->email" class="form-input">
	</div>
	<div>
		<strong>Classes</strong>
		<input type="text" placeholder="$classes" class="form-input">
	</div>
	<div class="form-control">
        <button class="form-button">Submit</button>
    </div>
</div>
HTML;
}









?>
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User Admin Page</title>
	<?php include "../parts/meta.php"; ?>
</head>
<body>
	
	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<h1>User Admin</h1>
			</div>
			<div class="flex-stretch"></div>
			<div class="nav nav-flex flex-none">
				<ul>
					<li><a href="admin/users.php">Users List</a></li>
				</ul>
			</div>
		</div>
	</header>

	<div class="container">

		<div class="card soft">

			<?php  

			if(isset($_GET['id'])) {
				showUserPage($users[$_GET['id']]);
			}else {

			?>

			<h2>User List</h2>

			<nav class="nav">
				<ul>

				<?php

				for($i=0; $i<count($users); $i++){
					echo "<li>
					<a href='admin/users.php?id=$i'>{$users[$i]->name}</a>
					</li>";
				}


				?>
				</ul>
			</nav>

				<?php } ?>
		</div>
	</div>


</body>
</html>