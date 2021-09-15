<?php

$server_name="localhost";

$username="root";

$password="";

$database_name="contactUsdb";
$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{die("Connection Failed:" . mysqli_connect_error());}
if(isset($_POST['send']))
{
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

//For inserting the values to mysql database 
$sql_query = "INSERT INTO entry_details (name,email,message)
VALUES ('$name','$email','$message')";
if (mysqli_query($conn, $sql_query))
{
echo "New Details Entry inserted successfully !";
}
else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>