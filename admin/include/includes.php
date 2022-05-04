<?php
require_once('../include/init.php');

if ($session->is_signed_in()) {
    $user = User::find_user_by_id($_SESSION['user_id']);
}
if(!$session->is_admin()){
    redirect('../index.php');
}
?>