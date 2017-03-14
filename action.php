<?php
session_start();
?>

<?php
	$con = mysqli_connect('127.0.0.1','root','','treasure');
	
	if(!$con)
	{
		echo 'Not Connected to Server!';
	}
	
	if(!mysqli_select_db($con,'treasure'))
	{
		echo 'Database Not selected!';
	}

	$name = $_POST['name'];
	$email = $_POST['email'];
	$mob = $_POST['mob'];

	$_SESSION['mob1'] = $mob;

	$qry= "INSERT INTO STUDENT(NAME,EMAIL,MOBILE) VALUES ('$name','$email','$mob')";
	mysqli_query($con,$qry);

?> 
<form method="post" action="quiz.php">
   <input type="hidden" name="$name" value="{category}" />
   <input type="hidden" name="$email" value="val1" />
   <input type="hidden" name="$mob" value="val2" />
</form>

<?php
	header("refresh:0.5; url=quiz.php");
?>	

