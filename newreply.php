<?php
//uncomment to show errors
//ini_set('display_errors', '1');
//ini_set('display_startup_errors', '1');
//error_reporting(E_ALL);
$conn = mysqli_connect("db.luddy.indiana.edu", "i494f20_team70", "my+sql=i494f20_team70","i494f20_team70");
if (!$conn) {
  die("Failed to connect to MySQL: " . mysqli_connect_error());
}
$time = time();
mysqli_query($conn, "INSERT INTO replies VALUES(NULL,'$_POST[thread]','$_POST[message]','$_POST[author]','$time')");
mysqli_query($conn, "UPDATE threads SET replies = replies + 1 WHERE id = '$_POST[thread]'");
echo "Reply Posted.<br><a href='msg.php?id=$_POST[thread]'>Return</a>";
?>
