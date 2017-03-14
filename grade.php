<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>Results</title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<style>

#green {
	font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif;
	font-size: 40px;
	font-style: normal;
	font-variant: normal;
	font-weight: 500;
	line-height: 26.4px;
	 -webkit-filter: drop-shadow(5px 5px 5px #222);
	  filter: drop-shadow(5px 5px 5px #222);
	margin-top:0%;
   	 padding: 1em;
    	color: white;
    	background-color:#00661a;
    	opacity: 0.9;
    	 text-align: center;
}

#red {
	font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif;
	font-size: 40px;
	font-style: normal;
	font-variant: normal;
	font-weight: 500;
	line-height: 26.4px;
	 -webkit-filter: drop-shadow(5px 5px 5px #222);
	  filter: drop-shadow(5px 5px 5px #222);
	margin-top:0%;
   	 padding: 1em;
    	color: white;
    	background-color:#c2380a;
    	opacity: 0.9;
    	 text-align: center;
}


h2 {
	text-align: center;
	font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif;
	font-size: 40px;
}

h4 {
	text-align: center;
	font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif;
	font-size: 20px;
}


img {
	display: block;
    margin-left: auto;
    margin-right: auto;
}



	
</style>
<body>

	<div id="page-wrap">

		
        <?php
	    $con1 = mysqli_connect('127.0.0.1','root','','treasure');
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "B") { $totalCorrect++; }
            if ($answer2 == "C") { $totalCorrect++; }
            if ($answer3 == "A") { $totalCorrect++; }
            if ($answer4 == "C") { $totalCorrect++; }
	    if ($answer5 == "B") { $totalCorrect++; }
		
	    $mob1=$_SESSION['mob1'];
            
	    $qry1= "UPDATE STUDENT SET POINTS =$totalCorrect WHERE MOBILE =$mob1";
	    
	    mysqli_query($con1,$qry1);
            if($totalCorrect>=3)
            	echo "<h1 id='green'><b>RESULTS<b></h1> <h2>Congratulations!!</h2> <img src='images/happy.png' height=150px width=150px> <h4>You're welcome to Vidya Engineering College for playing the second level at 20% discount.</h4>";
	    else
		echo "<h1 id='red'><b>RESULTS<b></h1> <h2>Better Luck next time!!</h2> <img src='images/sad.png' height=150px width=150px>";
            
        ?>
	
	</div>
	
	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	var pageTracker = _gat._getTracker("UA-68528-29");
	pageTracker._initData();
	pageTracker._trackPageview();
	</script>

</body>

</html>
