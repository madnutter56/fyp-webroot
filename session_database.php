<?php
// Start PHP session
session_start();

include('MysqliDb.php');
include('db_cred.php');
$db = new MysqliDb($db_host, $db_user, $db_pass, $db_database);

// Echo server hostname, and PHP session cookie ID
echo 'This server is ' . gethostname() . '</br>';
echo 'cookie is: ' . $_COOKIE['PHPSESSID'];
echo '<br><br>';

// If the user has submitted the login form, log them in
if(isset($_POST['username']) && $_POST['username'] != '') {

        $data = Array();
        $data['session_id'] = $_COOKIE['PHPSESSID'];
        $data['username'] = $_POST['username'];

        $db->insert('sessions', $data);
}

//Get the session from the database
$db->where('session_id', $_COOKIE['PHPSESSID']);
$session = $db->getOne('sessions');

// Tell the user if they're logged in or not
if(isset($session) && $session['username'] != '') {
	echo 'You are logged in as <b>' . $session['username'] . '</b>';
	die();
} else {
	echo 'You are <b>not</b> logged in';
}

echo '<br>';
?>
<form action="" method="POST">
	<input type="text" name="username"></input>
	</br>
	<input type="submit" value="Login"></input>
</form>
