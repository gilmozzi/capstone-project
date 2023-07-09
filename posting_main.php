<?php
//uncomment to show errors
//ini_set('display_errors', '1');
//ini_set('display_startup_errors', '1');
//error_reporting(E_ALL);
$conn = mysqli_connect("db.luddy.indiana.edu", "i494f20_team70", "my+sql=i494f20_team70","i494f20_team70");
if (!$conn) {
  die("Failed to connect to MySQL: " . mysqli_connect_error());
}
?>
<a href='index.html'>Return to main site</a>
<form action="newthread.php" method="POST">
Your Name: <input type="text" name="author"><br>
Thread Title: <input type="text" name="title"><br>
Thread:<br><textarea cols="60" rows="5" name="message"></textarea><br>
<input type="submit" value="Post Thread">
</form>

<?php
// We are selecting everything from the threads section in the database and ordering them newest to oldest.
$sql = mysqli_query($conn, "SELECT * FROM threads ORDER BY posted DESC");

// Now we are getting our results and making them an array
while($r = mysqli_fetch_array($sql)) {

// Everything within the two curly brackets can read from the database using $r[]
// We need to convert the UNIX Timestamp entered into the database for when a thread...
// ... is posted into a readable date, using date().
$posted = date("jS M Y h:i",$r[posted]);

// Now we will show the available threads
echo "<h3><a href='msg.php?id=$r[id]'>$r[title]</a> ($r[replies])</h3><h4>Posted by $r[author] on $posted</h4>";

// End of Array
}
?>
