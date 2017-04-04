<html>
<head>
  <!-- Bootstrap Core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom Fonts -->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!--<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
-->
  <!-- Plugin CSS -->
  <!--
  *********************************************************************************
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">-->

  <!-- Theme CSS -->
  <link href="css/creative2.min.css" rel="stylesheet">

<style>
body{
  background-color: black;
  background-image: url(../img/abcd.jpg);
}
.dropbtn {
    position: relative;
    top: 0px;
    left: 900px;
    width: 160px;
    height: 40px;
    background-color: #4CAF50;
    color: white;
    padding: 10px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #3e8e41;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: relative;
    top: 0px;
    left: 900px;
    background-color: #f9f9f9;
    min-width: 160px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #f1f1f1}

.show {display:block;}
</style>
</head>
<body>

  </br>
  </br>

  <?php
  session_start();
  $email=$_SESSION['email'];
  $name="change this !";
  //$name=$_SESSION['name'];

  ?>

  <div class="dropdown">
    <button onClick="myFunction()" class="dropbtn">My Account</button>
    <div id="myDropdown" class="dropdown-content">
      <a href="profile.php"><font size='2.5'>Profile</font></a>
      <a href="edit_profile.php"><font size='2.5'>Edit Profile</font></a>
      <a href="#about"><font size='2.5'>Logout</font></a>
    </div>
  </div>

<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it

window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

<!-- jQuery -->
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
