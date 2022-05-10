<?php
require_once('init.php');
$region_id = $_POST["region_id"];
$towns = $town::get_region_towns($region_id);
echo json_encode($towns);
?>