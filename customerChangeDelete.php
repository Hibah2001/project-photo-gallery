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
           <?php
	include "connection.php";

//get id of record
$ID=$_GET['ID'];

// create query 
$query = "SELECT * FROM Customer WHERE ID = '$ID'"; 

// execute query - put the results in $result (an array) 
$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error()); 

//Check to see you have got at least 1 record 
if (mysql_num_rows($result) > 0) 
{
$row = mysql_fetch_array($result);

//print out record details on a form     
?> 

  <form name="form1" id="form1" method="get" action= "customerChangeDeleteAction.php"> 
<table width="100%"  border="0"> 
        <tr> 
          <td width="25%">Customer ID </td> 
          <td width="75%"><input type="hidden" name="txtID" value="<?php echo $row["ID"]; ?>" />
		  <?php echo $row["ID"]; ?><font size="2"> (Field hidden as cannot change key field)</font></td> 
        </tr> 
        <tr> 
          <td>First Name</td> 
          <td><input type="text" name="txtFirst" value="<?php echo $row["Firstname"]; ?>"/></td> 
        </tr> 
        <tr> 
          <td>Surname</td> 
          <td><input type="text" name="txtSurname"  value="<?php echo  $row["Surname"]; ?>"/></td> 
        </tr> 
        <tr> 
          <td>User Name</td> 
          <td><input type="text" name="txtUser" value="<?php echo $row["Username"]; ?>"/></td> 
        </tr> 
		<tr> 
          <td>Email</td> 
          <td><input type="text" name="txtEmail" value="<?php echo $row["Email"]; ?>"/></td> 
        </tr>
		<tr> 
          <td>Password</td> 
          <td><input type="text" name="txtPassword" value="<?php echo $row["Password"]; ?>"/></td> 
        </tr>
        <tr><td><input name="amend" type="submit" value="amend" /></td><td><input name="delete" type="submit" value="delete" /></td></tr> 
      </table> 
    </form> 
<?php //Otherwise no rows found 
	} // end if
		else echo "No rows found"; 
    
	// Close the DBMS connection 
   		mysql_close($connection); 
?>
        </div>
      </div>
      <div id="right_content">
        <div id="blog_text">
          <h1>Choce from the list below:</h1>
          <p><a href="costomer.php">Customer accounts</a></p>
          <p> <a href="logout1.php">Log out</a></p>
   
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
