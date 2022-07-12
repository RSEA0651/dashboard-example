<?php
function connectDB() {
## Database stuff
global $db;
$db = ($GLOBALS["___mysqli_ston"] = mysqli_connect('localhost', 'USERNAME', 'PASSWORD'));
	if (!$db) {
	die("Unable to connect to database");
	}
if (!mysqli_select_db($GLOBALS["___mysqli_ston"], 'telescope')) {
		die("Unable to access telescope database");
	}
}
?>
