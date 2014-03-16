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
        <h1>ADMIN PAGE</h1>
          <p>&nbsp;</p>
          <p> <a href="tcpdf/examples/example_051.php">Best photo on PDF file by PDF Library</a></p>
          <p> <a href="pdf/ex.php">PDF Calendar from PDF Library, To show my schedule</a></p>
          <p> <a href="pdf/pdfreport.php">Report of Customer details from MySql By PDF Library</a></p>
          
        </div>
      </div>
      <div id="right_content">
        <div id="blog_text">
          <h1>Choce from the list below:</h1>
          <p><a href="costomer.php">Customer accounts</a></p>
          <p> <a href="logout1.php">Log out</a></p>
          
                    <h2>&nbsp;</h2>
                    <h2>AJAX Calendar with PHP and mySQL:</h2>
<h4>It is enabling me to simply click on a day to mark it as busy or free.</h4>
   <div align="center">
   <?PHP

// CSS/Stylesheets

print<<<END
<style type="text/css">
.calendar_date					{ font-family : Verdana, Arial, Helvetica, sans-serif; font-size : 14px; color : #222222; }
a.calendar_date					{ color: #0000aa; text-decoration: none; }
a.calendar_date:hover			{ color: #000080; text-decoration: underline; }

.calendar_navigation			{ font-family : Verdana, Arial, Helvetica, sans-serif; font-size : 14px; color : #222222; }
a.calendar_navigation			{ color: #0000aa; text-decoration: none; }
a.calendar_navigation:hover		{ color: #000080; text-decoration: underline; }

.calendar_day					{ font-family : Verdana, Arial, Helvetica, sans-serif; font-size : 11px; color : #222222; }
a.calendar_day					{ color: #0000aa; text-decoration: none; }
a.calendar_day:hover			{ color: #000080; text-decoration: underline; }

.calendar_date_number			{ font-family : Verdana, Arial, Helvetica, sans-serif; font-size : 10px; color : #222222; }
a.calendar_date_number			{ color: #0000aa; text-decoration: none; }
a.calendar_date_number:hover	{ color: #000080; text-decoration: underline; }

.calendar_date_small					{ font-family : Verdana, Arial, Helvetica, sans-serif; font-size : 12px; color : #222222; }
a.calendar_date_small					{ color: #0000aa; text-decoration: none; }
a.calendar_date_small:hover			{ color: #000080; text-decoration: underline; }

.calendar_navigation_small			{ font-family : Verdana, Arial, Helvetica, sans-serif; font-size : 12px; color : #222222; }
a.calendar_navigation_small			{ color: #0000aa; text-decoration: none; }
a.calendar_navigation_small:hover		{ color: #000080; text-decoration: underline; }

.calendar_day_small					{ font-family : Verdana, Arial, Helvetica, sans-serif; font-size : 10px; color : #222222; }
a.calendar_day_small					{ color: #0000aa; text-decoration: none; }
a.calendar_day_small:hover			{ color: #000080; text-decoration: underline; }

.calendar_date_number_small			{ font-family : Verdana, Arial, Helvetica, sans-serif; font-size : 9px; color : #222222; }
a.calendar_date_number_small			{ color: #0000aa; text-decoration: none; }
a.calendar_date_number_small:hover	{ color: #000080; text-decoration: underline; }

table.rounded td 		{ -moz-border-radius: 10px 10px 10px 10px; }
table.rounded5 td 		{ -moz-border-radius: 5px 5px 5px 5px; }
table.notrounded td 		{ -moz-border-radius: 0px 0px 0px 0px; }

.text					{ font-family : Verdana, Arial, Helvetica, sans-serif; font-size : 13px; color : #222222; }
a.text					{ color: #0000aa; text-decoration: none; }
a.text:hover			{ color: #222222; text-decoration: underline; }

</style>
END;


// Load Calendar for 'testuser' with AJAX day status selection

require "calendar.php";
print calendar("", "", "hibah", 0, 1);


?></div>
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
