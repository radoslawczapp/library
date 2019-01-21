<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login System</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">

    <style media="screen">
      .maincontainer {
        margin-top: 70px;
      }
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>

    <div class="container">
    <div class="row">

      <nav class="nav">
      <div class="container">
        <div class="">
          <a class="" href="#">Login System</a>
        </div>
        <div class="">
          <ul class="">
            <li class=""><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>

          <?php
            $user = new User();
            if ($user->isLoggedIn()) { ?>
                <ul class="">
                    <li class="dropdown"><a href="#" class="">Account</a>
                        <ul class="">
                            <li><a href="profile.php?user=<?php echo escape($user->data()->username); ?>">Profile <?php echo escape($user->data()->name); ?></a></li>
                            <li><a href="update.php">Update</a></li>
                            <li><a href="changepassword.php">Change Password</a></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
          <?php } // end isLoggedIn
          else { ?>
            <ul class="">
              <li><a href="login.php">Login</a></li>
              <li><a href="register.php">Register</a></li>
            </ul>
        <?php } // end else  ?>

        </div><!--/.nav-collapse -->

      </div>
    </nav>
