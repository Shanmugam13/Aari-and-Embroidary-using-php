<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="shanmugam";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{	
	 $name = $_POST['name'];
	 $number = $_POST['number'];
	 $email = $_POST['email'];
	 $message = $_POST['message'];

	 $sql_query = "INSERT INTO contact_info (name,number,email,message)
	 VALUES ('$name','$number','$email','$message')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		header("Location: index.html");
		exit();
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>