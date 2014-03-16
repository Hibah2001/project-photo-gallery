<?php  
header("Content-Type: application/xml; charset=ISO-8859-1"); 
print '<?xml version="1.0" encoding="UTF-8"?' . '>'; 
print '<rss version="2.0"> 
<channel> 
<title>Best photo gallery</title> 
<description>RSS News</description> 
<link>http://hibah.net76.net/rss.php</link> '; 
//The following could be generated from a database using a loop 
print '<item> 
<title>Find out new photo</title> 
<description>I provide a photo gallery to show you some new photos</description> 
<link>http://hibah.net76.net/gallery.php</link> 
</item> 
<item> 
<title>Write your comment</title> 
<description>Your comment helps me to improve my web site</description> 
<link>http://hibah.net76.net/blog.php</link> 
</item>'; 
//End loop 
print '</channel> 
</rss>'; 

?> 
