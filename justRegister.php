<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/form-elements.css">
        <link rel="stylesheet" href="css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>



        <?php
            session_start();
            $alreadyExists=false;
            $user='root';
            $passw='';
            $database='testDB';

            $con=mysqli_connect('localhost',$user,$passw,$database) or die("Error could not connect to DB");

            if(isset($_POST['email']) && isset($_POST['password'])) {
                $name = $_POST['fullname'];
                $email1 = $_POST['email'];
                $password1 = $_POST['password'];

                if(!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['fullname'])) {

                    $sql="select * from logininfo where email='$email1'";
                    $result=mysqli_query($con,$sql) or die("failed to query");
                    $row=mysqli_fetch_array($result);

                    if($row['Email'] == $email1) {
                        $alreadyExists=true;
                    }

                    else {
                        $sql = "INSERT INTO logininfo VALUES ('$name','$email1','$password1')";

                        if (mysqli_query($con,$sql) === TRUE) {
                            $_SESSION['email']=$email1;
                            header('Location:DemoHomePage.php');
                        }
                        else {
                            echo "Error: " . $sql . "<br>";
                        }
                    }
                }
                else
                    echo "Empty text";
            }
            mysqli_close($con);
        ?>


        <!-- Top content -->
        <div class="top-content">

            <div class="inner-bg">
                <div class="container">

                    <div class="row">
                        <div class="col-sm-5">

                            <div class="form-box">
                                <div class="form-top">
                                    <div class="form-top-left">
                                        <h3>Sign up now</h3>
                                        <?php if($alreadyExists) echo "<font color='red'>Account already exists</font></br>"; ?>
                                        <p>Fill in the form below to get instant access:</p>
                                    </div>
                                    <div class="form-top-right">
                                        <i class="fa fa-pencil"></i>
                                    </div>
                                </div>
                                <div class="form-bottom">
                                    <form role="form" action="<?php 'testregister.php'; ?>" method="post" class="registration-form">
                                        <div class="form-group">
                                            <label class="sr-only" for="form-first-name">First name</label>
                                            <input type="text" name="fullname" placeholder="Full name..." class="form-first-name form-control" id="form-first-name">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-email">Email</label>
                                            <input type="text" name="email" placeholder="Email..." class="form-email form-control" id="form-email">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-password">Password</label>
                                            <input type="text" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
                                        </div>

                                        <button type="submit" class="btn">Sign me up!</button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/scripts.js"></script>

        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
