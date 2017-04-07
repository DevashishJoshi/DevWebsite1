<?php
    session_start();
    echo "<h3> PHP List All Session Variables</h3>";
    foreach ($_SESSION as $key=>$val)
    echo $key." ".$val."<br/>";
?>
<html>
<head>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!--<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>-->
  <!--<link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">-->
  <link href="css/creative.min.css" rel="stylesheet">
  <style>
    button{
      background-color: #9EEA86;
      position: relative;
    }
    input[type=submit]{
      position: relative;
      left: 40px;
      top: 15px;
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

    $locality2=$_SESSION['locality1'];
    $specialization2=$_SESSION['specialization1'];

    $user='root';
    $passw='';
    $database='testDB';

    $con=mysqli_connect('localhost',$user,$passw,$database) or die ("Error could not connect to DB");
    $sql="SELECT * FROM `doctor` WHERE Address LIKE '%$locality2%' and Specialization='$specialization2'";

  ?>
  <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="container-fluid text-center">
        <div class="row content">
          <div class="col-sm-8 " >
            <br/><br/>
            <div class="panel panel-default">
              <div class="panel-heading"><h1>Search Results</h1></div>
                <div class="panel-body text-left">
                  <h4>
                    <?php
                      $result=mysqli_query($con,$sql) or die ("failed to query $sql");
                      if($row=mysqli_fetch_array($result)) {
                        $name=$row['Name'];
                        $email=$row['Email'];
                        $phoneno=$row['PhoneNo'];
                        $qualification=$row['Qualification'];
                        $address=$row['Address'];
                        echo "<p>";
                        echo "<label>Name:</label>" . $name . "<br>";
                        echo "<label>Email:</label>" . $email . "<br>";
                        echo "<label>PhoneNumber:</label>" . $phoneno . "<br>";
                        echo "<label>Qualification:</label>" . $qualification . "<br>";
                        echo "<label>Address:</label>" . $address . "<br>";
                        echo"<button id='mybutton' onClick='date_time_set1()'>Book an appointment </button>";
                        echo "<form action='updateAppt.php'>";
                        echo "<p id='lol1'> </p>";
                        echo "</form";
                      }
                      echo "</br>";
                      if($row=mysqli_fetch_array($result)) {
                        $name=$row['Name'];
                        $email=$row['Email'];
                        $phoneno=$row['PhoneNo'];
                        $qualification=$row['Qualification'];
                        $address=$row['Address'];
                        echo "<p>";
                        echo "<label>Name:</label>" . $name . "<br>";
                        echo "<label>Email:</label>" . $email . "<br>";
                        echo "<label>PhoneNumber:</label>" . $phoneno . "<br>";
                        echo "<label>Qualification:</label>" . $qualification . "<br>";
                        echo "<label>Address:</label>" . $address . "<br>";
                        echo"<button onClick='date_time_set2()'>Book an appointment </button>";
                        echo "<form action='updateAppt.php'>";
                        echo "<p id='lol2'> </p>";
                        echo "</form";
                      }
                      echo "</br>";
                      if($row=mysqli_fetch_array($result)) {
                        $name=$row['Name'];
                        $email=$row['Email'];
                        $phoneno=$row['PhoneNo'];
                        $qualification=$row['Qualification'];
                        $address=$row['Address'];
                        echo "<p>";
                        echo "<label>Name:</label>" . $name . "<br>";
                        echo "<label>Email:</label>" . $email . "<br>";
                        echo "<label>PhoneNumber:</label>" . $phoneno . "<br>";
                        echo "<label>Qualification:</label>" . $qualification . "<br>";
                        echo "<label>Address:</label>" . $address . "<br>";
                        echo"<button onClick='date_time_set3()'>Book an appointment </button>";
                        echo "<form action='updateAppt.php'>";
                        echo "<p id='lol3'> </p>";
                        echo "</form";
                      }
                      echo "</br>";
                      if($row=mysqli_fetch_array($result)) {
                        $name=$row['Name'];
                        $email=$row['Email'];
                        $phoneno=$row['PhoneNo'];
                        $qualification=$row['Qualification'];
                        $address=$row['Address'];
                        echo "<p>";
                        echo "<label>Name:</label>" . $name . "<br>";
                        echo "<label>Email:</label>" . $email . "<br>";
                        echo "<label>PhoneNumber:</label>" . $phoneno . "<br>";
                        echo "<label>Qualification:</label>" . $qualification . "<br>";
                        echo "<label>Address:</label>" . $address . "<br>";
                        echo"<button onClick='date_time_set4()'>Book an appointment </button>";
                        echo "<form action='updateAppt.php'>";
                        echo "<p id='lol4'> </p>";
                        echo "</form";
                      }
                      echo "</br>";
                      if($row=mysqli_fetch_array($result)) {
                        $name=$row['Name'];
                        $email=$row['Email'];
                        $phoneno=$row['PhoneNo'];
                        $qualification=$row['Qualification'];
                        $address=$row['Address'];
                        echo "<p>";
                        echo "<label>Name:</label>" . $name . "<br>";
                        echo "<label>Email:</label>" . $email . "<br>";
                        echo "<label>PhoneNumber:</label>" . $phoneno . "<br>";
                        echo "<label>Qualification:</label>" . $qualification . "<br>";
                        echo "<label>Address:</label>" . $address . "<br>";
                        echo"<button onClick='date_time_set5()'>Book an appointment </button>";
                        echo "<form action='updateAppt.php'>";
                        echo "<p id='lol5'> </p>";
                        echo "</form";
                      }
                      echo "</br>";
                    ?>
                  </h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
  </br>
  </br>
  </br>
  </br>
  </br>
  </br>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
  <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <script src="js/creative.min.js"></script>

  <script>
  function date_time_set1() {
    document.getElementById("lol1").innerHTML="<input type='datetime-local' name='date'></input>"+"</br>"+"<input type='submit' name='date'></input>"+"</br>"+"";
  }
  function date_time_set2() {
    document.getElementById("lol2").innerHTML="<input type='datetime-local' name='date'></input>"+"</br>"+"<input type='submit' name='date'></input>"+"</br>"+"";
  }
  function date_time_set3() {
    document.getElementById("lol3").innerHTML="<input type='datetime-local' name='date'></input>"+"</br>"+"<input type='submit' name='date'></input>"+"</br>"+"";
  }
  function date_time_set4() {
    document.getElementById("lol4").innerHTML="<input type='datetime-local' name='date'></input>"+"</br>"+"<input type='submit' name='date'></input>"+"</br>"+"";
  }
  function date_time_set5() {
    document.getElementById("lol5").innerHTML="<input type='datetime-local' name='date'></input>"+"</br>"+"<input type='submit' name='date'></input>"+"</br>"+"";
  }
  </script>

</body>
</html>
