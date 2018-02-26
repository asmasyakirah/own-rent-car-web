<?php

	$page['title'] = "Log Out";
	include('resources/templates/guest_header.php');

	// Remove all session variables
	//var_dump($_SESSION);
	session_unset(); 
	//var_dump($_SESSION);

	// Redirect to Home page
	header("Location: home.php"); 

?>
	<div class="container-fluid col-lg-offset-3 col-lg-6 col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">

		<div class="col-lg-12 form-group">
        	<h1><?php echo $page['title'] ?></h1>
    	</div>
		<div class="col-lg-12 text-center">
			<img src="resources/img/progressbar_cat.gif" class="row" style="width: 200px">
			<br><br><br>
			Logging out ...
      	</div>

	</div><!-- /.container-fluid-->		

<?php

	include('resources/templates/guest_footer.php'); 

?> 