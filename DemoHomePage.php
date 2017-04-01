<!--
<html>
<?php
/*
  session_start();
  echo "Welcome ! ".$_SESSION['email'] ;
*/
?>
</html>
-->
<!--
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
    <div class="dropdown">
      <button class="" type="button" data-toggle="dropdown">City
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu">
        <li><a href="#">Mumbai</a></li>
        <li><a href="#">Delhi</a></li>
      </ul>
    </div>
  </div>
</body>
</html>
-->

<html>
<head>
<style>
.dropbtn {
    position: relative;
    top: 0px;
    left: 900px;
    width: 160px;
    height: 40px;
    background-color: #4CAF50;
    color: white;
    padding: 12px;
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
  <?php
  session_start();
  $name=$_SESSION['email'];
  ?>

<div class="dropdown">
<button onclick="myFunction()" class="dropbtn"> <font size='3'>My Account</font></button>
  <div id="myDropdown" class="dropdown-content">
    <a href="profile.php"><font size='2.5'>Profile</font></a>
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

</body>
</html>
