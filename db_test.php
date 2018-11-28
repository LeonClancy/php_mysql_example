<?php
	require('db_class.php');
	require('db_config.php');
?>

<!DOCTYPE html>
<html lang="en"><head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="https://getbootstrap.com/favicon.ico">

	<title>php_mysql_example</title>

	<!-- Bootstrap core CSS -->
	<link href="assets/bootstrap.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="assets/cover.css" rel="stylesheet">
</head>

<body class="text-center">

<div class="cover-container d-flex h-100 p-3 mx-auto flex-column">

	<header class="masthead mb-auto">
		<div class="inner">
			<h3 class="masthead-brand">example</h3>
			<nav class="nav nav-masthead justify-content-center">

			</nav>
		</div>
	</header>

	<main role="main" class="inner cover">
		<h1 class="cover-heading">資料庫測試</h1>
		<p class="lead"></p>
		<?php
			$db = new DB();
			if($db->connect_db($_DB['host'], $_DB['username'], $_DB['password'], $_DB['dbname'])){
				echo 'connect_ok!';
			} else {
				echo 'connection falied';
			}

			$db->query("SELECT * FROM 'data'");
			while($result = $db->fetch_array())
			{
				// do something you want...
				print_r ($result);
			}
		?>
	</main>

	<footer class="mastfoot mt-auto">
		<div class="inner">
			<p>Cover template for <a href="https://getbootstrap.com/">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
		</div>
	</footer>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="assets/jquery-3.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="assets/popper.js"></script>
<script src="assets/bootstrap.js"></script>


</body></html>