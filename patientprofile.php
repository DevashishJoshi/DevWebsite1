<?php
session_start();
$email=$_SESSION['email'];

$user='root';
$passw='';
$database='testDB';

$con=mysqli_connect('localhost',$user,$passw,$database) or die("Error could not connect to DB");
$sql="select * from patient where Email='$email'";
$result=mysqli_query($con,$sql) or die("failed to query");
$row=mysqli_fetch_array($result);

$name=$row['Name'];
$email=$row['Email'];
$gender=$row['Gender'];
$dob=$row['DOB'];
$blood_group=$row['Blood Group'];
$phoneno=$row['PhoneNo'];
$address=$row['Address'];
$patientid=$row['PatientID'];


?>
<html>
<head>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!--<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
-->
  <!-- Plugin CSS -->
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Theme CSS -->
  <link href="css/creative.min.css" rel="stylesheet">

  <style>
    .font1 {
      color: green;
    }
    .font2 {

    }
  </style>
</head>
<body>
  <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
          <div class="container-fluid text-center">
            <div class="row content">


              

              <div class="col-sm-8 " >
              <br/><br/>
               <div class="panel panel-default">
            <div class="panel-heading"><h1>Your Profile</h1></div>
            <div class="panel-body text-left">
            <h4>
           <p>
            <label class=" col-sm-3" >First Name:</label><?php echo $name;?><br>
           </p>
           <p>
            <label class=" col-sm-3" >Email:</label><?php echo $email;?><br>
           </p>
           <p>
            <label class=" col-sm-3" >Gender:</label><?php echo $gender;?><br>
           </p>
           <p>
            <label class=" col-sm-3" >Date of Birth:</label><?php echo $dob;?><br>
           </p>
           <p>
            <label class=" col-sm-3" >Blood Group:</label><?php echo $blood_group;?><br>
           </p>
           <p>
            <label class=" col-sm-3" >Phone Number:</label><?php echo $phoneno;?><br>
           </p>
           <p>
            <label class=" col-sm-3" >Address:</label><?php echo $address;?><br>
           </p>
           <p>
            <label class=" col-sm-3" >PatientID:</label><?php echo $patientid;?><br>
           </p>

            </h4>
          </div>
              </div>
              </div>
            </div>
          </div>


      </div>
      <!-- /.container-fluid -->
  </nav>
  </br>
  </br>
  </br>
  </br>
  </br>
  </br>
  <script src="vendor/jquery/jquery.min.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <!-- Plugin JavaScript
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>-->
  <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
  <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Theme JavaScript -->
  <script src="js/creative.min.js"></script>

</body>
</html>
