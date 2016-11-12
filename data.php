<?php require('dbconfig.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$dept = $_POST["dept"];
	$reg = $_POST["reg"];
	/*echo $name ;
	echo " ";
	echo $email;
	echo " ";
	echo $dept;
	echo " ";
	echo $reg;*/

	$sql = "INSERT INTO info (name, email, dept, reg)
	VALUES ('$name', '$email', '$dept', '$reg')";

	if($conn->query($sql) === TRUE) {
		$message = "Your Data has been created Successfully";
		header('Location: ab.php?msg='.$message);
	} 
	else 
	{
		$message = "Something went wrong";
		header('Location: ab.php?msg='.$message);
	}

	$conn->close();
}

?>