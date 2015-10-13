<!DOCTYPE HTML>
<!-- Property of Anthony Krivonos and Innovation Without Borders Club in Brooklyn Technical High School. -->
<?php
      function get_client_ip()
      {
           $ipaddress = '';
           if (getenv('HTTP_CLIENT_IP'))
               $ipaddress = getenv('HTTP_CLIENT_IP');
           else if(getenv('HTTP_X_FORWARDED_FOR'))
               $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
           else if(getenv('HTTP_X_FORWARDED'))
               $ipaddress = getenv('HTTP_X_FORWARDED');
           else if(getenv('HTTP_FORWARDED_FOR'))
               $ipaddress = getenv('HTTP_FORWARDED_FOR');
           else if(getenv('HTTP_FORWARDED'))
              $ipaddress = getenv('HTTP_FORWARDED');
           else if(getenv('REMOTE_ADDR'))
               $ipaddress = getenv('REMOTE_ADDR');
           else
               $ipaddress = 'UNKNOWN';
          return $ipaddress;
      }

      //Email
      $from = $_POST["from"];
      if ($from != "")
      {
            $subject = $_POST["subject"];
            $content = $_POST["content"];
            $content .= "\n\nSent from " . $from . "." . "\nIP Address: " . get_client_ip();
            $content = wordwrap($content,70);
            $headers = 'From: userhub@oppfi.info' . "\r\n" .
              'Reply-To: $from' . "\r\n" .
              'X-Mailer: PHP/' . phpversion();

            if (mail('oppfiwebsite@gmail.com', $subject, $content, $headers))
            {
                  $sent = true;
            }
      }
?>
<html>
      <head>
            <title>Contact IWB</title>
            <link rel="stylesheet" type="text/css" href="theme.css">
            <script src="oppfi.js"></script>
            <script type='text/javascript'>
                  <?php
                        $name_array = json_encode($namelist);
                        $comment_array = json_encode($commentlist);
                        $time_array = json_encode($timelist);
                        echo "var nameArray = ". $name_array . ";\n";
                        echo "var commentArray = ". $comment_array . ";\n";
                        echo "var timeArray = ". $time_array . ";\n";
                  ?>
            </script>
      </head>
      <body>
            <span class="navbg">.</span>
            <div id="IWBnav" class="navbar">
                  <span onclick="location.href='index.php'">Home</span>
                  <span onclick="location.href='about.php'">About OPPFI</span>
                  <div  onclick="location.href='contact.php'" class="navbg"><span>Contact Us</span></div>
                  <span onclick="location.href='mission.php'">Our Mission</span>
                  <span onclick="location.href='outreach.php'">Outreach</span>
            </div>
            <div class="information">
                  <div class="lcolumnm" style="margin-bottom: 40px">
                        <div class="artitle">Email Us</div>
                        <div class="article">
                              <form id="email" method="post" action="contact.php">
                                    <label>From:<input id="from" name="from" type="text" autocomplete="off"/></label>
                                    <br/>
                                    <label>Subject:<input id="subject" name="subject" type="text" autocomplete="off"/></label>
                                    <br/>
                                    <textarea id="content" name="content" cols="50" rows="10"></textarea>
                              </form>
                              <br/>
                              <button id="sendemail" onclick="send(EMAIL)">Send</button>
                              <br/>
                              <div class="error">Errors go here.</div>
                        </div>
                  </div>
                  <div class="rcolumnm">
                        <div class="artitle">Post a Comment</div>
                        <div class="article">
                        </div>
                  </div>
            </div>
            <script type="text/javascript">
                  cName = "<?php print_r($name)?>";
                  cComment = "<?php print_r($comment)?>";
                  cDate = "<?php print_r($today) ?>";
                  sent = "<?php print_r($sent) ?>";
                  if (cName != "" && cComment != "")
                  {
                  	alert(nameArray);
                        setComments();
                        mailFailure("Comment posted.", COMMENT);
                  }
                  if (sent == true)
                  {
                        mailFailure("Your message has been sent.", EMAIL)
                  }
            </script>
      </body>
</html>
