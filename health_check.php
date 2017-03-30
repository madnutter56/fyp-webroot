<?php
include('db_cred.php');

$db = new mysqli($db_host, $db_user, $db_pass, $db_database);

if (mysqli_connect_errno()) {
    header('HTTP/1.1 500 Internal Server Error');
    exit();
}
$result = mysqli_query($db, "SHOW STATUS LIKE 'wsrep_local_state_comment';");
$value = mysqli_fetch_array($result);

if($value[1]!='Synced' && $value[1]!='Donor/Desynced') {
    header('HTTP/1.1 500 Internal Server Error');
    exit();
}

