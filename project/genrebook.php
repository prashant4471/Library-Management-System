<?php
 include "connection.php";
 $gen=$_GET["gen"];
 ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Books</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="user.css" type="text/css">
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
                  <a class="nav-link" href="index.php">Home</a>
                </li>
              </ul>
            </div>
          </nav>

          
          <div class="container" style="margin-top: 30px; background: none;display: table; min-height: 100%;">

          <?php
             if($gen=="all")
             $res=mysqli_query($link,"select * from books");
             else
             $res=mysqli_query($link,"select * from books where genre='$gen'");
             $count=mysqli_num_rows($res);
             if($count){
                 ?>

            <table style="width: 100%;">
                <tr>
                    <td><strong>BOOK ID</strong></td>
                    <td><strong>NAME</strong></td>
                    <td><strong>GENRE</strong></td>
                    <td><strong>AUTHOR</strong></td>
                    <td><strong>PUBLISH YEAR</strong></td>
                    <td><strong>STATUS</strong></td>
                </tr>
                <?php
               
                while($row=mysqli_fetch_array($res)){
                    echo "<tr>";
                        echo "<td>";echo $row["id"];echo"</td>";
                        echo "<td>";echo $row["name"];echo"</td>";
                        echo "<td>";echo $row["genre"];echo"</td>";
                        echo "<td>";echo $row["author"];echo"</td>";
                        echo "<td>";echo $row["year"];echo"</td>";
                        echo "<td>";echo $row["status"];echo"</td>";
                }
                ?>
            </table>
            <?php
             }
             else{
               ?>
                <div class="alert alert-danger text-center">
                <strong style="color:white">No Books Found</strong>
                     </div>
            <?php
             }
             ?>

          </div>



    </body>
</html>