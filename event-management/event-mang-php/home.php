<?php
	include"_config.php";
	session_start();
?>

<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php include"_navbar.php"; ?>
		<div class='container-fluid'>
			
			<div class='row'>
				<div class='col-3 mt-3'>
					<?php include"sidebar.php" ?>
				</div>
				<div class='col-9'>
				<nav aria-label="breadcrumb" class='mt-3'>
			  <ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
			  </ol>
			</nav>
				</div>
			</div>
		</div>
									
	</body>
</html>