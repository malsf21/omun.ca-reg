<?php
  require './common.php';

  if ($_SESSION['school']) {
    header('Location: home.php');
    die('Redirecting to: home.php');
  }
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>OMUN Registration</title>
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
			<div class="alert alert-info" role="alert">
				<strong><span class="fa fa-info-circle"></span> Welcome</strong> to OMUN online registration! We're in phase 1 of registration: you can register your school and your students.
			</div>
			<div>
				<h1>OMUN Online Registration</h1>
			</div>
			<div class="well">
				<div class="row">
					<div class="col-sm-3">
						<ul class="nav nav-pills nav-stacked">
						  <li class="nav-item">
						    <a class="nav-link" data-toggle="tab" href="#signup" role="tab">Signup</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link active" data-toggle="tab" href="#login" role="tab">Login</a>
						</ul>
						<p>
							Registration is for <b>schools attending OMUN</b>, not individual delegates. If you're an individual delegate looking to attend OMUN, please contact us for further details.
						</p>
					</div>
					<div class="col-sm-9">
						<div class="tab-content">
							<div class="tab-pane" id="signup" role="tabpanel">
								<form action="actions/signup.php" method="post">
									<h3>Signup</h3>
									<label>School: </label><input class="form-control" required type="text" name="school"><br>
									<label>Email: </label><input class="form-control" required type="email" name="email"><br>
									<label>Password: </label><input class="form-control" required type="password" name="password" id="password"><br>
									<label>Re-enter Password: <span id="password_status"></span></label><input class="form-control" required type="password" id="confirm_password"><br>
									<button class="btn btn-success" role="submit">Signup</button>
								</form>
							</div>
							<div class="tab-pane active" id="login" role="tabpanel">
								<form action="actions/signin.php" method="post">
									<h3>Login</h3>
									<label>Email: </label><input class="form-control" required type="email" name="email"><br>
									<label>Password: </label><input class="form-control" required type="password" name="password"><br>
									<button class="btn btn-success" role="submit">Login</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
	<script src="js/jquery.min.js"></script>

	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$("#password").change(function() {
			validatePassword();
		});
		$("#confirm_password").change(function() {
			validatePassword();
		});

		function validatePassword(){
			if($("#password").val() != $("#confirm_password").val()) {
				$("#password_status").html("<span class='fa fa-remove'></span> Passwords don't match!");
				$("#password_status").attr("class", "text-danger");
			}
			else {
				$("#password_status").html("<span class='fa fa-check'></span> Passwords match!");
				$("#password_status").attr("class", "text-success");
			}
		}
	</script>
</html>
