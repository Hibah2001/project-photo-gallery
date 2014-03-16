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
	include "connection.php"
?>
<?php 
	
	//gather data from form
		$ID=$_GET['txtID'];
   		$Firstnames=$_GET['txtFirst'];
   		$Surname=$_GET['txtSurname'];
   		$Username=$_GET['txtUser'];
   		$Email=$_GET['txtEmail'];
   		$Password=$_GET['txtPassword'];
         
	// Was the Amend presed 
		if (isset($_GET['amend'])) 
		{ 
         $query = "UPDATE Customer SET ". 
                "Firstnames = '$Firstnames', " . 
                  "Surname = '$Surname', " .
				  "Username = '$Username', " .
				  "Email = '$Email', " .
				  "Password = '$Password' " .                     
                  "WHERE ID = $ID"; 

      // execute query 
      	$result = mysql_query($query) ; 
      
     	echo "Customer Record ".$ID." was amended OK";   
   
		}//end if 
	// Or was Delete pressed 
		else if (isset($_GET['delete'])) 
		{ 
     		$query = "DELETE FROM Customer WHERE ID = '$ID'"; 
      		if (!($result = @ mysql_query ($query, $connection))) die("No records deleted"); 
   			//Check the number of affected rows 
    		if(mysql_affected_rows()==1) 
   			{ 
     		 //Deletion ran OK 
       			echo "The Customer with ID = $ID was deleted"; 
   			} 
   
   			else 
   			{ 
     		//Failed to delete 
       		echo "Could not delete Customer with ID = $ID "; 
   			} 
    
		} 

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
