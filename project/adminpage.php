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
        <title>Admin Section</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="adminpage.css" type="text/css">
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
                <li class="nav-item ">
                  <h6 style="color:white; padding-top:10px;padding-right:100px;">Admin : <?php echo $_SESSION['name']; ?></h6>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="adlogout.php">Logout <i class="fas fa-sign-out-alt"></i></a>
                </li>
              </ul>
            </div>
          </nav>


          

          <div class="container x bg-transparent text-center">
            <div class="cd col-md-4 col-sm-12">
               <i class="fas fa-users fa-10x"></i><br>
               <button type="button" class="btn rounded-pill gen"><a href="user.php"><h2>View All Users</h2></a></button>
            </div>
            <div class="cd col-md-4 col-sm-12">
               <i class="fas fa-book fa-10x"></i><br>
               <button type="button" class="btn rounded-pill gen"><a href="allbooks.php"><h2>View All Books</h2></a></button>
            </div>
            <div class="cd col-md-4 col-sm-12">
            <i class="fas fa-users-cog fa-10x"></i><br>
            <button type="button" class="btn rounded-pill gen"><a href="adsignup.php"><h2>Add new Admin</h2></a></button>
            </div>
            <div class="cd col-md-4 col-sm-12">
            <i class="fas fa-folder-plus fa-10x"></i><br>
            <button type="button" class="btn rounded-pill gen"><a href="addbook.php"><h2>Add New Book</h2></a></button>
            </div>
            <div class="cd col-md-4 col-sm-12">
            <i class="fas fa-file-upload fa-10x"></i><br>
            <button type="button" class="btn rounded-pill gen"><a href="issue.php"><h2>Issue Book</h2></a></button>
            </div>
            <div class="cd col-md-4 col-sm-12">
            <i class="fas fa-file-download fa-10x"></i><br>
            <button type="button" class="btn rounded-pill gen"><a href="return.php"><h2>Return Book</h2></a></button>
            </div>
          </div>



    </body>
</html>