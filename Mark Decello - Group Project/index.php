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
    <div class="content">
      <div class="title">
        <h1>Welcome to UHM!</h1>
        <hr>
      </div>
      <div class="para">
        <p>Welcome to UHM! UHM, short for U Help Me, is a website created for students in need of help that may
        want to remain annonymous. At UHM, we know many students may feel emabarassed asking for help since most
        students think the questions are stupid. Well, at UHM, there are no stupid questions. Our goal is to make
        sure students receive answers even if it's a simple question. So, please dont be afraid to ask questions
        even if it's a simple yes or no question. If you have any more questions about the website, please visit
        the FAQ page or email us your questions. More info about our contact information can be found in the
        contact page. So, let's help each other out and please welcome new students with kindness. Although UHM
        does not provide rules, we do ask from users to refrain from using profanity. Any user using foul
        language will have 3 warnings before giving them a temporary ban. However continuous usage of profanity
        will result in a permanent ban. So, let's be kind to other users and keep UHM nice and clean! Thank You!</p>
      </div>
      <div class="title" style="text-align:left">
        <h3>Popular Topics</h3>
        <hr>
      </div>
      <div class="para">
        Popular Topics Here
      </div>
      <div class="title" style="text-align:left">
        <h3>New Topics</h3>
        <hr>
      </div>
      <div class="para">
        New topics here
      </div>
      <div class="side">
        <h1 class="side-title">Quote of The Day</h1>
        <p class="side-content">"Our greatest weakness lies in giving up. The most certain way to succeed is always
          to try just one more time."<br><br> - Thomas A. Edison</p>
        <h1 class="side-title">News</h1>
        <p class="side-content">
          <a class="side-content-news" href="https://www.njcu.edu/news/dr-rosilyn-overton-receives-2019-loren-dunton-memorial-award" target="_blank">
            Dr. Rosilyn Overton Receives 2019 Loren Dunton Memorial award
          </a><br>
          <a class="side-content-news" href="https://www.njcu.edu/news/njcu-community-music-school-announces-summer-2019-music-camps-kids" target="_blank">
            The NJCU Community Music School Announces Summer 2019 Music Camps for Kids
          </a><br>
          <a class="side-content-news" href="https://www.njcu.edu/news/fire-science-alumnus-ed-mullen-named-chief-perth-amboy-fire-department" target="_blank">
            Fire Science alumnus, Ed Mullen Named Chief, Perth Amboy Fire Department
          </a><br>
          <a class="side-content-news" href="https://www.njcu.edu/news/congressman-frank-j-guarini-library-acquires-100-notable-books-2018" target="_blank">
            Congressman Frank J. Guarini Library Acquires "100 Notable Books of 2018"
          </a><br>
          <a class="side-content-news" href="https://www.njcu.edu/news/dr-john-donnellan-njcu-school-business-awarded-fulbright-scholar" target="_blank">
            Dr. John Donnellan, NJCU School of Business, Awarded Fulbright Scholar
          </a><br>
          <a class="side-content-news" href="https://www.njcu.edu/news" target="_blank">
            More NJCU News >>
          </a>
        </p>
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
