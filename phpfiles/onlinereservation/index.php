<?php include '../dbconnection.php';

$requesttype=$_REQUEST['q'];

if(strcmp(substr($requesttype,1,3), 'ids')==0)
{
$sql='SELECT ID FROM COURSES;';//add where sportsname=sportsname sent from request
$result=$conn->query($sql);


if($result->num_rows>0)
{
	
	$array='{"size":"'.$result->num_rows.'","ids":[';


$row;
for($count=1;$count<$result->num_rows;$count++)
  {
    $row=$result->fetch_assoc();
    $array.=$row['ID'].',';
  }
  $row=$result->fetch_assoc();

  $array=$array.$row['ID'].']}';
	
	echo $array;
}

}
elseif(strcmp($requesttype,'courseinfo'))
{if(isset($_REQUEST['courseid'])){
$courseID=$_REQUEST['courseid'];
$sql='SELECT DAY,Ctime FROM coursesschedule WHERE CID='.$courseID;
$result=$conn->query($sql);
if($result->num_rows>0)
{   $row;
	$array='{"size":"'.$result->num_rows.'","schedule":[';
	
	for($count=0;$count<$result->num_rows;$count++)
	{   $array=$array.'{"Day":"';
		$row=$result->fetch_assoc();
		$array=$array.$row['DAY'].'","Ctime":"'.$row['Ctime'].'"}';
		if($count!=($result->num_rows)-1) $array=$array.',';
	}
	$array.=']';
	$sql='SELECT  NoOfClasses,price,Name FROM courses join Trainer on TrainerID=Trainer.ID WHERE courses.ID='.$courseID;
	$result2=$conn->query($sql);
	$row2=$result2->fetch_assoc();
	$array.=',"classesno":"'.$row2['NoOfClasses'].'","price":"'.$row2['price'].'","trainername":"'.$row2['Name'].'"}';

	echo $array;

}
}
}



?>
