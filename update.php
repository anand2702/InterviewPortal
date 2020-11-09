<?php


include 'config.php';
include 'validate.php';
function delete($id){


$con=mysqli_connect("localhost","root","","interview");


$query="Select ListOfPeople,StartTime,EndTime from interview_schedule where id='$id' ";
$res=mysqli_query($con,$query);
if($res)
{$row=mysqli_fetch_array($res);
	
print_r( $row['ListOfPeople'] );

$arr = preg_split ("/\,/",$row['ListOfPeople'] );
//print_r($arr);
$st=$row['StartTime'];
$en=$row['EndTime'];
//echo $st." ".$en;
for($i=0;$i<sizeof($arr);$i++)
{
$query2="Delete from user_interview_details where email='$arr[$i]' and start='$st' and end='$en'";
$res1=mysqli_query($con,$query2);

}

}
else
{
	echo "None fpund";
}
}








$con=mysqli_connect("localhost","root","","interview");
if(!$con)
{
	die(mysqli_error());
}
$id=$_POST['id'];
$title=$_POST['InterviewTitle'];
$ListOfPeople=$_POST['ListOfPeople'];
$start=$_POST['StartTime'];
$end=$_POST['EndTime'];
copy();
delete($id);
if(validate($ListOfPeople,$start,$end)){






$query="Update interview_schedule set InterviewTitle='$title',ListOfPeople='$ListOfPeople', StartTime='$start', EndTime='$end' where id='$id'";
$res=mysqli_query($con,$query);
if(!$res)
	echo 'Error '.mysqli_error($con);
else{
	echo "<script><alert('Updated Successfully')</script>";
	
}
changetable($ListOfPeople,$start,$end);
header("Location:mail.php?id=$id");
}
else
{   $oldlist=$_POST['oldlist'];
$oldst=$_POST['oldst'];
$olden=$_POST['olden'];
	changetable($oldlist,$oldst,$olden);
}



