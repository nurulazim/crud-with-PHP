<?php require('dbconfig.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Workshop on PHP</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

	<?php 
		$sql = "SELECT *FROM info";
		$result = $conn->query($sql);

	 ?>

	<div class="container">
		<h2>All student data</h2>

		<a class="btn btn-success" href="ab.php">ADD</a>

		<table class="table">
			<thead>
				<tr>
					<th>Name</th>
					<th>E-mail</th>
					<th>Department</th>
					<th>Registration No.</th>
				</tr>
			</thead>

			<tbody>
			<?php
				if($result->num_rows > 0) 
				{

					while ($row = $result->fetch_assoc()) 
					{
						echo '<tr class="success">
						<td>'.$row["name"].'</td>
						<td>'.$row["email"].'</td>
						<td>'.$row["dept"].'</td>
						<td>'.$row["reg"].'</td>
						</tr>';
					}
				}
				else
				{
					echo "0 results";
				}
			?>

			</tbody>

		</table>


	</div>
</body>
</html>