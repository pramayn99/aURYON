<!DOCTYPE html>
<html lang="en">
	<head>
  		<title>Treasure Hunt 2k17</title>
  		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/theme.css">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>

<body>
	<div class="container">
		<div class="row">
  			<div class="col-sm-4"></div>
  			<div class="col-sm-4">
		 		<br><br><br><br><img class="img-responsive" id="logo" src="images/logo.png" alt="Treasure Hunt" height=150px width=150px><br><br><br><br> 
			</div>
  			<div class="col-sm-4"></div>
		</div>
	</div>
	
	<div class="enroll">
		<div class="row">
  			<div class="col-sm-4"></div>
  			<div class="col-sm-4">
		 		<a onclick="document.getElementById('id01').style.display='block'" href="#" class="butt" role="button"><br><br>
				<img src="images/enrollnowbutton.png" height=150px width=150px></a>
					<div id="id01" class="modal" onload="form1.reset();">
  
					  <form id="form1" class="modal-content animate" action="action.php" method="post">
					    <div class="imgcontainer">
					      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

					    <div class="container1">

					      <input type="text" placeholder="Enter name" name="name" required><br>
					      <input type="text" placeholder="Enter Email-id" name="email" required><br>
					      <input type="text" placeholder="Enter Mobile no." name="mob" required><br>
					
		 
					      <button type="submit"><b style="color: white">Submit</b></button>
					    </div>
					  </form>
					</div>
			</div>
  			<div class="col-sm-4"></div>
		</div>
	</div>
	<script>
		// Get the modal
		var modal = document.getElementById('id01');

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
		    if (event.target == modal) {
			modal.style.display = "none";
		    }
		}
	</script>


	<footer>
		<p>Contact us:<b>9400900346(ATUL VARKEY), 9946994758(HARITHA V)</b></p>
		<p>&copy 2017-18.Electronics and Communication Department</p>
	</footer>

</body>
</html>

