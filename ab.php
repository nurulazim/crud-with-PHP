<!DOCTYPE html>
<html>
<head>
	<title>Workshop on PHP</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		<h2>Data Collection</h2>

		<?php 
			if(!empty($_GET['msg'])){
				echo $_GET['msg'];
			}
		 ?>



		<form class="form-horizontal" action="data.php" method="POST">
			<div class="form-group">
				<label class="control-label col-md-2" for="name">Name: </label>
				<div class="col-md-6">
					<input required="" type="text" name="name" class="form-control col-md-6" placeholder="Enter Your Full Name">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2" for="email">E-mail </label>
				<div class="col-md-6">
					<input required="" type="email" name="email" class="form-control col-md-6" placeholder="someone@example.com">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2" for="dept">Dept: </label>
				<div class="col-md-6">
					<input required="" type="text" name="dept" class="form-control col-md-6" placeholder="Enter Your Dept Name">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2" for="reg">Reg: </label>
				<div class="col-md-6">
					<input required="" type="text" name="reg" class="form-control col-md-6" placeholder="Enter Your Reg No">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-md-6">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</div>
		</form>
	</div>
</body>
</html>