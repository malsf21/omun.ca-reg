<?php
	include_once("../common.php");

	$name   = $_POST['name']; //SANITIZE
	$grade  = $_POST['grade']; //SANITIZE
	$sex    = $_POST['sex']; //SANITIZE
	$dietary    = $_POST['dietary']; //SANITIZE
	$preference = $_POST['preference']; //SANITIZE
	$committee = "unassigned";
	$locked = "false";

	// Build query
	$query = "
		INSERT INTO  `omun`.`students` (
			`id` ,
			`name` ,
			`school` ,
			`grade` ,
			`sex` ,
			`dietary` ,
			`preference` ,
			`committee` ,
			`position` ,
			`locked`
		)

		VALUES (
			NULL ,  '$name',  '$_SESSION[school]',  '$grade',  '$sex', '$dietary', '$preference', '$committee', '$committee', '$locked'
		);";

	// execute query
	$result = mysql_query($query) or die ("Error in query: ".mysql_error());

	// free result set memory
	mysql_free_result($result);

	// close connection
	mysql_close($connection);

	$to = "matthew.wang@ucc.on.ca";
	//, mgriem@ucc.on.ca, omun@ucc.on.ca
	$subject = $name." has registered from ".$_SESSION['school'];

	$message = "
	<html>
	<head>
	<title>".$subject."</title>
	</head>
	<body>
	<p>Delegate ". $name ." has registered for OMUN, under ". $_SESSION['school']."</p>
	<p>Here are the details they have registered under:</p>
	<table>
	<tr>
	<th>Name</th>
	<th>School</th>
	<th>Grade</th>
	<th>Sex</th>
	<th>Dietary</th>
	<th>Preference</th>
	</tr>
	<tr>
	<td>".$name."</td>
	<td>".$_SESSION["school"]."</td>
	<td>".$grade."</td>
	<td>".$sex."</td>
	<td>".$dietary."</td>
	<td>".$preference."</td>
	</tr>
	</table>
	</body>
	</html>
	";

	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// More headers
	$headers .= 'From: <mail@omun.ca>' . "\r\n";

	mail($to,$subject,$message,$headers);

	header('Location: ../delegates.php');
?>
