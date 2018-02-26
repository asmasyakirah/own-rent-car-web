<?php
	$page['title'] = "";
	include('resources/templates/guest_header.php');
?>

				<div class="container-fluid text-center">
					<h2>Own a car? Rent it out.</h2> 
					<h4>Didnt own a car? Rent it here!</h4> 

					<?php
						selectPersons();
						selectIdentifications();
					?>

				</div>

<?php include('resources/templates/guest_footer.php'); ?>