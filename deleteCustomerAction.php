<?php  
include "connection.php"; 
// if id provided, then delete that record  
$ID = $_GET['ID'] ;  
// create query to delete record  
$query = "DELETE FROM Customer WHERE ID = '$ID' ";  
$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());  
  // see if any rows were affected 
if (mysql_affected_rows() > 0) {  
  //If so , return to calling page using header function and HTTP_REFERER 
    header("Location: {$_SERVER['HTTP_REFERER']}");     
  }  
  else {  
    // print error message  
    echo "Error in query: $query. ".mysql_error(); 
    exit; 
  } 
?>