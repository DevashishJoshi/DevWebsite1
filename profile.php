<?php
session_start();
$email=$_SESSION['email'];
$name="get name from DB";

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


              <div class="col-sm-2 sidenav">
                <div class="panel panel-default">
                  <div class="panel-heading"><h4>Hello <br/><small><?php echo $name ;?></small></h4>
                  </div>
                  <div class="panel-body">
                  <!-- <ul class="list-group text-left">
                  <li class="list-group-item"><a href="#" class="list-group-item">Your Transactions</a></li>
                  <li class="list-group-item"><a href="#">Your Orders</a></li>
                  <li class="list-group-item"><a href="#">Books Recommended</a></li>
                  </ul>-->
                <div class="list-group">
                  <a href="#" class="list-group-item">My Appointments</a>
                  <a href="#" class="list-group-item">My Medical Records</a>
                  <a href="#" class="list-group-item">Edit Profile</a>
                  <a href="#" class="list-group-item">Change Password</a>
                  <a href="#" class="list-group-item">Logout</a>
                </div>


                  </div>
                  </div>
              </div>


              <div class="col-sm-8 " >
              <br/><br/>
               <div class="panel panel-default">
            <div class="panel-heading"><h1>User Profile</h1></div>
            <div class="panel-body text-left">
            <h4>
           <p>
            <label class=" col-sm-3" >First Name:</label><?php echo $name;?><br>
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
