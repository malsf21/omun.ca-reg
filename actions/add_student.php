<?php
	include_once("../common.php");

	$name   = $_POST['name']; //SANITIZE
	$grade  = $_POST['grade']; //SANITIZE
	$sex    = $_POST['sex']; //SANITIZE
	$dietary    = $_POST['dietary']; //SANITIZE
	$assignment = "unassigned";

	// Build query
	$query = "
		INSERT INTO  `omun`.`students` (
			`id` ,
			`name` ,
			`school` ,
			`grade` ,
			`sex` ,
			`dietary` ,
			`assignment`
		)

		VALUES (
			NULL ,  '$name',  '$_SESSION[school]',  '$grade',  '$sex', '$dietary', '$assignment'
		);";

	// execute query
	$result = mysql_query($query) or die ("Error in query: ".mysql_error());

	// free result set memory
	mysql_free_result($result);

	// close connection
	mysql_close($connection);

	header('Location: ../delegates.php');
?>
