<?php
  include "connection.php";
  session_start();
  if(!isset($_SESSION['name']))
 {
     header('Location: adlogin.php');
     exit();
 }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up (Admin) </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="signup.css" type="text/css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" /> 
        <link href="https://fonts.googleapis.com/css2?family=Russo+One&family=Lemonada:wght@300&family=Lobster&family=Rowdies:wght@700&family=Sriracha&display=swap" rel="stylesheet">    
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php" id="font3"><h3><i class="fas fa-book-open"></i> C2C <i class="fas fa-book-open"></i></h3></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="adminpage.php">Dashboard</a>
                </li>
              </ul>
            </div>
          </nav>

          <div class="container f col-md-4 col-sm-10">
          <form method="POST" action="">
            <div class="form-group">
              <label for="formGroupExampleInput"><strong>Email ID</strong></label>
              <input type="email" class="form-control" id="formGroupExampleInput" name="email" required placeholder="Email ID">
            </div>
            <div class="form-group">
              <label for="name1"><strong>Name</strong></label>
              <input type="text" class="form-control" id="name1" name="name" required placeholder="Name">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2"><strong>Mobile</strong></label>
              <input type="number" class="form-control" required id="formGroupExampleInput2" onkeypress="if(this.value.length>=10) return false;" name="mobile" placeholder="Mobile Number">
              <small id="named" class="form-text text-muted">
                Enter the 10 digit number.
              </small>
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2"><strong>Password</strong></label>
              <input type="password" class="form-control" id="formGroupExampleInput2" required aria-describedby="named" name="password" placeholder="Password">
              <small id="named" class="form-text text-muted">
                Your password must be 8-20 characters long and must not contain spaces, special characters, or emoji.
              </small>
            </div>
            <div class="form-group text-center">
              <button type="submit" name="submit" class="btn btn-primary"><strong>Sign Up</strong></button>
            </div>
          </form>
          <?php
if(isset($_POST["submit"])){
  $res=mysqli_query($link,"insert into admin values('','$_POST[email]','$_POST[name]','$_POST[password]','$_POST[mobile]')");
  if($res){
   ?>
   <div class="alert alert-success text-center">
   Registration successfull.
   </div>
  <?php
  }
  else{
   ?>
   <div class="alert alert-danger text-center">
         <strong style="color:white">Email already registered, Use different Email.</strong>
    </div>
    <?php
  }
}
?>
      </div>
        <script src="signup.js" type="text/javascript"></script>
    </body>
</html>