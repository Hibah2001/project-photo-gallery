<?php
$cfg_server="mysql2.000webhost.com";
$cfg_database	= "a5914385_hibah";
$cfg_username	= "a5914385_hibah";
$cfg_password	= "vip1103vip";

$conn = mysql_connect($cfg_server, $cfg_username, $cfg_password);
                   if($conn)
                   {
					if (!mysql_select_db($cfg_database))
					{
         die('Could not select Database: '.mysql_error());
					}
                   }
                if (!$conn)
		         {
                die('Could not connect to Database: '.mysql_error());
                 }
?>
