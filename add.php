<?php


$con=mysqli_connect("localhost","root","","interview");
if(!$con)
{
	die(mysqli_error());
}
$title=$_POST['InterviewTitle'];
$ListOfPeople=$_POST['ListOfPeople'];
$start=$_POST['StartDateTime'];
$end=$_POST['EndDateTime'];
$query="Insert into interview_schedule(InterviewTitle, ListOfPeople, StartTime, EndTime) values('$title','$ListOfPeople','$start','$end') ";
$res=mysqli_query($con,$query);
if(!$res)
	echo 'Error '.mysqli_error($con);
else
	echo 'Done';



?>