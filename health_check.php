<?php
include('MysqliDb.php');
include('db_cred.php');

$db = new MysqliDb($db_host, $db_user, $db_pass, $db_database);

if (!$db->ping()) {
  http_response_code(500);
}
