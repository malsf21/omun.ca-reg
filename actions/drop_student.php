<?php
	include_once("../common.php");

	$name = $_POST['name']; //SANITIZE

	if ($reg == True){

	// Build query
	$query = "DELETE FROM omun.students WHERE students.name='$name' AND students.school='$_SESSION[school]';";

	// execute query
	$result = mysql_query($query) or die ("Error in query: ".mysql_error());

	// free result set memory
	mysql_free_result($result);

	// close connection
	mysql_close($connection);

	header('Location: ../delegates.php');
}
else{
	echo "Registration is closed";
}
?>
