<?php

$servername="localhost";
$usernase="root";
$password="student";
$dbname="collegemgsystem";

$conn =new mysqli($servername, $username,$password, $dbname);

if($conn->connect_error)
{
    die("Connection failed: ".$conn->connect_error);
}
else
    echo "Connection created successfully";
//get values

$firstname =$_GET['first'];
$lastname =$_GET['last'];
$age =$_GET['age'];

//query creation

$sql="INSERT INTO student (firstname, lastname, age) VALUES ('$firstname','$lastname', $age)";

//execute the query
if($conn >query($sql) === TRUE)
{
    echo "Record inserted successfully";
}
else{
echo "Error inserterting record: ".$conn->error;

}
$conn >close();
?>


