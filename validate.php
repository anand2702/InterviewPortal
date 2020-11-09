<?php

function freetable(){

date_default_timezone_set("Asia/Kolkata");
$con=mysqli_connect("localhost","root","","interview");
$curr=date("Y-m-d H:i:s");
$query="Delete from user_interview_details where end<'$curr'";

}


function changetable($ListOfPeople,$start,$end){

echo 'In change table';
$arr = preg_split ("/\,/", $ListOfPeople);

$con=mysqli_connect("localhost","root","","interview");
$f=1;
print_r($arr);
if(!$con)
echo 'no';
for($i=0;$i<sizeof($arr);$i++)
{
$query="Insert into user_interview_details(email,start,end) values('$arr[$i]','$start','$end') ";
$res=mysqli_query($con,$query);
if(!$res)
	echo "Error 2 ".mysqli_error($con);
}

}






function aretwo($ListOfPeople)
{
	  echo 'hi';
$arr = preg_split ("/\,/", $ListOfPeople);
if(sizeof($arr)>1)
	return 1;
else	{
	echo "Less than 2 people in meeting/interview"."<br>";
	return 0;  
}

}



function isfree($usermail,$start,$end)
{
$con=mysqli_connect("localhost","root","","interview");
$query=" Select start from user_interview_details where email='$usermail'";
$start_arr=mysqli_query($con,$query);
$start_array = array();

$f=1;
if(mysqli_num_rows($start_arr)>0){
	while($row = mysqli_fetch_assoc($start_arr)) {

		array_push($start_array,$row['start']);

}
}

$query=" Select end from user_interview_details where email='$usermail'";

$end_arr=mysqli_query($con,$query);
$end_array = array();

$f=1;
if(mysqli_num_rows($end_arr)>0){
	while($row = mysqli_fetch_assoc($end_arr)) {

		array_push($end_array,$row['end']);

}}
$x=substr($start,0,10)." ".substr($start,11,5).":00";

$i=0;

$y=substr($end,0,10)." ".substr($end,11,5).":00";
for($i=0;$i<sizeof($start_array);$i++)
{

if(($x>=$start_array[$i] && $x<=$end_array[$i]) || ($y>=$start_array[$i] && $y<=$end_array[$i]) ){

	$f=0;
	break;
}
}

return $f;
}















function validate($ListOfPeople,$start,$end)
{
$arr = preg_split ("/\,/", $ListOfPeople);
$f=1;
$i=0;

for($i=0;$i<sizeof($arr);$i++)
{
if(isfree($arr[$i],$start,$end)==0)
	{   
		echo $arr[$i]." is not free "."<br>";
		$f=0;
		break;
}
	
}
if($start>$end)
{
	echo "Start time greater than end time";
	return 0;
}


$f2=aretwo($ListOfPeople);
echo $f." ".$f2;
return($f && $f2 );






}
?>