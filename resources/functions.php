<?php

function selectIdentifications()
{
	$identifications = dbSelect('SELECT * FROM identification');

	echo '<b>Identifications List</b> <br><br>';

	foreach ($identifications as $identification) 
	{
		foreach ($identification as $key => $value) 
		{
			echo $key . ': ' . $value . '<br>';
		}
		echo '<br>';
	}
}

function selectPersons()
{
	$users = dbSelect('SELECT * FROM person');

	echo '<b>Persons List</b> <br><br>';

	foreach ($users as $user) 
	{
		foreach ($user as $key => $value) 
		{
			echo $key . ': ' . $value . '<br>';
		}
		echo '<br>';
	}
}

function verifyUserLogin($email, $password)
{
	$users = dbSelect("SELECT * FROM person WHERE name = '$email'");

	if ($users != "") 
	{
		echo '<b>User Login</b> <br><br>';
		echo var_dump($users);
	}

	echo count($users);

	// foreach ($users as $user) 
	// {
	// 	foreach ($user as $key => $value) 
	// 	{
	// 		echo $key . ': ' . $value . '<br>';
	// 	}
	// 	echo '<br>';
	// }
}

function dbSelect($sql)
{
	// Call database file
	require('database.php');

	$return = "";

	try 
	{
	    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    //$sql = 'SELECT * FROM person';
	    $pdoStmtObj = $conn->query($sql);
	    $pdoStmtObj->setFetchMode(PDO::FETCH_ASSOC);
	    
	    foreach($pdoStmtObj as $row)
	    {
	    	$return[] = $row;
	    }

	    return $return;
	}

	catch(PDOException $e) 
	{
	    $return = "Error: " . $e->getMessage();
	}

	$conn = null;

	return $return;
}

function dbInsert()
{
	
}

?>