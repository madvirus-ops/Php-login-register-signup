<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
 
</head>
<body>

  	<h2>Register</h2>
  <
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	
  	
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	
  
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	
  
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>