<?php

session_start();
include("connection.php");
include("function.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $ssn = $_POST['ssn'];
    $name = $_POST['name'];
    $sec = $_POST['sec'];
    $bdate = $_POST['bdate'];

    if(!empty($ssn) && !empty($name) && !empty($sec) && !empty($bdate))
    {

        $query = "insert into student (ssn,name,sec,bdate) values('$ssn','$name','$sec','$bdate')";

        mysqli_query($con , $query);

        header("Location: student.php");
        die;

        
      
    }else
    {
        echo "Please enter some valid information ";
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Students Form</title>
    <!----CSS link----->
    <link rel="stylesheet" href="styles.css"> 
</head>
<body>

<section>
  
  <div class="box">
    
    <div class="square" style="--i:0;"></div>
    <div class="square" style="--i:1;"></div>
    <div class="square" style="--i:2;"></div>
    <div class="square" style="--i:3;"></div>
    <div class="square" style="--i:4;"></div>
    <div class="square" style="--i:5;"></div>
    <div class="square" style="--i:6;"></div>
    <div class="square" style="--i:7;"></div>
    <div class="square" style="--i:8;"></div>
    <div class="square" style="--i:9;"></div>
    <div class="square" style="--i:10;"></div>
    <div class="square" style="--i:11;"></div>
    <div class="square" style="--i:12;"></div>
    <div class="square" style="--i:13;"></div>
    <div class="square" style="--i:14;"></div>
    <div class="square" style="--i:15;"></div>
    <div class="square" style="--i:16;"></div>
    <div class="square" style="--i:17;"></div>
    <div class="square" style="--i:18;"></div>
    <div class="square" style="--i:19;"></div>
    <div class="square" style="--i:20;"></div>
    <div class="square" style="--i:21;"></div>
    <div class="square" style="--i:22;"></div>
    <div class="square" style="--i:23;"></div>
  
    
    <div class="container"> 
      <div class="form"> 
        <h2>STUDENT DETAILS</h2>
        <form method="post">
          <div class="inputBx">
            <input type="text"  name="ssn" required="required">
            <span>SSN</span>
          
          </div>
          <div class="inputBx ">
            <input type="text" name="name" required="required">
            <span>NAME</span>
          </div>
          <div class="inputBx">
            <input type="text"  name="sec" required="required">
            <span>SECTION</span>
          
          </div>
          <div class="inputBx">
            <input type="date" name="bdate" required="required">
            <span></span>
          </div>

          <div class="inputBx">
            <input id="button" type="submit" value="SUBMIT" > 
          

          </div>
          <a href="index.html" class="sign-up">Home</a>
       </form>
     </div>
    </div>
  </div>
    
  
</section>

<!---JS CDN Link---->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!--Custom JS File-->
<script src="js.js"></script>

</body>
</html>