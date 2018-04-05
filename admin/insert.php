<html>
<body>
<p>This php page sends the data collected in the form.html file and inserts it into the MySQL database</p>

<?php
session_start();
require 'settings.php';

$connection = mysqli_connect($hostname, $username, $password, $database);


if(!$connection)
{
	die("Database Connection Failed".mysqli_error());
}



if (isset($_POST['username']) and isset($_POST['password']))
{
	$user = $_POST['username'];
	$password = sha1($_POST['password']);
	$query= "SELECT * FROM $table WHERE username = '$user' and password = '$password'";
	$result= mysqli_query($connection, $query) or die(mysqli_error($connection));
	$count= mysqli_num_rows($result);
	

	if ($count==1){
			$_SESSION['username'] = $_POST['username'];
			$sql="UPDATE $table SET LoginEntry=1 WHERE username='".$_POST['username']."'";
			$result2 = mysqli_query($connection, $sql) or die(mysqli_error($connection));
			echo "should redirect";
			header("location: ../contact.php");
	}
	else
	{

		echo "Logged in FAILED, please try again. ";
		echo "<a href='Login.php'>Login</a>";
	}


}
else{
	print "Database NOT Found";
}

if(isset($_SESSION['username']))
{
	$username=$_SESSION['username'];?>
	<script type="text/javascript">
	window.location.href = "www/contact.php";
	</script><?php
}

mysqli_close($connection);


//As a challenge you can try and have it check if the records were actually added
//and if not, have it send an error message instead of the "One record added" message
?> 

</body>
</html>
