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
			<div class="alert alert-danger" role="alert">
				<strong><span class="fa fa-info-circle"></span> Notice!</strong> Registration is now closed for OMUN II. We hope to see you at OMUN III next year!
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
							Registration is closed.
						</p>
					</div>
					<div class="col-sm-9">
						<div class="tab-content">
							<div class="tab-pane" id="signup" role="tabpanel">
								Signup is closed.
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
</html>
