<?php
  require "searchresult_loggedin.php";
  //session_start();
  $user='root';
  $passw='';
  $database='testDB';

  $con=mysqli_connect('localhost',$user,$passw,$database) or die ("Error could not connect to DB");

  $email2=$_SESSION['email'];
  $sqlpid="SELECT `PatientID` FROM `patient` WHERE Email='$email2'";
  $resultpid=mysqli_query($con,$sqlpid) or die ("failed to query $sqlpid");
  $rowpid=mysqli_fetch_array($resultpid);
  $pid=$rowpid['PatientID'];

  $did="";
  $datetime="";
  $sqlAppt = "INSERT INTO `appointment` VALUES ('$pid','$did','$datetime')";

  $sentdata=mysqli_query($con,$sqlAppt);
  echo mysqli_error($con);
?>
