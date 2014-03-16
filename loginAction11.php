<?php 
session_start(); 
include 'connection.php'; 

// Get the data collected from the user 
   $user_name =$_POST["user_name"]; 
   $user_pass =$_POST["user_pass"]; 
//Check for errors 
   if (empty($user_name) or empty($user_pass ))  
   { 
       $_SESSION["message"] = "Must enter Username and user_pass " ; 
       header("Location: admin.php"); //This sets the redirection information 
       exit; //Ends the script and redirects to above 
   } 
  //NEED MORE SECURITY - ESCAPE BAD CHARACTERS AND ENCRYPT PASSWORD - SEE ADVANCED. 
   
  //Create and run a query with the given details  
   $query = "SELECT * FROM login_admin WHERE user_name= '$user_name' AND  user_pass = '$user_pass' ";  
   $result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());  
   
  // see if any rows were returned  
   if ($row = mysql_fetch_array($result)) { //Then we have a successful login  
    //Create a session variable to store the user name. 
     $_SESSION["authenticatedUser"] = $user_name; 
    //We could also use information drawn from the database eg ID 
     $_SESSION['user_pass']= $row['user_pass']; 
     // Relocate to the logged-in page 
     header("Location: admin11.php"); 
   } 
   else { //Login was unsuccesful 
       $_SESSION["message"] = "Could not login as $user_name " ; 
       header("Location: admin.php"); //Go back to the login pages 
    } //End else     
?>
