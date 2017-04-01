<?php
session_start();
$email=$_SESSION['email'];
?>
<html>
<head>
  <style>
    .font1 {
      color: green;
    }
    .font2 {

    }
  </style>
</head>
<body>
  <div class='font1'>
    Patient Profile
  </div>
  <div class='font2'>
    E-mail : <?php echo $email; ?>
  </div>
</body>
</html>
