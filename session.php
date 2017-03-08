<?php
// Start PHP session
session_start();

// Echo server hostname, and PHP session cookie ID
echo 'This server is ' . gethostname() . '</br>';
echo 'cookie is: ' . $_COOKIE['PHPSESSID'];
echo '<br><br>';

// Tell the user if they're logged in or not
if(isset($_SESSION['username']) && $_SESSION['username'] != '') {
	echo 'You are logged in as <b>' . $_SESSION['username'] . '</b>';
	die();
} else {
	echo 'You are <b>not</b> logged in';
}

echo '<br>';

// If the user has submitted the login form, log them in
if(isset($_POST['username']) && $_POST['username'] != '') {

	$_SESSION['username'] = $_POST['username'];

}
?>
<form action="" method="POST">
	<input type="text" name="username"></input>
	</br>
	<input type="submit" value="Login"></input>
</form>
