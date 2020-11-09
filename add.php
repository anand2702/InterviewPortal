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
$query="Insert into test values('$name','$mail','$phn') ";
$res=mysqli_query($con,$query);
if(!$res)
	echo 'Error';
else
	echo 'Done';



?>