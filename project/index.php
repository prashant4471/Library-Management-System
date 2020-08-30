<!DOCTYPE html>
<html>
    <head>
        <title>Homepage</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="main.css" type="text/css">
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

        
          <div class="jumbotron jumbotron-fluid bg-transparent text-center text-white" id="jum">
                <h1 class=" font1 headshot1" style="font-size: 100px; width: 80%; margin-left: 10%;color: rgb(6, 12, 39);"><strong><i class="fas fa-book-open"></i> Cover 2 Cover <i class="fas fa-book-open"></i></strong></h1>
            <p class="lead font2" style="font-size: 25px;color: rgb(6, 12, 39);"><strong>A place to find all your favourites..</strong></p>
          </div>
       
          <div id="d1">
              <div class="container col-md-6 col-sm-12 text-center" style="margin: 0px; float: left; padding: 0 50px;">
                     <h1 class="gen1">COLLECTION BY GENRES</h1>
                     <button type="button" class="btn rounded-pill gen"><a href="genrebook.php?gen=Comics"><b>COMICS</b></a></button>
                     <button type="button" class="btn rounded-pill gen"><a href="genrebook.php?gen=Mystery"><b>MYSTERY</b></a></button>
                     <button type="button" class="btn rounded-pill gen"><a href="genrebook.php?gen=Novel"><b>NOVEL</b></a></button>
                     <button type="button" class="btn rounded-pill gen"><a href="genrebook.php?gen=Thriller"><b>THRILLER</b></a></button>
                     <button type="button" class="btn rounded-pill gen"><a href="genrebook.php?gen=Biography"><b>BIOGRAPHY</b></a></button>
                     <button type="button" class="btn rounded-pill gen"><a href="genrebook.php?gen=ScienceFiction"><b>SCIENCE FICTION</b></a></button>
                     <button type="button" class="btn rounded-pill gen" style="width: 94%;"><a href="genres.php"><b>VIEW ALL GENRES</b></a></a></p>
              </div>
              <div class="container col-md-6 col-sm-12 text-center" style="float: left; padding: 0% 50px;">
                  <img src="lib3.jpg" class="rounded-pill img-fluid img-thumbnail headshot"><br><br>
                  <h3 class="font2" style="font-size: 25px; text-align: center;">Let's Explore More.... Let's Know More....</h3>
              </div>
          </div>


          <div class="container text-center bs">
            <h1 class="font1" style="font-size: 50px;"><strong>All Time Favourites</strong></h1>
          </div>







          <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-interval="2000">
                <div class="container abc">
                    <div class="card-deck text-center">
                      <div class="card headshot">
                        <img src="book1.jpg" class="card-img-top " alt="..." height="260px">
                        <div class="card-footer">
                          <small style="font-size: medium;"><strong>Where The Crawdads Sings</strong></small>
                        </div>
                      </div>
                      <div class="card headshot">
                        <img src="book2.jpg" class="card-img-top" alt="..." height="260px">
                        <div class="card-footer">
                          <small style="font-size: medium;"><strong>Vanishing Half</strong></small>
                        </div>
                      </div>
                      <div class="card headshot">
                        <img src="book3.jpg" class="card-img-top" alt="..." height="260px">
                        <div class="card-footer">
                          <small style="font-size: medium;"><strong>Midnight Sun</strong></small>
                        </div>
                      </div>
                      <div class="card headshot">
                        <img src="book4.jpg" class="card-img-top" alt="..." height="260px">
                        <div class="card-footer">
                          <small style="font-size: medium;"><strong>White Fragility</strong></small>
                        </div>
                      </div>
                      <div class="card headshot">
                        <img src="book5.jpg" class="card-img-top" alt="..." height="260px">
                        <div class="card-footer">
                          <small style="font-size: medium;"><strong>Little Fires Everywhere</strong></small>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="carousel-item" data-interval="2000">
                <div class="container abc">
                  <div class="card-deck text-center">
                    <div class="card headshot">
                      <img src="book6.jpg" class="card-img-top " alt="..." height="260px">
                      <div class="card-footer">
                        <small style="font-size: medium;"><strong>The Immortals of Meluha</strong></small>
                      </div>
                    </div>
                    <div class="card headshot">
                      <img src="book7.jpg" class="card-img-top" alt="..." height="260px">
                      <div class="card-footer">
                        <small style="font-size: medium;"><strong>The Secret of Nagas</strong></small>
                      </div>
                    </div>
                    <div class="card headshot">
                      <img src="book8.jpg" class="card-img-top" alt="..." height="260px">
                      <div class="card-footer">
                        <small style="font-size: medium;"><strong>The Oath of Vayuputras</strong></small>
                      </div>
                    </div>
                    <div class="card headshot">
                      <img src="book9.jpg" class="card-img-top" alt="..." height="260px">
                      <div class="card-footer">
                        <small style="font-size: medium;"><strong>Stories We Never Tell</strong></small>
                      </div>
                    </div>
                    <div class="card headshot">
                      <img src="book10.jpg" class="card-img-top" alt="..." height="260px">
                      <div class="card-footer">
                        <small style="font-size: medium;"><strong>The Girl in Room 105</strong></small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item" data-interval="2000">
                <div class="container abc">
                  <div class="card-deck text-center">
                    <div class="card headshot">
                      <img src="book11.jpg" class="card-img-top " alt="..." height="260px">
                      <div class="card-footer">
                        <small style="font-size: medium;"><strong>Family Matters</strong></small>
                      </div>
                    </div>
                    <div class="card headshot">
                      <img src="book12.jpg" class="card-img-top" alt="..." height="260px">
                      <div class="card-footer">
                        <small style="font-size: medium;"><strong>Chanakya's Chant</strong></small>
                      </div>
                    </div>
                    <div class="card headshot">
                      <img src="book13.jpg" class="card-img-top" alt="..." height="260px">
                      <div class="card-footer">
                        <small style="font-size: medium;"><strong>Unaccustomed Earth</strong></small>
                      </div>
                    </div>
                    <div class="card headshot">
                      <img src="book14.jpg" class="card-img-top" alt="..." height="260px">
                      <div class="card-footer">
                        <small style="font-size: medium;"><strong>Wise and Otherwise</strong></small>
                      </div>
                    </div>
                    <div class="card headshot">
                      <img src="book15.jpg" class="card-img-top" alt="..." height="260px">
                      <div class="card-footer">
                        <small style="font-size: medium;"><strong>Godan</strong></small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>


          
          <div id="sec" style="padding:30px">
            <div class="container col-md-6 col-sm-12 text-center child">
              <h1 class="font1 rounded-pill gen2">MOST READ BOOKS</h1>
              <div class="card-deck text-center" style="padding-top: 30px;">
                <div class="card headshot">
                  <img src="book16.jpg" class="card-img-top " alt="..." height="260px">
                  <div class="card-footer">
                    <small style="font-size: medium;"><strong>The Krishna Key</strong></small>
                  </div>
                </div>
                <div class="card headshot">
                  <img src="book17.jpg" class="card-img-top" alt="..." height="260px">
                  <div class="card-footer">
                    <small style="font-size: medium;"><strong>A Rising Man</strong></small>
                  </div>
                </div>
                <div class="card headshot">
                  <img src="book18.jpg" class="card-img-top" alt="..." height="260px">
                  <div class="card-footer">
                    <small style="font-size: medium;"><strong>Fraudster</strong></small>
                  </div>
                </div>
              </div>
            </div>
            <div class="container col-md-6 col-sm-12 text-center child">
              <h1 class="font1 rounded-pill gen2">UPCOMING BOOKS</h1>
              <div class="card-deck text-center" style="padding-top: 30px;">
                <div class="card headshot">
                  <img src="book19.jpg" class="card-img-top " alt="..." height="260px">
                  <div class="card-footer">
                    <small style="font-size: medium;"><strong>The Girl Who Knew Too Much</strong></small>
                  </div>
                </div>
                <div class="card headshot">
                  <img src="book20.jpg" class="card-img-top" alt="..." height="260px">
                  <div class="card-footer">
                    <small style="font-size: medium;"><strong>The Bankster</strong></small>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="foot">
            <div class="container" style="padding-top: 50px;">
              <div class="f1 col-md-4 col-sm-6">
                <h3><strong>About Us</strong></h3>
                 <p style="text-align: justify;">Cover 2 Cover has one of the largest and most authoritative collections of books. We have a large collection of
                     all time favourites, novels and different types of books related to your interest</p><br>
                <p><small>Copyright ©2020 All rights reserved</small></p>
              </div>
              <div class="f1 col-md-4 col-sm-12 text-center">
                <h3><strong>Contact Us</strong></h3>
                <p>Prashant Maurya<br>+91-7654836754</p>
              </div>
              <div class="f1 col-md-4 col-sm-12 text-center">
                <h4 style="padding-bottom: 20px;"><strong>Follow Us</strong></h4>
                <p class="f2"><a href="#"><i class="fab fa-instagram fa-2x" style="color: azure;"></i></a></p>
                <p class="f2"><a href="#"><i class="fab fa-facebook-square fa-2x" style="color: azure;"></i></a></p>
                <p class="f2"><a href="#"><i class="fab fa-twitter-square fa-2x" style="color: azure;"></i></a></p>
              </div>
            </div>
          </div>




        <script src="index.js"></script>
    </body>
</html>