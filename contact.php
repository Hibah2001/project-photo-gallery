<!DOCTYPE HTML>
<html>

<head>
  <title>PhotoArtWork</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <!-- stylesheets -->
  <link href="css/style.css" rel="stylesheet" type="text/css" />
  <link href="css/dark.css" rel="stylesheet" type="text/css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head>

<body>
  <div id="main">

    <!-- begin header -->
   <header>
      <div id="logo"><h1>BEST<a href="#">PHOTO</a>GALLERY</h1></div>
      <nav>
        <ul class="sf-menu" id="nav">
          <li class="selected"><a href="index.html">Home</a></li>
          <li><a href="login.php">Customer</a></li>
          <li><a href="gallery.php">Gallery</a><ul>
              <li><a href="flaker.php">Flaker</a></li>
              
            </ul>
          </li>
          <li><a href="blog.php">Blog</a><ul>
              <li><a href="http://hibah.net76.net/chat/index.php">Chat Room</a></li>
              
            </ul></li>
          <li><a href="contact.php">Contact</a> <ul>
              <li><a href="admin.php">Admin page</a></li>
              
            </ul></li>
        </ul>
      </nav>
    </header>
    <!-- end header -->

    <!-- begin content -->
    <div id="site_content">
      <div id="left_content">
        <h1>Contact</h1>
        <p>Say hello, using this contact form.</p>
        <?php
          // This PHP Contact Form is offered &quot;as is&quot; without warranty of any kind, either expressed or implied.
          // David Carter at www.css3templates.co.uk shall not be liable for any loss or damage arising from, or in any way
          // connected with, your use of, or inability to use, the website templates (even where David Carter has been advised
          // of the possibility of such loss or damage). This includes, without limitation, any damage for loss of profits,
          // loss of information, or any other monetary loss.

          // Set-up these 3 parameters
          // 1. Enter the email address you would like the enquiry sent to
          // 2. Enter the subject of the email you will receive, when someone contacts you
          // 3. Enter the text that you would like the user to see once they submit the contact form
          $to = 'enter email address here';
          $subject = 'Enquiry from the website';
          $contact_submitted = 'Your message has been sent.';

          // Do not amend anything below here, unless you know PHP
          function email_is_valid($email) {
            return preg_match('/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i',$email);
          }
          if (!email_is_valid($to)) {
            echo '<p style="color: red;">You must set-up a valid (to) email address before this contact page will work.</p>';
          }
          if (isset($_POST['contact_submitted'])) {
            $return = "\r";
            $youremail = trim(htmlspecialchars($_POST['your_email']));
            $yourname = stripslashes(strip_tags($_POST['your_name']));
            $yourmessage = stripslashes(strip_tags($_POST['your_message']));
            $contact_name = "Name: ".$yourname;
            $message_text = "Message: ".$yourmessage;
            $user_answer = trim(htmlspecialchars($_POST['user_answer']));
            $answer = trim(htmlspecialchars($_POST['answer']));
            $message = $contact_name . $return . $message_text;
            $headers = "From: ".$youremail;
            if (email_is_valid($youremail) && !eregi("\r",$youremail) && !eregi("\n",$youremail) && $yourname != "" && $yourmessage != "" && substr(md5($user_answer),5,10) === $answer) {
              mail($to,$subject,$message,$headers);
              $yourname = '';
              $youremail = '';
              $yourmessage = '';
              echo '<p style="color: blue;">'.$contact_submitted.'</p>';
            }
            else echo '<p style="color: red;">Please enter your name, a valid email address, your message and the answer to the simple maths question before sending your message.</p>';
          }
          $number_1 = rand(1, 9);
          $number_2 = rand(1, 9);
          $answer = substr(md5($number_1+$number_2),5,10);
        ?>
        <form id="contact" action="contact.php" method="post">
          <div class="form_settings">
            <p><span>Name</span><input class="contact" type="text" name="your_name" value="<?php echo $yourname; ?>" /></p>
            <p><span>Email Address</span><input class="contact" type="text" name="your_email" value="<?php echo $youremail; ?>" /></p>
            <p><span>Message</span><textarea class="contact textarea" rows="5" cols="50" name="your_message"><?php echo $yourmessage; ?></textarea></p>
            <p style="line-height: 1.7em;">To help prevent spam, please enter the answer to this question:</p>
            <p><span><?php echo $number_1; ?> + <?php echo $number_2; ?> = ?</span><input type="text" name="user_answer" /><input type="hidden" name="answer" value="<?php echo $answer; ?>" /></p>
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="send" /></p>
          </div>
        </form>
      </div>
      <div id="right_content">
<iframe width="450" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps/ms?msa=0&amp;msid=210180068722538973101.0004b74f767d823680070&amp;hl=en&amp;ie=UTF8&amp;t=m&amp;vpsrc=6&amp;ll=53.82913,-1.58864&amp;spn=0.01773,0.036478&amp;z=14&amp;output=embed"></iframe>
    
      </div>
    </div>
    <!-- end content -->

    <!-- begin footer -->
    <footer>
      <p> &copy; 2013 HIBAH ..</p>
      <p><a target="_blank" href="https://twitter.com/h_gallery"><img src="images/twitter.png" alt="twitter" /></a>&nbsp;<a target="_blank" href="https://www.facebook.com/pages/Best-photo-gallery/295050143881299"><img src="images/facebook.png" alt="facebook" /></a>&nbsp;<a target="_blank" href="rss.php"><img src="images/rss.png" alt="rss" /></a></p>
    </footer>
    <!-- end footer -->

  </div>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="js/jquery.sooperfish.js"></script>
  <!-- initialise sooperfish menu -->
  <script type="text/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
    });
  </script>
</body>
</html>
