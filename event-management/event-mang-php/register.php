<?php
	include"_config.php";
	session_start();
	if(isset($_POST["submit"]))
	{	
		$org_nm=$_POST["org_nm"];
		$email=$_POST["email"];
		$gender=$_POST["gender"];
		$rul=$_POST["rul"];
		
		$sql="insert into tbl_register (org_nm,email,gender,rul) values ('{$org_nm}','{$email}','{$gender}','{$rul}')";
		if($con->query($sql))
		{
			flash("msg","Register Succesfully");
		}
		else
		{
			flash("msg","Register Properly Added");
		}
	
	}
?>

<?php
	include"navbar.php";
?>

<body>
<html>
	<head>
		<title></title>
	<?php
		include"header.php";
	?>
	</head>
	<div class="container-fluid mt-2">
			<div class="col-md-8 mx-auto" style='background-color:#f571f0'>
				<form class='mb-2 p-3' style="padding:5 0 3 0;" method='post'>
				<?php
					flash("msg");
				?>
				  <div class="form-group">
					<label>Name</label>
					<input type="text" class="form-control" name="org_nm" required>
				  </div>
				  <div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" name="email" required>
				  </div>
				  <label>Select Gender</label>
				  <div class="form-check">
					<input class="form-check-input" type="radio" name="gender" value="Male" checked>
					<label class="form-check-label">
						Male
					</label>
				  </div>
				  <div class="form-check">
					<input class="form-check-input" type="radio" name="gender" value="Female">
					<label class="form-check-label">
						Female
					</label>
				  </div>
				  <div class="form-group">
					<label for="exampleFormControlSelect1">Are you a:</label>
					<select class="form-control" name="rul" required>
					<option>Staff</option>
					<option>Student</option>
					</select>
				</div>
				   
				  <button type="submit" class="btn btn-success" name="submit">Submit</button>
				</form>
			</div>
	</div>
	
</body>