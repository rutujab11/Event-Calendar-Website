<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eventcalender";

// Create connection
$conn=mysqli_connect("localhost","root","","eventcalender");

$id=$_GET['did'];

$select="DELETE FROM event_details where event_id='$id'";
$query=mysqli_query($conn,$select) or die($select);
$_SESSION['msg']="RECORD DELETED";
header ("Location:http://localhost/EC/view_event.php");
?>
