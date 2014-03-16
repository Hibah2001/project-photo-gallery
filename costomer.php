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
          <div align="center">
            <?php  

include "connection.php"; 
$query = "SELECT * FROM Customer";  

$result = mysql_query($query);  
// see if any rows were returned  
if (mysql_num_rows($result) > 0) {  
 // yes so print them one after another  
  echo "<table border=1>\n<tr>" .  
              "<th>CustomerID</th>" .  
              "<th>Firstname</th>" .  
              "<th>Surname</th>" .  
              "<th>Username</th>" .  
              "<th>Email</th>". 
              "<th>Password</th>".
			  "<th>Birthday</th></tr>";    
  while($row = mysql_fetch_array($result))  {  
     echo "<tr>";  
     echo "<td>".$row["ID"]."</td>";  
     echo "<td>".$row["Firstname"]."</td>";  
     echo "<td>".$row["Surname"]."</td>";  
     echo "<td>".$row["Username"]."</td>";  
	      echo "<td>".$row["Email"]."</td>";  
     echo "<td>".$row["Password"]."</td>";  
       echo "<td>".$row["datepicker"]."</td>";
     echo "<td><a href=deleteCustomerAction.php?ID=".$row["ID"].">Delete</a></td>";  
      
	  echo "<td><a href=customerChangeDelete.php?ID=".$row["ID"].">Amend</a></td>";
	  echo "</tr>";
   } //End While 
   echo "</table>";  
} //End if rows  

?>
          </div>
        </div>
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
