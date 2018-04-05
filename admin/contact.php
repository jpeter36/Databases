<!DOCTYPE HTML>

<?php
session_start();
if(isset($_SESSION['username']) && !empty($_SESSION['username'])) {
      $username=$_SESSION['username'];
}
else
{
  ?>
  <script type="text/javascript">
  window.location.href = "php/login.php";
  </script>

  <?php
}
?>

<html>
	<head>
		<link type="text/css" rel="stylesheet" href="/CSS/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="/CSS/personal.css">
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="JS/bootstrap.js"></script>
    <script src="JS/project.js"></script>
    
	</head>

	
	<body>
		<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <!-- <li class="active"><a href="home.html">Home</a></li>
      <li><a href="endorsments.php">Endorsments</a></li>
      <li><a href="projects.php">My Projects</a></li> -->
      <li><a href="contact.php">Contact Me</a></li>
     <!--  <li><a href="about.html">Sports</a></li> -->
    </ul>
  </div>
</nav>

<div class="bg-1 text-center">
<?php
echo "Hello, ".$username." ";
?><br><br>
      <img src="www/envelope.jpg" alt="envelope" height="200">
      
          <p> You have finally reached my contact page. </p>
      </div>

<!-- <form method="POST" action="php/PHPmail.php"> 
  </tr> <tr> <td>Name</td><td> <input type="text" id="name" name="name" required></td> 
  <td>Email</td><td> <input type="email" id="email" name="email" required></td> </tr>
  <tr> <td>Subject</td><td> <input type="text" id="subject" name="subject" required=""></td> 
  </tr> <tr> <td>Message</td><td> <input type="text" id="message" name="message" required></td> 
  </tr> 
  <button class="btn register" id="send" name="send" type="submit" value="Send"/></button>
</form> -->

<!-- <form action="php/logout.php" method="POST">
    <button class="btn register" id="submit" type="submit" value="Logout"Logout/>Logout
</form> -->


	</body>
</html>
