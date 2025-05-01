<!DOCTYPE html>
<html>
    <head>
        <style>
body{background-color:aquamarine;}
        </style>
    </head>
<body>
<?php echo"<h1> Registers</h1>";?>

<form methods="get" action="insertAction.php">

 First name:<input type="text" name="first"><br>
 Last name:<input type="text" name="last"><br>
 Age:<input type="text" name="age"><br>
 <input type="submit" name="register" value="register">


</form>
</body>
</html>