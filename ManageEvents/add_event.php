<?php
  $db="eventcalender";
  if(isset($_POST['submit']))
  {
  	$i1=$_POST['name'];
	$i2=$_POST['date'];
	$i4=$_POST['branch'];
	$i5=$_POST['knowmore'];
	$i6=$_POST['register'];

	$conn=mysqli_connect("localhost","root","","eventcalender");

$sql = "INSERT INTO event_details(event_id,event_name,date,group_name,know_more,register) VALUES ('','$i1', '$i2','$i4', '$i5', '$i6')";

	mysqli_query($conn,$sql);
	header('Location:http://localhost/EC/view_event.php');

  }
?> 

<!DOCTYPE html>
<html>
<head>
	<title>ADD EVENT</title>
	<link rel="stylesheet" type="text/css" href="css/add.css">

	<script>
			function validate()
			{
				if(document.add.name.value=="")
				{
					alert("Please enter Event Name");
					document.add.name.focus();
					return false;
				}
				if(document.add.date.value=="")
				{
					alert("Please enter Event Date");
					return false;
				}
				if(document.add.branch.value=="-1")
				{
					alert("Please select Group Name");
					return false;
				}
				if(document.add.knowmore.value=="")
				{
					alert("Please add Know more details");
					document.add.knowmore.focus();
					return false;
				}
				if(document.add.register.value=="")
				{
					alert("Please add registration details");
					document.add.register.focus();
					return false;
				}

				return true;
			}
	</script>

</head>
<body>
		  <div class="logo">
    <a href="http://localhost/EC/main.php"><img src="images/logo.png"/></a>
  </div>
	<div class="title">
		<h1>EVENT CALENDAR</h1>
	</div>
	<div class="nav">
		<ul>
          <li> <a href="http://localhost/EC/cr_home.php"> HOME </a> </li>
          <li> <a href="http://localhost/EC/c_about.php"> ABOUT </a> </li>
          <li> <a href="http://localhost/EC/c_contact.php"> CONTACT </a> </li>
          <li> <a href="http://localhost/EC/login.php"> SIGNOUT </a> </li>
      	</ul>
	</div>
	
	<div class="r1">
		<h2>Add Upcoming Events</h2>
		<form name="add" onsubmit="return(validate())" method="POST" action="">
			<table>
			<tr>
				<td width="200px"> Event Name </td>
				<td> <input type="text" name="name" size="25"> </td>
			</tr>

			<tr>
				<td> Date  </td>
				<td> <input type="date" name="date" /> </td>
			</tr>

			<tr>
				<td> Group Name </td>
				<td> <select name="branch">
					<option value="-1"> Select </option>
					<option value="Script"> Script </option>
					<option value="SWE"> SWE </option>
					<option value="CSI"> CSI </option>
					<option value="PG"> P&G </option>
					<option value="Aarohan"> Aarohan </option>
					<option value="Mit Cultural"> Mit Cultural </option>
					<option value="E-cell"> E-cell </option>
					<option value="AT"> AT </option>
				</select> </td>
			</tr>

			<tr>
				<td> Know More </td>
				<td> <input type="text" name="knowmore" size="25"> </td>
			</tr>

			<tr>
				<td> Registeration Link </td>
				<td> <input type="text" name="register" maxlength="25" /> </td>
			</tr>


			</table> <br>

	
	
	</div>

	<div class="r2">
		<center>
		<button type="submit" name="submit">Submit</button>
		<button type="reset">Reset</button>
		</form>
		<a href="http://localhost/EC/cr_home.php"><button type="Cancel">Cancel</button></a>
		</center>

	</div>

		

	<footer>
  		Developers:&emsp; <a href="https://www.linkedin.com/in/aditi-chavan-96a055179/">Aditi Chavan</a> &emsp; | &emsp; <a href="https://www.linkedin.com/in/rutuja-bhandigani-758796195/">Rutuja Bhandigani</a> &emsp;
	</footer>

</body>
</html>
