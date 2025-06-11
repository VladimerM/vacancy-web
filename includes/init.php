<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../classes/Job.php';


$database = new Database();
$db = $database->getConnection();

$job = new Job($db);
?>