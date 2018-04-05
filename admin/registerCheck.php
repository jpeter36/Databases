<?php
echo "HELP ME";
include("settings.php");
$error='';
	if (isset($_POST['register'])) {
		if (empty($_POST['name1']) || empty($_POST['username1']) || empty($_POST['email1']) || empty($_POST['password1']) || empty($_POST['confirm1'])) {

		$error = "Fill out the form please.";
		echo $error;
	}
	else
	{
		echo "HELP ME AGAIN";
		$name1 = $_POST['name1'];
		$username1 = $_POST['username1'];
		$email1 = $_POST['email1'];
		$password1 = $_POST['password1'];
		$confirm1 = $_POST['confirm1'];

		$connection = mysqli_connect($hostname,$username,$password) or die(mysqli_connect_error()); 
		$db_found = mysqli_select_db($connection, $database) or die(mysqli_error($connection));
		echo "HERE";
		
		$query = mysqli_query($connection, "SELECT * FROM Customers WHERE username='$username1'") or die(mysqli_error($connection));
		echo "HERE?";
		$rows = mysqli_num_rows($query);
		echo "HERE";

		if ($rows == 1){
			$error = "Username is already saved. Try again please.";
			echo $error;
		}
		else if ($password1 != $confirm1){
			$error = "Passwords don't match.";
			echo $error;
		}
		else if (!filter_var($email1, FILTER_VALIDATE_EMAIL) === true){
			$error = "Invalid email format";
			echo $error;
		}
		else {
			session_start();
			$password1 =sha1($password1);
			echo "HERE1";

			if ($db_found){
				print "Database found <br />";

				mysqli_query($connection, "INSERT INTO $table (name, email, username, password) VALUES ('$_POST[name1]','$_POST[email1]','$_POST[username1]','$password1')")
				or die ('Unable to execute. '.mysqli_error($connection));

				$updateUser = mysqli_query($connection, "UPDATE Customers SET loginEntry = 1 WHERE username='$username1'");
				print "You are added.";
				header("location: contact.php");

			}
			else{
				print "Database NOT Found.";
			}
		}
		mysqli_close($connection);
	}
}
?>