<?php
	include"_config.php";
	session_start();
	if(isset($_POST["submit"])){
		$org_nm=$_POST["org_nm"];
		$email=$_POST["email"];
		$sql="select * from tbl_register where org_nm='{$org_nm}' and email='{$email}'";
		$res=$con->query($sql);
		{
			if($res->num_rows>0)
			{
				$row=$res->fetch_assoc();
				header("location:home.php");
				$_SESSION["id"]=$row["rid"];
				$_SESSION["org_nm"]=$row["org_nm"];
				$_SESSION["email"]=$row["email"];
			}	
		}
	}	
?>	
<?php
	include"navbar.php";
?>
<html>
	<head>
		<title></title>
	<?php
		include"header.php";
	?>
	</head>
	<div class="container-fluid mt-5">
		<div class="col-6 mx-auto p-3"  style='background-color:#60e67b;'>
			<form method="post">
				<div class="form-group">
					<label>Name</label>
					<input type="text" class="form-control" name="org_nm">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="email" class="form-control" name="email">
				</div>
				<button type="submit" class="btn" name="submit" style='background-color:#665fe3; color:white;'>Submit</button>
			</form>
		</div>
	</div>