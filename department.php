<?php

session_start();
include("connection.php");
include("function.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $dno = $_POST['dno'];
    $dname = $_POST['dname'];
    $dphone = $_POST['dphone'];
    $cname = $_POST['cname'];

    if(!empty($dno) && !empty($dname) && !empty($dphone) && !empty($cname))
    {

        $query = "insert into department (dno,dname,dphone,cname) values('$dno','$dname','$dphone','$cname')";

        mysqli_query($con , $query);

        header("Location: department.php");
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
    <title>Department Form</title>
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
        <h2>DEPARTMENT DETAILS</h2>
        <form method="post">
          <div class="inputBx">
            <input type="text"  name="dno" required="required">
            <span>DNO</span>
          
          </div>
          <div class="inputBx ">
            <input type="text" name="dname" required="required">
            <span>DNAME</span>
          </div>
          <div class="inputBx">
            <input type="text"  name="dphone" required="required">
            <span>DPHONE</span>
          
          </div>
          <div class="inputBx">
            <input type="text" name="cname" required="required">
            <span>COLLEGE</span>
          </div>

          <div class="inputBx">
            <input id="button" type="submit" value="SUBMIT" disabled> 
          

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