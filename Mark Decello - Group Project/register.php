<!doctype html>
<html lang="en">
  <head>
  <title>UHM</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" sizes="192x192" href="icon.png">
  <meta charset="utf-8">
  <meta name ="viewport" content="width=device-width, initial-scale=1">
  </head>

  <body>
    <div id="login">
      <div id="login-form">
        <span class="close" onclick="loginClose()">&times;</span>
        <form class="login-content" action="login.php" method="POST">
          <div class="container">
            <h1>LOG IN</h1>
            <br>
            <hr>
            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <button type="submit" value="login">Login</button>
            <label>
              <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>

            <button type="submit" value="register"><a href="register.php" target="_blank">Register</a></button>
          </div>
        </form>
      </div>
    </div>
    <div>
      <div>
        <nav class="menu">
          <a class="logo" id="logo-name" href="index.html" target="_self">UHM</a>

          <a class="select-ref" id="select-login" href="#login" onclick="loginOpen()" target="_self">Log In</a>
          <a class="select-ref" href="index.html" target="_self">Home</a>
          <!-- A forum for users to ask questions, create new topics, seek for help and more -->
          <a class="select-ref" href="forum.html" target="_self">Forum</a>
          <!-- Frequently Asked Questions from users -->
          <a class="select-ref" href="faq.html" target="_self">FAQ</a>
          <span class="dropdown">
            <a class="select-ref" href="#">Games</a>
            <div class="dropdown-content">
              <a href="RPS/rps.html" onclick="window.open('RPS/rps.html',
                                              'newwindow',
                                              'width=900,height=700');
                                              return false;">Mini Game 1</a>
            </div>
          </span>
          <div class="sandwich-menu" onclick="myFunction(this)">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
          </div>
          <div id="myNav" class="overlay">
            <div class="overlay-content">
              <a href="about.html" target="_self">About</a>
              <a href="contact.html" target="_self">Contact</a>
          </div>
        </nav>
      </div>
    <div class="container" style="width:30%; margin-left:auto; margin-right:auto; height:500px; transform:translateY(100px)">
      <form action="register_parse.php" method="post">
          <h1>Register</h1>
          <div class="form-group">
              <label>Username</label>
              <input type="text" name="username" class="form-control" placeholder="Enter Username">
          </div>
          <div class="form-group">
              <label>Password</label>
              <input type="password" name="password" class="form-control" placeholder="Enter Password">
          </div>
          <div class="form-group">
              <input type="submit" class="btn btn-primary" value="Submit">
              <input type="reset" class="btn btn-default" value="Reset">
          </div>
          <p>Already have an account?</p> <a href="login.php" style="color:blue">Login here</a>
      </form>

    </div>
    <footer class="footer" id="bottom">
      <div class="footer-head">
        <br>
         Check us out here!
         <br>
         <a href="https://www.facebook.com/" target="ublank" style="color:white; text-decoration: none">
		         <i class="fa fa-facebook" style="font-size:25px">     Facebook</i>
	       </a><br>
	       <a href="https://www.instagram.com/" target="ublank" style="color:white; text-decoration: none">
		         <i class="fa fa-instagram" style="font-size:25px">   Instagram</i>
	       </a><br>
	       <a href="https://www.google.com/" target="ublank" style="color:white; text-decoration: none">
		         <i class="fa fa-google" style="font-size:25px">   Google</i>
	       </a><br>
	       <a href="https://www.youtube.com/" target="ublank" style="color:white; text-decoration: none">
		         <i class="fa fa-youtube" style="font-size:25px">   Youtube</i>
	       </a>
         <p style="font-size:10px">Created by: Mark Decello, Emmanuel Aguiles, Czerinton Kunaraja</p>
      </div>
      <div class="footer-bottom">

      </div>
    </footer>

    <script src="script.js" charset="utf-8"></script>
  </body>
</html>
