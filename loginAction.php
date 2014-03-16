<?php 
session_start(); 
include 'connection.php'; 

// Get the data collected from the user 
   $Email =$_POST["Email"]; 
   $Password =$_POST["Password"]; 
//Check for errors 
   if (empty($Email) or empty($Password ))  
   { 
       $_SESSION["message"] = "Must enter Username and Password " ; 
       header("Location: login.php"); //This sets the redirection information 
       exit; //Ends the script and redirects to above 
   } 
   
  //NEED MORE SECURITY - ESCAPE BAD CHARACTERS AND ENCRYPT PASSWORD - SEE ADVANCED. 
   
  //Create and run a query with the given details  
   $query = "SELECT * FROM Customer WHERE Email= '$Email' AND  Password = '$Password' ";  
   $result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());  
   
  // see if any rows were returned  
   if ($row = mysql_fetch_array($result)) { //Then we have a successful login  
    //Create a session variable to store the user name. 
     $_SESSION["authenticatedUser"] = $Email; 
    //We could also use information drawn from the database eg ID 
     $_SESSION['CustomerID']= $row['CustomerID']; 
     // Relocate to the logged-in page 
     header("Location: welcom.php"); 
   } 
   else { //Login was unsuccesful 
       $_SESSION["message"] = "Could not login as $Email " ; 
       header("Location: login.php"); //Go back to the login pages 
    } //End else     
?> 