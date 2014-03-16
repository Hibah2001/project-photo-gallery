<!DOCTYPE html>
<html>
<head>
<html>

<head>
  <title>Best photo gallery</title>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <!-- stylesheets -->
  <link href="css/style.css" rel="stylesheet" type="text/css" />
  <link href="css/dark.css" rel="stylesheet" type="text/css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>

    <script src="jquery.formLabels.js"></script>

    <link type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/themes/ui-darkness/jquery-ui.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link type="text/css" rel="stylesheet" href="http://o2v.net/wp-content/plugins/syntax-highlighter-and-code-prettifier/styles/shCore.css" />
    <link type="text/css" rel="stylesheet" href="http://o2v.net/wp-content/plugins/syntax-highlighter-and-code-prettifier/styles/shThemeDefault.css" />

    <script type="text/javascript" src="http://o2v.net/wp-content/plugins/syntax-highlighter-and-code-prettifier/scripts/shCore.js"></script>
    <script type="text/javascript" src="http://o2v.net/wp-content/plugins/syntax-highlighter-and-code-prettifier/scripts/shBrushCss.js"></script>
    <script type="text/javascript" src="http://o2v.net/wp-content/plugins/syntax-highlighter-and-code-prettifier/scripts/shBrushJScript.js"></script>
 <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />

  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>

  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

  <link rel="stylesheet" href="/resources/demos/style.css" />

  <script>

  $(function() {

    $( "#datepicker" ).datepicker();

  });

  </script>


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
        <div id="blog_container">
          <h4 class="select">   
          <p>Existing Customer / sign in</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
      
          <form method="post" action="loginAction.php" id="form1">
            <h3>Login</h3>
                        <div class="field"><input type="Email" name="Email" title="Email Address" /></div>
                        <div class="field"><input type="Password" name="Password" title="Password" /></div>
                        <div class="submit"><button type="submit">Login</button></div>
                    </form><?php  
  //Output the error message - should really put the styling in a stylesheet 
   if (isset($_SESSION['message'])) 
    echo "<h3><font color=red>".$_SESSION['message']."</font></h3>"; 
  ?>
        </div>
      </div>
      <div id="right_content">
        <div id="blog_text">
           <p>&nbsp;</p>
           <p>Join us now / Sign up</p>
          <p>&nbsp;</p>
           <p>&nbsp;</p>
           <p>&nbsp;</p>
         <form name="form1" method="post" action="addCustomer1.php">

  <div align="center">
    <table width="414" border="0">
      <tr>
        <td width="165">Given Name</td>
        <td width="233"><input name="txtGiven" type="text" id="txtGiven" /></td>
      </tr>
      <tr>
        <td>Family Name </td>
        <td><input name="txtFamily" type="text" id="txtFamily" /></td>
      </tr>
      <tr>
        <td>User Name</td>
        <td><input name="txtUser" type="text" id="txtUser" /></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><input name="txtEmail" type="text" id="txtEmail" /></td>
      </tr>
      <tr>
        <td>Password</td>
        <td><input name="txtPassword" type="password" id="txtPassword" /></td>
      </tr>
       <tr>
        <td>Birthday</td>
        <td><input name="datepicker" type="date" id="datepicker"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="Submit" value="Submit" /></td>
      </tr>
    </table>
  </div>
</form>
           <p>&nbsp;</p>
           <p>&nbsp;</p>
           <p>&nbsp;</p>
           <p>&nbsp;</p>
           <p>&nbsp;</p>
           <p>&nbsp;</p>
           <p>&nbsp;</p>
        <p>&nbsp;</p></div></div>
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
