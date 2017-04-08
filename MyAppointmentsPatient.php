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
    p{
      margin-top: 0;
      text-align: left;
    }
  </style>
</head>
<body>



    <?php
    session_start();
    $email=$_SESSION['email'];

    $user='root';
    $passw='';
    $database='testDB';

    $con=mysqli_connect('localhost',$user,$passw,$database) or die ("Error could not connect to DB");
    
    $p="SELECT PatientID FROM patient WHERE Email='$email'";
    $result=mysqli_query($con,$p) or die ("failed to query");
    $row=mysqli_fetch_array($result);
    $pid=$row['PatientID'];
    $sql="SELECT Name, Email, PhoneNo, Address, Date_Time FROM appointment NATURAL JOIN doctor WHERE PatientID='$pid';"


  ?>
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="container-fluid text-center">
              <div class="row content">

                  <div class="col-sm-8 " >
                    <br/><br/>
                    <div class="panel panel-default">
                    <div class="panel-heading"><h1>My Appointments</h1></div>
                      <div class="panel-body text-left">
                        <h4>

                          <?php   
                            $result=mysqli_query($con,$sql) or die ("failed to query");
                            while($row=mysqli_fetch_array($result)) {
                              $name=$row['Name'];
                              $email=$row['Email'];
                              $phoneno=$row['PhoneNo'];
                              $address=$row['Address'];
                              $date_time=$row['Date_Time'];
                              
                              echo "<p>";
                              echo "<label>Name:</label>" . $name . "<br>";
                              echo "<label>Email:</label>" . $email . "<br>";
                              echo "<label>PhoneNumber:</label>" . $phoneno . "<br>";
                              echo "<label>Address:</label>" . $address . "<br>";
                              echo "<label>Timing:</label>" . $date_time . "<br>";
                              echo "</p>";
                            }
                          ?>

                        </h4>
                      </div>
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