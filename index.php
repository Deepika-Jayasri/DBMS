<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
<title>HOME PAGE</title>
<link rel="stylesheet" type="text/css" href="css2.css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
</head>
<body>
	<ul>
		<li><a href="file:///C:/xampp/htdocs/OddLoginForm/OddLoginForm-main/student.html"><i class="fa fa-graduation-cap" 
		aria-hidden="true"></i><font size="7" face="mistral"><span>STUDENT</span>
	    </font></a></li>
		<li><a href="#"><i class="fa fa-users" 
		aria-hidden="true"></i><font size="7" face="mistral"><span class="fa-layers-text fa-inverse" data-fa-transform="shrink-8 down-3" style="font-weight:900">FACULTY</span>
		</font></a></li>
		<li><a href="#"><i class="fa fa-university" 
		aria-hidden="true"></i><font size="7" face="mistral"><span class="fa-layers-text fa-inverse" data-fa-transform="shrink-8 down-3" style="font-weight:900">DEPARTMENT</span>
		</font></a></li>
		<li><a href="#"><i class="fa fa-tasks"
	    aria-hidden="true"></i><font size="7" face="mistral"><span class="fa-layers-text fa-inverse" data-fa-transform="shrink-8 down-3" style="font-weight:900">COURSES</span>
		</font></a></li>
	</ul>
	
</body>
</html>
