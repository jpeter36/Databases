<html>
<body>
<div class="register-form">

<?php

		if(isset($msg) & !empty($msg))
		{
				echo $msg;

		}else{

?>
<h1>Login</h1>
<form action="insert.php" method="POST">
<p><label>Username : </label>
<input id="username" type="text" name="username" placeholder="username" /></p>
<p><label>Password : </label>
<input id="password" type="text" name="password" placeholder="password" /></p>
<input class="btn register" type="submit" value="Login"/>
</form>

<form action="register.php" method="POST">
    <button class="btn register" id="submit" type="submit" value="register"/>Register Here
</form>

</div>
<?php }  ?>

</body>
</html>