<?php
	
	$page['title'] = "";
	include('resources/templates/guest_header.php');

?>

<div class="container-fluid text-center">

	<h2>Own a car? Rent it out.</h2> 
	<h4>Didn't own a car? Rent it here!</h4> 
	<br>
	<img src="resources/img/orange_car.png" class="row" style="width: 200px">
	<br><br>

	<div class="container">

		<div class="col-md-offset-4 col-md-4">	
			<a class="btn btn-default btn-lg" href="register.php">Register</a>	
		</div>
		<div class="col-md-offset-4 col-md-4">	
			<a class="btn btn-default btn-lg" href="login.php">Log In</a>
		</div>
		
	</div>

</div>

<?php 

	include('resources/templates/guest_footer.php'); 

?>