<!DOCTYPE HTML>
<!-- Property of Anthony Krivonos and Mary Karroqe of OPPFI -->
<?php dirname('http://oppfi.info/index.php') ?>
<html>
      <head>
            <title>OPPFI Home</title>
            <link rel="stylesheet" type="text/css" href="theme.css">
            <script src="oppfi.js"></script>
      </head>
      <body>
            <span class="navbg">.</span>
            <div id="IWBnav" class="navbar">
                  <span onclick="location.href='about.php'">About OPPFI</span>
                  <span onclick="location.href='mission.php'">Our Mission</span>
                  <div class="navbg"><span onclick="location.href='index.php'">Home</span></div>
                  <span onclick="location.href='outreach.php'">Outreach</span>
                  <span onclick="location.href='contact.php'">Contact Us</span>
            </div>
            <div class="homeimgwrap">
                  <span class="homeimg" onmouseover="blurImg(BLUR);" onmouseout="blurImg(UNBLUR);">
                        <button onclick="window.location='about.php'">Who We Are</button>
                        <img id="centerimg" src="images/home.jpg" ondragstart="return false"/>
                        <img src="images/home.jpg" style="position:absolute; top:0; z-index:-2;" ondragstart="return false"/>
                  </span>
            </div>
            <br/>
            <div class="information">
                  <div class="lcolumnl">
                        Insert Content Here
                  </div>
                  <div class="rcolumns">
                        Insert Content Here
                  </div>
            </div>
            <div class="bottombar">
                  <span class="bottomleft">
                        Insert Content Here
                  </span>
                  <span class="bottomright">
                        Insert Content Here
                  </span>
            </div>
      </body>
</html>
