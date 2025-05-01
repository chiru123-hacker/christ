<?php

function calc($daysLate)
{
   if($daysLate<5)
return $daysLate*100;
else
return $daysLate*200;
}
function getbook($name, $publicationY,$author,$daysLate=0)
{
    echo"<br>the book is:".$name;
    echo"<br>the publication is:".$publicationY;
    echo"<br>the author is: ".$author;
    echo"<br>the fine is:".calc($daysLate);
    echo"<br>_______________________________<br>";
    
}
getbook("Alice in wonderland ",343,"jack",5);
getbook("Harry squatter ",343,"jhon",7);
getbook("your book ",2014,"jhon");
?>