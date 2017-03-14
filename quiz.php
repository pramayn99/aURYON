<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP Quiz</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<style>
h1 {
	font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif;
	font-size:35px;
	font-style: normal;
	font-variant: normal;
	font-weight: 500;
	line-height: 26.4px;
        -webkit-filter: drop-shadow(5px 5px 5px #222);
	  filter: drop-shadow(5px 5px 5px #222);
	margin: 8px 8px 30px 8px;
   	 padding: 1em;
    	color: white;
    	background-color:#2947a3;
    	opacity: 0.9;
    	 text-align: center;
}

h3 {
	
	font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif
	font-size: 20px;
	font-style: normal;
	font-variant: normal;
	font-weight: 500;
	line-height: 30px;
	margin: 10px 10px 10px 10px;
	padding: 10px;
}

label {
	font-family: Tahoma,Verdana,Segoe,sans-serif;
	font-size: 14px;
	font-style: normal;
	font-variant: normal;
	font-weight: 500;
	line-height: 15.4px;
}

.butts{
	 display: block;
	 background-color:#00994d;
	 color: white;
	margin-left: auto;
    margin-right: auto;
    margin-top: 60px;
    margin-bottom: 60px;
    font-family:Tahoma, Geneva, sans-serif;
    padding: 14px 20px;
    border: none;
    cursor: pointer;
    width: 10%;
    -webkit-filter: drop-shadow(5px 5px 5px #222);
	  filter: drop-shadow(5px 5px 5px #222);
}



</style>

<body>

	<div id="page-wrap">

		<h1><b>QUIZ</b></h1>
		
		<form action="grade.php" method="post" id="quiz">
		
            <ol>
            
                <li>
                
                    <h3> I am a passive two terminal electrical component that stores electrical energy in an electric field. Who I am?</h3>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A">A) Inductor </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B) Capacitor</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C) Resistor</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D) Transistor</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3> Identify the component</h3>
			
		    <img src="images/dev.png" height=150px width=150px>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A">A) BJT</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">B) UJT</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C">C) JFET</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D">D) MOSFET</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3> Which statement is true about Astable Multivibrator?</h3>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A">A) Circuit is not stable in either states</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">B)Circuit is stable in one state.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C">C) Circuit is stable in both states.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D">D) Circuit is also known as one shot</label>
                    </div>
                
                </li>
                
                    
                
                <li>
                
                    <h3> My friend’s atomic number is 13. when he combines with me , we form a p type semiconductor. Identify my friend.</h3>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A">A) Carbon</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">B) Boron</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C">C) Aluminium</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D">D) Phosphorous</label>
                    </div>
                
                </li>
	        
                <li>
                
                    <h3> --------- is a form of computer data storage which stores frequently used program instructions to increase the general speed of the system.   </h3>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A">A) ROM</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B">B) RAM</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C">C) Mother Board</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D">D) NIC</label>
                    </div>
                
                </li>
            
            </ol>
            
            <input class="butts" type="submit" value="SUBMIT" />
		
		</form>
	
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
