<html>
<body>
<form method="post" action="add.php">
	Enter the interview title
	<input type="text" name="InterviewTitle">

	<br>

	Enter the list of people in the interview
	<input type="textbox" name="ListOfPeople">

	<br>

	Select starting date and time of interview.
	<input type="datetime-local" id="StartDateTime" name="StartDateTime">

	<br>
	
	Select ending time and date of interview.
	<input type="datetime-local" id="EndDateTime" name="EndDateTime">

	<input type="submit" value="Click here to add" name="submit">
</form>
</body>
</html>	