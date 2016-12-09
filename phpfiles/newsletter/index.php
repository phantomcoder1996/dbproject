<?php 
include '../dbconnection.php';
if(isset($uname)&&isset($uemail)) //user has submitted the form 
{
$uname = $_POST['name'];
htmlspecialchars($uname, ENT_QUOTES, 'UTF-8');
$uemail = $_POST['email'];
htmlspecialchars($uemail, ENT_QUOTES, 'UTF-8');

$query="insert into NEWSLETTER VALUES ('$uname','$uemail');";
if(!$conn->query($query)) 
{
	$output='Failure to insert tuple';

	
}
else
{
	$output='Row successfully inserted in the database.';

}

//header('location:../../UI/Home');
echo $output;
}
$conn->close();



?>
