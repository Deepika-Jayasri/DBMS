<?php

session_start();
include("connection.php");
include("function.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $fno = $_POST['fno'];
    $fname = $_POST['fname'];
    $rank = $_POST['rank'];
    $fphone = $_POST['fphone'];
    $salary = $_POST['salary'];

    if(!empty($fno) && !empty($fname) && !empty($rank) && !empty($fphone)&& !empty($salary))
    {

        $query = "insert into faculty (fno,fname,rank,fphone,salary) values('$fno','$fname','$rank','$fphone','$salary')";

        mysqli_query($con , $query);

        header("Location: faculty.php");
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
    <title>Faculty Form</title>
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
        <h2>FACULTY DETAILS</h2>
        <form method="post">
          <div class="inputBx">
            <input type="text"  name="fno" required="required">
            <span>FNO</span>
          
          </div>
          <div class="inputBx ">
            <input type="text" name="fname" required="required">
            <span>FNAME</span>
          </div>
          <div class="inputBx">
            <input type="text"  name="rank" required="required">
            <span>RANK</span>
          
          </div>
          <div class="inputBx">
            <input type="text" name="fphone" required="required">
            <span>FPHONE</span>
          </div>
          <div class="inputBx">
            <input type="text" name="salary" required="required">
            <span>SALARY</span>
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



