<?php
//uncomment to show errors
//ini_set('display_errors', '1');
//ini_set('display_startup_errors', '1');
//error_reporting(E_ALL);
// Connecting to the database again
$conn = mysqli_connect("db.luddy.indiana.edu", "i494f20_team70", "my+sql=i494f20_team70","i494f20_team70");
if (!$conn) {
  die("Failed to connect to MySQL: " . mysqli_connect_error());
}
// Here's a link that will allow you to go back to the posting_main
echo "<a href='posting_main.php'>Go Back...</a>";
// This query selects the current thread using the $_GET value.
$sql = mysqli_query($conn, "SELECT * FROM threads WHERE id = '$_GET[id]'");
// Now we are getting our results and making them an array
while($r = mysqli_fetch_array($sql)) {

// Here is the thread title.
echo "<h2>$r[title]</h2>";

// Everything within the two curly brackets can read from the database using $r[]
// We need to convert the UNIX Timestamp entered into the database for when a thread...
// ... is posted into a readable date, using date().
$posted = date("jS M Y h:i",$r[posted]);

// Now this shows the thread with a horizontal rule after it.
echo "$r[message]<h4>Posted by $r[author] on $posted</h4><hr>";

// End of Array
}
echo "<h3>Replies...</h3>";

// Here we will get it to show the replies
// This query selects the replies from the database where the thread ID matches the thread $_GET value.
$sql = mysqli_query($conn, "SELECT * FROM replies WHERE thread = '$_GET[id]'");

// Now we are getting our results and making them an array
while($r = mysqli_fetch_array($sql)) {

// Everything within the two curly brackets can read from the database using $r[]
// We need to convert the UNIX Timestamp entered into the database for when a thread...
// ... is posted into a readable date, using date().
$posted = date("jS M Y h:i",$r[posted]);

// Now this shows the thread with a horizontal rule after it.
echo "$r[message]<h4>Posted by $r[author] on $posted</h4><hr>";

// End of Array
}
?>
<form action="newreply.php" method="POST">
Your Name: <input type="text" name="author">
<input type="hidden" value="<?php echo $_GET[id]; ?>" name="thread"><br>
Message:<br><textarea cols="60" rows="5" name="message"></textarea><br>
<input type="submit" value="Post Reply">
</form>
