
<!DOCTYPE html>
<html>
 <head>
  <title>Login</title>
	 <link rel="stylesheet" type="text/css" href="style.css">

 </head>
 <body>
 <?php echo '<p></p>';
 	require('db.php');


	?> <?php

    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){

		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);

	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysqli_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
			echo("<a href = 'https://tpserver00001.000webhostapp.com/sol_temp.php?tempdata=&humidity=&submit=Temp'><p>temp</p></a>");
			echo("<a href = 'login_show_afterlogin.php'><p>test</p></a>");
			
			// Redirect user to login_show_afterlogin.php
            }else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
				}
    }else{
?>

<div class="form">
<center><h1>Log in for mornitoring</h1></center>
<div class="login">
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<input name="submit" type="submit" value="Login" />
<center><p>Not registered yet? <a href='registration.php'>Register Here</a></p>
</div>
</form>


<br /><br />

</div>
<?php } ?>
<center><p>Credit :</center></p>
 <center><A href = "https://www.facebook.com/tpj.tong"><?php echo '<p>Technic : Thanapoj Jaidee (Tong)</p>'; ?></a></center>
<center><A href = "https://www.facebook.com/petchzbonny"><?php echo '<p>Design : PetchzBonNy (Petch)</p>'; ?></a></center>

 </body>
</html>
