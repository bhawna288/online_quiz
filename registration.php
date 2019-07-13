<?php
session_start();



$con = mysqli_connect('localhost','root');
	if($con){
		
	}

	mysqli_select_db($con,'quizdbase');


	$username = $_POST['user'];
	$password = $_POST['pass'];

	$check = "select * from quizregistration where user='$username' ";
	$resultcheck = mysqli_query($con,$check);	

	 $row = mysqli_num_rows($resultcheck);
			if($row == 1){
			  echo "Sorry already exist this account";
				header('location:index.php');

				
			}	else{

				$q = " insert into quizregistration(user, pass) values ('$username', '$password')"  ;

				$result = mysqli_query($con,$q);
				if($result){
			echo "registration done ,now you can login";
						}
				header('location:loca.php');

			}


?>


