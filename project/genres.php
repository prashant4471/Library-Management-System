<!DOCTYPE html>
<html>
    <head>
        <title>Genre</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="genres.css" type="text/css">
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
                <li class="nav-item">
                  <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="signup.php">SignUp</a>
                </li>
              </ul>
            </div>
          </nav>



          <div class="container text-center" style="margin-top: 50px; background: none;display: table; min-height: 100%;">

            <h1 class="gen1">ALL GENRES</h1> 
            
            <div>
            <a href="genrebook.php?gen=Fantasy"><button type="button" class="btn rounded-pill gen "><b>FANTASY</b></button></a>
            <button type="button" class="btn rounded-pill gen "><a href="genrebook.php?gen=Romance"><b>ROMANCE</b></a></button>
            <button type="button" class="btn rounded-pill gen "><a href="genrebook.php?gen=Adventure"><b>ADVENTURE</b></a></button>
            <button type="button" class="btn rounded-pill gen "><a href="genrebook.php?gen=Mystery"><b>MYSTERY</b></a></button>
            <button type="button" class="btn rounded-pill gen "><a href="genrebook.php?gen=Horror"><b>HORROR</b></a></button>
            <button type="button" class="btn rounded-pill gen "><a href="genrebook.php?gen=Thriller"><b>THRILLER</b></a></button>
            <button type="button" class="btn rounded-pill gen "><a href="genrebook.php?gen=Comics"><b>COMICS</b></a></button>
            <button type="button" class="btn rounded-pill gen "><a href="genrebook.php?gen=Novel"><b>NOVEL</b></a></button>
            <button type="button" class="btn rounded-pill gen "><a href="genrebook.php?gen=YoungAdult"><b>YOUNG ADULT</b></a></button>
            <button type="button" class="btn rounded-pill gen "><a href="genrebook.php?gen=Biography"><b>BIOGRAPHY</b></a></button>
            <button type="button" class="btn rounded-pill gen "><a href="genrebook.php?gen=Motivational"><b>MOTIVATIONAL</b></a></button>
            <button type="button" class="btn rounded-pill gen "><a href="genrebook.php?gen=ScienceFiction"><b>SCIENCE FICTION</b></a></button>
            <button type="button" class="btn rounded-pill gen " style="width:94%;"><a href="genrebook.php?gen=all"><b>ALL BOOKS</b></a></button>
            </div>
            
          </div>
    </body>
</html>
