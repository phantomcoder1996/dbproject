<?php 
include 'dbconnection.php';

$uname = $_POST["name"];
$uemail = $_POST["email"];
if(isset($uname)&&isset($uemail)) //user has submitted the form 
{
$query="insert into NEWSLETTER VALUES ('$uname','$uemail');";
if(!mysqli_query($conn,$query)) 
{
	$output='failure to insert row into the table';

	echo $output;
}

header('location:home.html');
}




?>
