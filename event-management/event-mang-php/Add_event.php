<?php 
	session_start();
	include"_config.php";

?>
<html>
	<head>
		<?php include"header.php"; ?>
	</head>
	<body>
		<?php include"_navbar.php"; ?>
		<div class="container-fluid mt-3">
			<div class="row">
				<div class="col-md-3">
					<?php include"sidebar.php"; ?>
				</div>
				<div class="col-md-9">
				
				<nav aria-label="breadcrumb" >
					  <ol class="breadcrumb">
						<li class="breadcrumb-item"><a href='home.php' class=''>Home</a></li>
						<li class="breadcrumb-item active">Invoice</li>
					  </ol>
					</nav>
				<?php flash("msg"); ?>
				<div class="row">
						<div class='col-md-12'>
				<!--		<table class="table table-bordered">
							<thead>
								<th>SNO</th>
								<th>Hall</th>
								<th>Topic</th>
								<th>Duration</th>
								<th>Total</th>
								<th>Book</th>
							</thead>
							
						<tbody id="tbody">
							<tr>	
								<td class='i'>1</td>
								<td>
									<select class='form-control form-control-sm pid chosen' name='pid[]' required>
										<option>Select Hall</option>
									<?php
										echo $options ;
									?>
									</select>
								</td>
								<td><input type='text' class='form-control form-control-sm price' required></td>
								<td><input type='text' class='form-control form-control-sm qty'  required></td>
								<td><input type='text' class='form-control form-control-sm total'  ></td>
								<td><input type='button' value="X"class='btn btn-danger btn-sm remove'></td>
							</tr>
						</tbody>
						</table>
-->
				
</html>