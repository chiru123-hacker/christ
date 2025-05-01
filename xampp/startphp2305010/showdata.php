<?php
//server side include (SSI)
require("open_db.php");
$sql = "SELECT * FROM student";
$result = $conn->query($sql);
if($result->num_rows >0) {
{
    echo"<table border='1'>";
    echo "<tr><td>ID</td><tr>FIRST NAME</td><td>LAST NAME</td><td></td></tr>";

    while($row = $result -> fetch_assoc())
    {
        echo "<tr><td>".$row['id']."</td><td>".
        $row['firstname']."</td><td>".
        $row["lastname"]."</td><td>".
        "<a href='deleteaction.php?id=".$row['id']."'>delete</a> </td></tr>";
    }

    }
   
echo"</table>";

}else
{echo"0 results found";}
require("close_db.php");?>