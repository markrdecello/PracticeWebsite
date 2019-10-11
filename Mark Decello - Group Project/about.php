<?php
  session_start();
  include 'connect.php';
?>
<!doctype html>
<html lang="en">
  <head>
  <title>UHM - U Help Me</title>
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
        <h1>Welcome <?php echo $_SESSION['Username'] ?>! <br> Thanks for joining UHM!</h1>
        <form action="index.html" method="post">
          <p>Want to log out?</p>
          <button type="submit" name="logout">Log Out</button>
        </form>
      </div>
    </div>
    <div>
      <nav class="menu">
        <a class="logo" id="logo-name" href="index.html" target="_self">UHM</a>
        <a class="select-ref" id="select-login" href="#login" onclick="loginOpen()" target="_self"><?php echo $_SESSION['Username'] ?></a>
        <a class="select-ref" href="index.php" target="_self">Home</a>
        <!-- A forum for users to ask questions, create new topics, seek for help and more -->
        <a class="select-ref" href="forum.php" target="_self">Forum</a>
        <!-- Frequently Asked Questions from users -->
        <a class="select-ref" href="faq.php" target="_self">FAQ</a>
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
            <a href="about.php" target="_self">About</a>
            <a href="contact.php" target="_self">Contact</a>
        </div>
      </nav>
    </div>
    <div class="content"style="width:80%">
      <div class="title" style="width:100%">
        <h1>About Us</h1>
        <hr>
      </div>
      <div class="para" style="width:100%">
        <p>Hello there! You have entered the About page. We are called UHM, which stands for U Help Me!
        There are 3 creators, Mark Decello, Emmanuel Aguiles, and Czerinton Kunaraja. We are all college
        students who worked on this website.</p>
      </div>
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
