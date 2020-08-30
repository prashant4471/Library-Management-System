<?php
  include "connection.php";
  session_start();
  if(isset($_SESSION['name1']))
 {
     header('Location: userpage.php');
     exit();
 }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="login.css" type="text/css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" /> 
        <link href="https://fonts.googleapis.com/css2?family=Russo+One&family=Lemonada:wght@300&family=Lobster&family=Rowdies:wght@700&family=Sriracha&display=swap" rel="stylesheet">    
    </head>
    <body style="background:none;">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php" id="font3"><h3><i class="fas fa-book-open"></i> C2C <i class="fas fa-book-open"></i></h3></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item ">
                  <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="signup.php">Sign Up</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Admin
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="adlogin.php">Login</a>
                    <a class="dropdown-item" href="issue.php">Issue</a>
                    <a class="dropdown-item" href="return.php">Return</a>
                  </div>
                </li>
              </ul>
            </div>
          </nav>
          <div class="container f col-md-4 col-sm-10">
          <form method="POST" action="">
            <div class="form-group">
              <label for="formGroupExampleInput"><strong>Email ID</strong></label>
              <input type="email" class="form-control" id="formGroupExampleInput" name="email" placeholder="Email ID">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2"><strong>Password</strong></label>
              <input type="password" class="form-control" id="formGroupExampleInput2" name="password" aria-describedby="named" placeholder="Password">
            </div>
            <div class="form-group text-center">
              <button type="submit" name="submit" class="btn btn-primary"><strong>Login</strong></button>
            </div>
          </form>
          <?php
           if(isset($_POST["submit"])){
           $res=mysqli_query($link,"select * from registration where email='$_POST[email]' && password='$_POST[password]'");
           $count=mysqli_num_rows($res);
           if($count==0)
           {
             ?>
           <div class="alert alert-danger text-center">
                <strong style="color:white">Invalid  Username Or Password.</strong>
           </div>
           <?php
           }
           else{
            $row=$res->fetch_assoc();
            $_SESSION['id']=$row["id"];
            $_SESSION['name1']=$row["name"];
            ?>
         <script type="text/javascript">
            window.location="userpage.php";
         </script>
         <?php
           }
          }
          ?>
        </div>
    </body>
</html>