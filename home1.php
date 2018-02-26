<!DOCTYPE html>
<html>
<body>

<h1>My First Heading</h1>
<p>My first paragraph.</p>

<?php

// Call database settings
require('resources/database.php');

// Select a user from database
try 
{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = 'SELECT * FROM person';
    $pdoStmtObj = $conn->query($sql);
    $pdoStmtObj->setFetchMode(PDO::FETCH_ASSOC);
    
    foreach($pdoStmtObj as $k=>$v)
    {
    	foreach ($v as $key => $value) 
    	{
        echo($key . ': ' . $value . '<br>');
    	}
        echo('<br>');
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;

?>

</body>
</html>