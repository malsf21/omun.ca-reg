<?php
  require './common.php';

  if (!$_SESSION['school']) {
    header('Location: index.php');
    die('Redirecting to: index.php');
  }
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Manage <?php echo $_SESSION["school"] ?> | OMUN</title>
    <meta name="description" content=""/>

    <link rel="icon" href="favicon.png" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />


    <link rel="stylesheet" href="css/font-awesome.min.css" />

    <script src="js/google-analytics.js"></script>

    <link rel="canonical" href="https://omun.ca/" />
  </head>
	<body>
		<?php include_once 'navbar.php' ?>
		<div class="container container-main">
			<div class="row">
				<div class="col-sm-2">
					<ul class="nav nav-pills nav-stacked">
					  <li class="nav-item">
					    <a class="nav-link" href="home.php"><span class="fa fa-fw fa-home"></span> Home</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link active" href="delegates.php"><span class="fa fa-fw fa-users"></span> Delegates</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" href="account.php"><span class="fa fa-fw fa-gear"></span> Account</a>
					  </li>
					</ul>
				</div>
				<div class="col-sm-10">
					<h1>Manage <?php echo $_SESSION["school"] ?></h1>
					<div class="well">
						<h2>Register a new delegate</h2>
						<form action="actions/add_student.php" method="post">
							<div class="form-group">
								<label for="name">Name: </label>
								<input class="form-control" required type="text" name="name" id="name">
							</div>
							<div class="form-group">
								<label for="grade">Grade: </label>
								<input class="form-control" required type="number" name="grade" id="grade">
							</div>
							<fieldset class="form-group">
						    <legend>Sex</legend>
						    <div class="form-check">
						      <label class="form-check-inline">
						        <input type="radio" class="form-check-input" name="sex" id="sexRadioM" value="Male" checked>
						        Male
						      </label>
						    </div>
						    <div class="form-check">
						    	<label class="form-check-inline">
						        <input type="radio" class="form-check-input" name="sex" id="sexRadioF" value="Female">
						        Female
						      </label>
						    </div>
						  </fieldset>
							<button class="btn btn-success" role="submit"><span class="fa fa-user-plus"></span> Add Delegate</button>
						</form>
					</div>
				</div>
      </div>
			<div class="well">
				<table class="table">
					<thead class="thead-inverse">
				    <tr>
				      <th>Name</th>
				      <th>Grade</th>
				      <th>Sex</th>
				      <th>Assigned Committee</th>
							<th>Actions</th>
				    </tr>
				  </thead>
					<tbody>
					<?php

						// Make query
						$query = "SELECT * FROM wac.students WHERE school='$_SESSION[school]';";

						// execute query
						$result = mysql_query($query) or die ("Error in query:".mysql_error());

            $count = 0;
						// For every row
						while ($row = mysql_fetch_array($result)) {
							echo "<tr class='table-row'>";
								echo "<td class='table-cell'>" . $row["name"] . "</td>";
								echo "<td class='table-cell'>" . $row["grade"] . "</td>";
								echo "<td class='table-cell'>" . $row["sex"] . "</td>";
								echo "<td class='table-cell'>" . $row["assignment"] . "</td>";
								echo "<td class='table-cell'><form action='actions/drop_student.php' method='post'><button class='btn btn-danger' name='name' value='$row[name]'><span class='fa fa-remove'></span> Remove Delegate</button></form></td>";
							echo "</tr>";
              $count += 1;
						}
					?>
					</tbody>
				</table>
        <span class="text-xs-right"><?php echo $count;?> registered delegates</span>
			</div>
		</div>
  </body>
</html>
