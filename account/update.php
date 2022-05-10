<?php
require_once('../include/init.php');

$address = $database->escape_string($_POST['address']);
$region = $database->escape_string($_POST['region']);
$town = $database->escape_string($_POST['town']);
$zip_code = $database->escape_string($_POST['zip_code']);
$phone = $database->escape_string($_POST['phone']);

User::update_user($address, $region, $town, $zip_code, $phone);

redirect('account.php', 'updated=true');
?>