<?php

include 'config.php';

include 'validate.php';


$title=$_POST['InterviewTitle'];
$ListOfPeople=$_POST['ListOfPeople'];
$start=$_POST['StartDateTime'];
$end=$_POST['EndDateTime'];
freetable();

if(validate($ListOfPeople,$start,$end)){
$query="Insert into interview_schedule(InterviewTitle, ListOfPeople, StartTime, EndTime) values('$title','$ListOfPeople','$start','$end') ";
$res=mysqli_query($con,$query);
if(!$res)
	echo 'Error '.mysqli_error($con);
else
	echo 'Sucessfully Inserted';
changetable($ListOfPeople,$start,$end);

$qu='Select * from interview_schedule';
$res=mysqli_query($con,$qu);
$id=-1;
if(mysqli_num_rows($res)>0)
{
	while($row=mysqli_fetch_array($res))
		$id=$row['id'];
}
#header("Location:mail.php?id=$id");
}






?>	