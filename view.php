<table cellpadding="10">
<tr>
<td>ID</td>
<td>Title</td>
<td>ListOfPeople</td>
<td>StartDateTime</td>
<td>EndDateTime</td>
<td>Edit</td>
<td>Delete</td>
</tr>
<?php

$con=mysqli_connect("localhost","root","","interview");
if(!$con)
{
	die(mysqli_error());
}
$quer="Select * from interview_schedule";
$res=mysqli_query($con,$quer);

while($row = mysqli_fetch_assoc($res)) { ?>
<tr>
<td align="center"><?php echo $row["id"]; ?></td>
<td align="center"><?php echo $row["InterviewTitle"]; ?></td>

<td align="center"><?php echo $row["ListOfPeople"]; ?></td>

<td align="center"><?php echo $row["StartTime"]; ?></td>

<td align="center"><?php echo $row["EndTime"]; ?></td>
<td align="center">
<a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a>
</td>
<td align="center">
<a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a>
</td>
</tr>
<?php  } ?>
</tbody>
</table>