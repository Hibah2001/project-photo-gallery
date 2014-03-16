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
        <div id="blog_container">
         <p align="center">&nbsp;</p>
         <p align="center">&nbsp;</p>
         <p align="center">&nbsp;</p>
         <p align="center">&nbsp;</p>
         <p align="center">
           <?php
$connection = mysql_connect("mysql.hostinger.co.uk","u646489498_best","u646489498_best");
if (!$connection)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("u646489498_best", $connection);
$newFirstname = $_POST['txtGiven'];
$newSurname = $_POST['txtFamily'];
$newUsername = $_POST['txtUser'];
$newEmail = $_POST['txtEmail'];
$newPassword = $_POST['txtPassword'];
$datepicker = $_POST['datepicker'];

$sql="INSERT Customer (Firstname, Surname, Username, Email, Password, datepicker) 
VALUES
('$newFirstname', '$newSurname', '$newUsername', '$newEmail', '$newPassword','$datepicker')"; 

   if (empty($newEmail) or empty($newPassword) or empty($newFirstname) or empty($datepicker))  
   { 
die ('Must enter all details');
   }


if (!mysql_query($sql,$connection))
  {
  die('Error: ' . mysql_error());
  }
echo "Thank you";
echo " ..... the record is added";
mysql_close($connection)
?>
           
         </p>
         <p align="center">&nbsp;</p>
         <p align="center">&nbsp;</p>
         <p align="center">&nbsp;</p>
         <p align="center">&nbsp;</p>
        </div>
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
