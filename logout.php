<?php
require_once('include/init.php');
$session->logout();
redirect('login.php')
?>
<?php
if ($session->is_signed_in()) {
    $user = User::find_user_by_id($session['user_id']);
}

?>
