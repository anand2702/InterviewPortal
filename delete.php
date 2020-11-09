
<?php
include 'config.php';
function delete($id){

echo 'delete '.$id;

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

$Id=$_GET['id'];
delete($Id);
echo $Id;
$q2="Delete from interview_schedule WHERE id = '$Id'";
echo $q2;
$res=mysqli_query($con,$q2);
if($res){
	echo $Id;
echo "Deleted Succesfully";
header("Location:view.php");
}
else
{
	echo "Error ".mysqli_error($con);
}
?>