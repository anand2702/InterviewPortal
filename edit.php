<?php

include 'config.php';
$id=$_GET['id'];
$query = "SELECT * from interview_schedule where id='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<body>
<form name="form" method="post" action="update.php"> 
ID:

<p><input type="text" name="id" 
required value="<?php echo $row['id'];?>" readonly /></p>
Interview Title:
<p><input type="text" name="InterviewTitle" 
required value="<?php echo $row['InterviewTitle'];?>" /></p>
Old List of People:

<p><input type="text" name="oldpeople" 
required value="<?php echo $row['ListOfPeople'];?>" readonly /></p>

List of People:
<p><input type="text" name="ListOfPeople" 
required value="<?php echo $row['ListOfPeople'];?>" /></p>

Old Starting time:
<p><input type="text" name="oldst" 
required value="<?php echo $row['StartTime'];?>" /></p>


Starting time:
<p><input type="text" name="StartTime" 
required value="<?php echo $row['StartTime'];?>" /></p>

Old Ending Time:
<p><input type="text" name="oldend" 
required value="<?php echo $row['EndTime'];?>" /></p>


Ending Time:
<p><input type="text" name="EndTime" 
required value="<?php echo $row['EndTime'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
</div>
</body>
</html>
