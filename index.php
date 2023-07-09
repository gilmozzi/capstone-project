<?php

$server = "db.luddy.indiana.edu";
$username = "i494f20_team70";
$password = "my+sql=i494f20_team70";
$database = "i494f20_team70";

$conn = mysqli_connect($server, $username, $password, $database);

// Error message display
error_reporting(E_ALL);
ini_set('display_errors', '1');


if (!$conn)
    { die("Failed to connect to MySQL: " . mysqli_connect_error()); }


$sql_create_table = "CREATE TABLE IF NOT EXISTS 'accounts' 
(
	'id' int(11) NOT NULL AUTO_INCREMENT,
  	'username' varchar(50) NOT NULL,
  	'password' varchar(255) NOT NULL,
    PRIMARY KEY ('id')
)";

$sql_insert_data = "INSERT INTO 'User' ('username', 'password',) VALUES ('$username', '$password')";

$UserName = $_POST['username'];
$UserPassword = $_POST['password'];

//this statement needs more work
if ($stmt = $conn->prepare('SELECT DISTINCT UserID, Password FROM User WHERE UserID =?;')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('i', $_POST['username']);
	$stmt->execute();
	// Store the result so we can check if the account exists in the database.
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($Username, $Password);
        $stmt->fetch();
        // Account exists, now we verify the password.
        // Note: remember to use password_hash in your registration file to store the hashed passwords.
		// Will need to change this to password_verify function in order to ensure encryption
		// Also setup for usernames to just be integers at the moment
        if ((int)$_POST['password'] === (int)$Password) {
            // Verification success! User has loggedin!
            // Create sessions so we know the user is logged in, they basically act like cookies but remember the data on the server.
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            echo 'Welcome ' . $_SESSION['name'] . '!';
			header("Location: https://cgi.luddy.indiana.edu/~team70/team-70/index.html");
        } else {
            // Incorrect password
            echo 'Incorrect username/password!';
        }
    } else {
        // Incorrect username
        echo 'Incorrect username/password!';
    }


	$stmt->close();
}
else {
	echo "statement not running";
}

mysqli_close($conn);

?>