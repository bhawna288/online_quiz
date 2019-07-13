
<?php 

	$con = mysqli_connect('localhost','root');
	if($con){
		#echo"connection";
	}

	mysqli_select_db($con,'quizdb');

?>





<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	 <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet"> 
<!-- 
	 font-family: 'Montserrat', sans-serif; 
	font-family: 'Open Sans', sans-serif;
	-->

</head>
<body>

	<div class="container">
			<br>
		<h1 class="text-center text-success"> Welcome to Quiz World </h1><br>

		<div class="row">
			
			<div class="col-lg-6">
				<div class="card">
					<h4 class="card-header text-center"> Login Form </h4>
					<br>
					<form action="login.php" method="post">
						<div class="form-group">
							<label for="user "> Username: </label>
							<input type="text" name="user" id="user" class="form-control">
						</div>
						<div class="form-group">
							<label for="pass "> Password: </label>
							<input type="password" name="pass" id="pass" class="form-control">
						</div>
						<button class="btn btn-success d-block m-auto" type="submit"> Login </button>
					</form>
				
				</div>
			</div>

			<div class="col-lg-6">
				<div class="card">
					<h4 class="card-header text-center"> SignUp Form </h4>
					<br>
					<form action="registration.php" method="post">
						<div class="form-group">
							<label for="user "> Username: </label>
							<input type="text" name="user" id="user" class="form-control">
						</div>
						<div class="form-group">
							<label for="pass "> Password: </label>
							<input type="password" name="pass" id="pass" class="form-control">
						</div>
						<button  class="btn btn-success d-block m-auto" type="submit"> sign up </button>
						<div class="duplicate"> </div>
					</form>

				</div>
			</div>
				</div>
			</div>

		</div>

	</div>

</body>
</html>
