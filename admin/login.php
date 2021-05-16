<?php
require_once("../includes/initialize.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>HEYYY</title>

    <!-- Bootstrap core CSS
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!-- <link href="css/signin.css" rel="stylesheet"> --> -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body style="Background:url('images/images2.jpg') repeat;">
    <?php
    if (admin_logged_in()) {
    ?>
        <script type="text/javascript">
            redirect('progressbar.php');
        </script>
        <?php
    }
    if (isset($_POST['btnlogin'])) {
        //form has been submitted1

        $uname = trim($_POST['email']);
        $upass = trim($_POST['pass']);

        $h_upass = sha1($upass);
        //check if the email and password is equal to nothing or null then it will show message box
        if ($uname == '' or $upass == '') {
        ?> <script type="text/javascript">
                alert("Invalid Username and Password!");
            </script>
            <?php

        } else {
            //it creates a new objects of member
            $user = new User();
            //make use of the static function, and we passed to parameters
            $res = $user::AuthenticateUser($uname, $h_upass);
            //then it check if the function return to true
            if ($res == true) {
            ?> <script type="text/javascript">
                    //then it will be redirected to home.php
                    window.location = "index.php";
                </script>
            <?php


            } else {
            ?> <script type="text/javascript">
                    alert("Username or Password Not Registered! Contact Your administrator.");
                    window.location = "index.php";
                </script>
    <?php
            }
        }
    } else {

        $email = "";
        $upass = "";
    }

    ?>
    <div class="container">
        <center>
            <div class="col-md-4 col-md-offset-4 "style="margin-top:15%;">
                <div class="card">
                    <div class="card-heading">
                        <h1 class="text-center text-dark">LOGIN</h1>
                    </div>
                    <div class="card-body">
                        <form role="form" method="POST" action="login.php">
                            <div class="input-group mb-4">
                                <i class="fa fa-user " style='font-size:36px'></i>&nbsp;&nbsp;&nbsp;&nbsp;
                                <input class="form-control" placeholder="Username" name="email" type="text" autofocus>
                            </div>
                            <div class="input-group mb-4">
                                <i class="fa fa-key" style='font-size:36px'></i>&nbsp;
                                <input class="form-control" placeholder="Password" name="pass" type="password" value="">
                            </div>
                            <div class=" form-group mb-4checkbox text-dark">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me">&nbsp;Remember Me
                                </label>
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <button type="submit" name="btnlogin" class="btn btn-lg btn-success btn-block">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </center>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
</body>

</html>