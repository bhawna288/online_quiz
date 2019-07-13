<?php
   session_start();
   
   if(!isset($_SESSION['username'])){
   	header('location:index.php');
   }
   
   
   $con = mysqli_connect('localhost','root');
  
   	mysqli_select_db($con,'quizdbase');


   
   ?>

<!DOCTYPE html>
<html>
   <head>
      <title></title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="style.css">
      <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="
         https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
      <style type="text/css">
         .animateuse{
         animation: leelaanimate 0.5s infinite;
         }
         @keyframes leelaanimate{
         0% { color: red },
         10% { color: yellow },
         20%{ color: blue }
         40% {color: green },
         50% { color: pink }
         60% { color: orange },
         80% {  color: black },
         100% {  color: brown }
         }
      </style>
   </head>
   <body>

<div class="container">
	<h1 class="text-centre text-success top-margin=100px"> WELCOME TO THE WEB_DEVELPOMENT QUIZ</h1><br>
	
<div class="col-lg-8 m-auto d-block">
	<div class="card">
	<br>	<h3 class="text-centre card-header"> Welcome <?php echo $_SESSION['username']; ?>, You have to select only one out of 4 options and you have to submit all the questions ,All the best :)</h3> 
	</div><br>
	<form action="checked.php" method="POST">
	<?php
	for($i=1;$i<6;$i++){
	$q="select * from questions where qid=$i ";
	$query=mysqli_query($con,$q);
	while($rows=mysqli_fetch_array($query)){
	?>
	<div class="card">
		<h4 class="card-header"><?php echo "$i. " ,$rows['question'] ; ?> </h4>
		
	<?php
	$q1="select * from answers where ans_id=$i ";
	$query1=mysqli_query($con,$q1);
	while($row1=mysqli_fetch_array($query1)){
	
	?>
	<div class="card-body">
		<input type="radio" name="quizcheck[<?php echo $row1['ans_id']; ?>]" value="<?php echo $row1['aid']; ?>">
		<?php echo $row1['answer'];?>
	
	</div>
	



	
	<?php
		}
}
}
	?>
	
	<input type="submit" value="submit" name="submit" class="btn btn-success m-auto d-block">
</form>
</div>
</div><br><br>
	<div class="m-auto d-block">
	<a href="logout.php" class="btn btn-primary "  >LOGOUT</a>
	</div></br>
	<div>
	<h5 class="text-center">Made by Bhawna Parmar</h5>

	</div>
</body>
</html>
