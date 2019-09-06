

<?php
error_reporting(E_ALL);
ini_set('display_errors', 'off');
try
{
	$db= new PDO('mysql:host=localhost;dbname=dhci','root','root');

	//echo "connected";	
}
catch (PDOException $e)
{
	echo "<script>alert('Database not conected');</script>";
}


?>