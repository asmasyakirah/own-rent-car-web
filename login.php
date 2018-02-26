<?php

	$page['title'] = "Log In";
	include('resources/templates/guest_header.php');

	if(isset($_POST['submit']))
	{
		$email = $_POST['username'];
		$password = $_POST['password'];
		verifyUserLogin($email, $password);
		//var_dump($_POST);
		// $_SESSION['username'] = $_POST['username'];
		// $_SESSION['password'] = $_POST['password'];
	}

?>
	<div class="container-fluid col-lg-offset-3 col-lg-6 col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">

		<form role="form" action="login.php" method="post">

			<div class="col-lg-12 form-group">
	        	<h1><?php echo $page['title'] ?></h1>
	    	</div>
			
	        <div class="col-lg-12 form-group">
	        	<input class="form-control" type="text" name="username" placeholder="Username">
	    	</div>
			<div class="col-lg-12 form-group">
	        	<input class="form-control" type="password" name="password" placeholder="Password">
	    	</div>
			<div class="col-lg-12 form-group">
				<button type="submit" name="submit" class="btn btn-warning btn-block">Log In</button>
	      	</div>
			<div class="col-lg-12 form-group">
				No account yet? <a href="register.php">Register</a>
	      	</div>

		</form>

	</div><!-- /.container-fluid-->		

<?php

	include('resources/templates/guest_footer.php'); 

?> 